// DYNAMIC ICONS FOR CATEGORIES
function getIconTemplate(cat) {
  var iconMap = {
    food: 'fa-utensils',
    drink: 'fa-glass-martini-alt'
  }
  return iconMap[cat];
};

$(document).ready(function() {
  stickyMenu();
  playmakerDimensions();
  populatePlayDays();
  directorySubMenuDimensions();
});

$(window).resize(function() {
  playmakerDimensions();
});

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

var header = $('#header-wrapper');

$(window).scroll(function() {
  stickyMenu();
});

function stickyMenu() {
  var scrollTop = $(window).scrollTop();
  if (scrollTop > 180) {
    header.addClass('_ready');
  } else header.removeClass('_ready');
  if (scrollTop > 190) {
    header.addClass('_sticky');
  } else header.removeClass('_sticky');
}

function playmakerDimensions() {
  var winHeight = $(window).height();
  var winWidth = $(window).width();
  $('#playmaker-main').height(winHeight - 60).width(winWidth - 60);
}

// Playmaker

// Play Day
function populatePlayDays() {
  for (var i = 0; i < 7; i++) {
    var day = moment().add(i, 'days').format('dddd');
    var template = i == 0 ? '<li class="selected"><span role="button" data-value="'+day+'">It\'s '+day+'</span></li>' : '<li><span role="button" data-value="'+day+'">It\'s '+day+'</span></li>';
    $('#play_day').siblings('.dropdown').children('ul').append(template);
  }
}

function togglePlaymakerModal() {
  var playmakerModal = $('#playmaker');
  if (playmakerModal.hasClass('active')) {
    playmakerModal.removeClass('active');
    $('body').removeClass('modal-open');
  } else {
    playmakerModal.addClass('active');
    $('body').addClass('modal-open');
  }
}

function directorySubMenuDimensions() {
  var directoryLi = document.getElementById('directory-menu');
  var liPosition = directoryLi.getBoundingClientRect();
  var winWidth = $(window).width();
  $('.directory-sub').css({
    left: -1 * liPosition.x,
    width: winWidth
  });
}

$('._input .dropdown').on('click', 'span', function() {
  var value = $(this).data('value');
  var text = $(this).text();
  $(this).parents('._input').find('._selected').text(text);
  $(this).parents('._input').find('.play_input').attr('value', value);
  $(this).parents('._input').find('li').removeClass('selected');
  $(this).parents('li').addClass('selected');
});

$('#openPlayMaker').click(function(e) {
  e.preventDefault();
  togglePlaymakerModal();
});

$('#playmaker ._close').click(function() {
  togglePlaymakerModal();
});