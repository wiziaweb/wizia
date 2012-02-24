NewsListView = Backbone.View.extend({
    el: $("#news-list"),

    initialize : function(){
      _.bindAll(this, 'render');
      this.template = _.template($('#mobile_template').html());

    },

    render : function(){
      var rendered = this.template(this.model.toJSON());
      $(this.el).html(rendered);
      alert('NewsListView Rendering' + this.model.toJSON());
      return this;
      },

});