
 NewsItemView = Backbone.View.extend({
    el: "#news-list",
    tagName: "li",

    template: _.template( $('#news-list').html() ),

    initialize : function(){
      // _.bindAll(this, 'render');
        //$(this.el).html(this.template(this.model.toJSON()));
        //return this;
        alert('');

    },

    render : function(){
      //alert(JSON.stringify(this.model));
      //$(this.el).html(this.template(this.model.toJSON()));
      //return this;
      //$(this.el).append("dede");
      return this;
    },


    addOne: function(todo) {
      //var view = new TodoView({model: todo});
      //$("#news-list").append(view.render().el);
      //$("#news-list").append(view.render().el);
    },
¶

    addAll: function() {
      $("#news-list").html("OK");
      //items.each(this.addOne);
    },

});