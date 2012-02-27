EditorView = Backbone.View.extend({

    el: $("body"),

    initialize: function () {
      this.friends = new Friends( null, { view: this });
        //alert('EditorView');
      //Create a friends collection when the view is initialized.
      //Pass it a reference to this view to create a connection between the two
    },

    events: {
      "click #widget-element-text":  "showPrompt",
      "click #widget-element-audio":  "widgetAudio",
      "click #widget-element-video":  "widgetVideo",
      "click .widget_video":  "widgetVideoToolbar",
      "mouseout .widget_video":  "widgetVideoToolbarHide",
      "click #widget-element-code":  "widgetCode",
      "click #widget-element-gallery":  "widgetGallery",
      "click #widget-element-columns":  "widgetColumns",
      "click .del_code_widget": "deleteWidget",
    },

    showPrompt: function () {
      var friend_name = prompt("Who is your friend?");
      var friend_model = new Friend({ name: friend_name });
      //Add a new friend model to our friend collection
      this.friends.add( friend_model );
    },
    deleteWidget: function (e) {
        e.preventDefault();
        widget_to_remove = $(e.target).attr('id');
        if(confirm("Supprimer le widget"))
        {
          $("#widget_"+widget_to_remove).remove();
        }
    },

    //--- AUDIO ---
    widgetAudio: function () {
        $("#website-preview-editor").append("<br>you add a audio widget <br>");
        var template = _.template( $("#search_template").html(), {widgetid : "widget145"} );
        $("#website-preview-editor").append( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    //--- VIDEO ---
    widgetVideo: function () {
        $("#website-preview-editor").append("<br>Widget Video  <br>");
        var template = _.template( $("#video_widget").html(), {widgetid : "widget145"} );
        $("#website-preview-editor").append( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    widgetVideoToolbar: function () {
        $("#toolbar").show();
        $("#toolbar").html("<br>you add a Toolbar widget <br>");
    },

    widgetVideoToolbarHide: function () {
        $("#toolbar").hide();
    },

    //--- CODE ---
    widgetCode: function () {
        $("#website-preview-editor").append("<br>you add a code widget <br>");
        var timestamp = new Date().getTime();
        var template = _.template( $("#code_widget").html(), {widgetid : timestamp} );
        $("#website-preview-editor").append( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    //--- GALLERY ---
    widgetGallery: function () {
        $("#website-preview-editor").append("<br>you add a code widget <br>");
        var timestamp = new Date().getTime();
        var template = _.template( $("#gallery_widget").html(), {widgetid : timestamp} );
        $("#website-preview-editor").append( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
        $( "#tabs" ).tabs();
    },

    //--- COLUMNS ---
    widgetColumns: function () {
        $("#website-preview-editor").append("<br>you add a code widget <br>");
        var timestamp = new Date().getTime();
        var template = _.template( $("#columns_widget").html(), {widgetid : timestamp} );
        $("#website-preview-editor").append( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);

        var initial_widget_width;
        var widget_id;

    $(".splitter_hand").draggable({

      axis: 'x',

      start: function(event,ui){
         //event.preventDefault();
         widget_id = $(event.target).attr('id');

         initial_widget_width =   $("#widget_"+widget_id+" > .widget_splitter_left").width() +  $("#widget_"+widget_id+" > .widget_splitter_right").width() + 2 ;
         //alert(initial_widget_width);
      },

      drag: function() {
          //event.preventDefault();
          //widget_id = $(event.target).attr('id');

         if($("#widget_"+widget_id).width() >= initial_widget_width )
          {

              var offset = $("#widget_"+widget_id+" > .splitter_hand").offset();
              $("#widget_"+widget_id+" > .axis_control").html("actual offset : " + offset.left + "<br>");
              $("#widget_"+widget_id+" > .widget_splitter_left").outerWidth(offset.left - $("#widget_"+widget_id).offset().left - 2 );
              $("#widget_"+widget_id+" > .widget_splitter_right").outerWidth(initial_widget_width - offset.left - 2 );
              $("#widget_"+widget_id+" > .widget_splitter_right").html("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id magec metus diam, sodales id posuere id, gravida vel tellus. Cras egestas tristique semper. ");
          }else{
              //$(".axis_control","#"+widget_id).html('overload');
          }

      },

      stop:function(event,ui){
               // alert(widget_id);
      }
      }
    );

    },

    addFriendLi: function (model) {
      //The parameter passed is a reference to the model that was added
      $("#friends-list").append("<li>" + model.get('name') + "</li>");
      //Use .get to receive attributes of the model
    },



});







