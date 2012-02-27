
ModuleBarView = Backbone.View.extend({
    el: $("body"),
    initialize: function () {
               alert('ModuleBarView');
    },

    events:{
        "click .main_button_buy"    :   "mainButtonBuy",
        "click .main_button_page"   :   "mainButtonPage",
        "click .main_button_news"   :   "mainButtonNews",
        "click .main_button_mobile" :   "mainButtonMobile",
        "click .main_button_exit"   :   "mainButtonExit",
        "click #backtoschool"       :   "initialState",
    },

    // main buttons
    mainButtonBuy: function () {
        var template = _.template( $("#buy_template").html(), {} );
        $("#main-editor").html( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    // main buttons
    mainButtonPage: function () {
        var template = _.template( $("#page_template").html(), {} );
        $("#main-editor").html( template );
        var template_modulebar = _.template( $("#page-tree").html(), {} );
        $("#modulebar").html( "++" );
        var template_panelbar = _.template( $("#page-tree").html(), {} );
        $("#panelbar").html( template_panelbar );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
        this.showPanelBar(200);
    },

    // Action pour le bouton NEWS
    mainButtonNews: function () {



        var template = _.template( $("#news-template").html(), {} );
        $("#main-editor").html( template );
        var template_modulebar = _.template( $("#page-tree").html(), {} );
        $("#modulebar").html( "NEWS2" );
        var template_panelbar = _.template( $("#news-panelbar").html(), {} );
        $("#panelbar").html( template_panelbar );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
        $( "#newsitems" ).sortable({ axis: 'y' });
        this.showPanelBar(300);
    },

    // main buttons
    mainButtonMobile: function () {

        //alert(myAlbum);
        alert(JSON.stringify(items));
        // $("#news-list").html("OK");
        var newslistview = new NewsItemView();
        newslistview.addAll();
        newslistview.render();
        /*_.each({one : 1, two : 2, three : 3},function(num,key){
          //alert(num);
            //var newslistview = new NewsItemView({model: item});
            //newslistview.render();
        });     */

        //alert('');



       /* $("#dialog" ).dialog({
			height: 140,
			modal: true
		});*/
        //return this;
    },

    mainButtonExit: function () {
        //var template = _.template( $("#mobile_template").html(), {} );

        if($("#main-editor").css("left")=="250px")
        {
            $("#modulebar").css("width",200);
            $("#panelbar").hide();
            $("#main-editor").css("left",200);
        }else{
            $("#modulebar").css("width",50);
            $("#panelbar").show();
            $("#main-editor").css("left",250);
        }

    },

    initialState: function () {
        var template = _.template( $("#module_bar").html(), {} );
        $("#modulebar").html( template );
        this.hidePanelBar();
    },

    hidePanelBar: function(){
        $("#modulebar").css("width",200);
        $("#panelbar").hide();
        $("#main-editor").css("left",200);
    },

    showPanelBar: function(panelbarwidth){

        $("#modulebar").css("width",50);
        $("#panelbar").css("width",panelbarwidth);
        $("#panelbar").show();
        $("#main-editor").css("left",panelbarwidth+50);
    }
});