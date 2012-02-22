PageView = Backbone.View.extend({
    el: $("body"),
    initialize: function () {
      this.friends = new Friends( null, { view: this });
      //Create a friends collection when the view is initialized.
      //Pass it a reference to this view to create a connection between the two
    },
    events:{
      "click .page-tree": "showPageTree",
      "click .page-add": "addPage",
      "click .page-add-sub": "PageAddSub",
    },

    // main buttons
    addPage: function () {
        $('#page-tree-list').append("<li ><a href=# class=page>ADDED!!!</a></li>");
        alert('PageView');

    },

    // main buttons
    PageAddSub: function (event) {
      widget_id = $(event.target).attr('id');
      alert(widget_id);
       $("#"+widget_id).parent().append("<ul><li>ADDED!!!</li></ul>");
        ///$('#page-tree-list').append("<li>ADDED!!!</li>");

    },
        // main buttons
    showPageTree: function () {
        var template = _.template( $("#page-tree").html(), {} );
        $("#main-editor").html( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
        $( "#dialog" ).dialog({
			height: 140,
			modal: true
		});
        	$('#page-tree-list').sortable();
            $('#website-preview-editor').show("slow");
    }
});