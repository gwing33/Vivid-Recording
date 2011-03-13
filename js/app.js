var PageLoader = Backbone.Controller.extend({
  routes: {
    "": "get_page",
    "/:page": "get_page"
  },
  
  get_page: function(page) {
    if (page == '' || page == null) {
      page = 'index';
    }
    
    $('#content').load('/api/' + page, this.set_nav(page));
  },
  
  set_nav: function(id) {
    $('.nav a').removeClass('current');
    $('#' + id).addClass('current');
  }
});

$(function() {
  new PageLoader();
  Backbone.history.start();
});