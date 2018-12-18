$('.search-tab .option').click(function() {
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
  } else {
    $('.search-tab .option').removeClass('active');
    $(this).addClass('active');
  }
});

$('.search-tab .option').focusout(function() {
  $('.search-tab .option').removeClass('active');
});

$(document).click(function(e) {
  console.log(e.target);
});
