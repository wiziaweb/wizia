LeftBarView = Backbone.View.extend({
    el: $("body"),
    initialize: function () {

    },
    events:{
        "click .main_button_buy": "mainButtonBuy",
        "click .main_button_page": "mainButtonPage",
        "click .main_button_news": "mainButtonNews",
        "click .main_button_mobile": "mainButtonMobile",
        "click .main_button_exit": "mainButtonExit",
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
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    // main buttons
    mainButtonNews: function () {
        var template = _.template( $("#news_template").html(), {} );
        $("#main-editor").html( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
    },

    // main buttons
    mainButtonMobile: function () {
        var template = _.template( $("#mobile_template").html(), {} );
        $("#main-editor").html( template );
        $("#notification-label").show().effect("highlight", {mode:"hide"}, 3000);
        $( "#dialog" ).dialog({
			height: 140,
			modal: true
		});
    },
    // main buttons
    mainButtonExit: function () {
        //var template = _.template( $("#mobile_template").html(), {} );

        if($("#main-editor").css("left")=="250px")
        {
        $("#left_menu").css("width",200);
        $("#sub-left-menu").hide();
        $("#main-editor").css("left",200);
        }else{
        $("#left_menu").css("width",50);
        $("#sub-left-menu").show();
        $("#main-editor").css("left",250);
        }

    },
});