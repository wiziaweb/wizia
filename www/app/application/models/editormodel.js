
  NewsItem = Backbone.Model.extend({
    //Create a model to hold friend atribute
    name: null,
    artist: null,
  });

  NewsItems = Backbone.Collection.extend({
    model: NewsItem
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

    var news1 = new NewsItem({ name: "How Bizarre", artist: "OMC" });
	var news2 = new NewsItem({ name: "Sexual Healing", artist: "Marvin Gaye" });
	var news3 = new NewsItem({ name: "Talk It Over In Bed", artist: "OMC" });

	var myAlbum = new NewsItems([ news1, news2, news3]);
    myAlbum.fetch();
	console.log(  ); // [song1, song2, song3]

