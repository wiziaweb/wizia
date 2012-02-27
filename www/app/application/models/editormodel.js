
  NewsItem = Backbone.Model.extend({
    //Create a model to hold friend atribute
    name: "Talk It Over In Bed",
    artist: "",
  });

  NewsItems = Backbone.Collection.extend({
    model: NewsItem,
     // Save all of the todo items under the `"todos"` namespace.
    localStorage: new Store("todos-backbone"),
    }
  );

  Friend = Backbone.Model.extend({
    //Create a model to hold friend atribute
    name: null
  });

  Friends = Backbone.Collection.extend({
    //This is our Friends collection and holds our Friend models
    initialize: function (models, options) {
      this.bind("#widget-element-html", options.view.addFriendLi);
      //Listen for new additions to the collection and call a view function if so
    }
  });
   	var items = new NewsItems();

    var item_one = new NewsItem({ name:"1",artist:"offspring" });
    var item_two = new NewsItem({ name:"2",artist:"offspring" });
    items.add(item_one);
    items.add(item_two);

	//var myAlbum = new NewsItems(news1);
    //myAlbum.fetch();