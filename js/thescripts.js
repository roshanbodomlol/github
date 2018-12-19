// DYNAMIC ICONS FOR CATEGORIES
function getIconTemplate(cat) {
  var iconMap = {
    food: 'fa-utensils',
    drink: 'fa-glass-martini-alt'
  }
  return iconMap[cat];
};

// AJAX LOAD MORE
$('.loadMore').click(function() {
  $(this).addClass('rotating');
  var that = this;
  var loadURL = $(this).data('load');
  var loadContainer = $(this).data('container');
  $.ajax({
    method: 'GET',
    url: loadURL,
  })
    .done(function(response) {
      $.each(response, function(i, e) {
        var template = '<div class="col-sm-3"><div class="k-list _basic"><a href="'+e.link+'"><div class="_img"><img src="'+e.img+'" alt=""></div><div class="_dets"><div class="_title">'+e.title+'</div><div class="_icon"><i class="fas '+getIconTemplate(e.cat)+'"></i></div></div></a></div></div>';
        $(loadContainer).append(template);
      });
      $(that).removeClass('rotating');
    });
});