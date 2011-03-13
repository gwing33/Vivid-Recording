var PageLoader = Backbone.Controller.extend({
  routes: {
    "": "get_page",
    "/:page": "get_page"
  },
  
  get_page: function(page) {
    $('#content').load('/api/' + page);
  }
});

$(function() {
  new PageLoader();
  Backbone.history.start();
});