<div id="events-calendar">
  <div class="_title">
    <i class="fas fa-calendar-alt"></i>
    <span>This Week</span>
  </div>
  <div class="_date_select">
    <ul></ul>
    <div class="_day"></div>
  </div>
  <div class="_events">
    <div class="_event">
      <a href="#">
        <div class="_event_dets">
          <div class="_title">
            IRIS, IRIS, IRIS
          </div>
          <p>A multi-part installation exploring the diverse meanings of the word 'iris'.</p>
          <i class="_more fas fa-angle-right"></i>
        </div>
        <div class="_icon">
          <i class="fas fa-utensils"></i>
        </div>
      </a>
    </div>
    <div class="_event">
      <a href="#">
        <div class="_event_dets">
          <div class="_title">
            IRIS, IRIS, IRIS
          </div>
          <p>A multi-part installation exploring the diverse meanings of the word 'iris'.</p>
          <i class="_more fas fa-angle-right"></i>
        </div>
        <div class="_icon">
          <i class="fas fa-utensils"></i>
        </div>
      </a>
    </div>
    <div class="_event">
      <a href="#">
        <div class="_event_dets">
          <div class="_title">
            IRIS, IRIS, IRIS
          </div>
          <p>A multi-part installation exploring the diverse meanings of the word 'iris'.</p>
          <i class="_more fas fa-angle-right"></i>
        </div>
        <div class="_icon">
          <i class="fas fa-utensils"></i>
        </div>
      </a>
    </div>
    <div class="_event">
      <a href="#">
        <div class="_event_dets">
          <div class="_title">
            IRIS, IRIS, IRIS
          </div>
          <p>A multi-part installation exploring the diverse meanings of the word 'iris'.</p>
          <i class="_more fas fa-angle-right"></i>
        </div>
        <div class="_icon">
          <i class="fas fa-utensils"></i>
        </div>
      </a>
    </div>
  </div>
</div>

<script>
  $('._date').click(function() {
    if (!$(this).parent('li').hasClass('active')) {
      $('._events').slideUp(300);
      var eventDate = $(this).data('date');
    }
  });
  $(document).ready(function() {
    $('._date_select ._day').text(moment().format('dddd'));
    for (var i = 0; i<7; i++) {
      var date = moment().add(i, 'days').format('D');
      if (i == 0) {
        $('._date_select ul').append('<li class="active"><span class="_date" data-date="'+moment().add(i, 'days').format('YYYYMMDD')+'">'+date+'</span></li>');
      } else {
        $('._date_select ul').append('<li><span class="_date" data-date="'+moment().add(i, 'days').format('YYYYMMDD')+'">'+date+'</span></li>');
      }
    }
  });
  $('._date_select').on('click', '._date', function() {
    if (!$(this).parent('li').hasClass('active')) {
      var selectedDate = $(this).data('date') + '';
      $('._date_select li').removeClass('active');
      $(this).parent('li').addClass('active');
      $('._date_select ._day').text(moment(selectedDate).format('dddd'));

      // ajax
      $('._events').fadeOut(300, function() {
        $('._events').empty();
        $.ajax({
          method: 'GET',
          url: globalVariable.loadEventsCalendar + '?time=' + selectedDate
        })
          .done(function(response) {
            $.each(response, function(i, e) {
              var template = '<div class="_event"><a href="'+e.url+'"><div class="_event_dets"><div class="_title">'+e.title+'</div><p>'+e.excerpt+'</p><i class="_more fas fa-angle-right"></i></div><div class="_icon"><i class="fas fa-utensils"></i></div></a></div>';
              $('._events').append(template);
            });
            $('._events').fadeIn(300);
            $('._events').imagesLoaded(function() {
              $('._event').each(function(i, e) {
                var time = (i + 1) * 150;
                var that = this;
                var t = setTimeout(function() {
                  $(that).animate({
                    opacity: 1
                  }, 300);
                }, time);
              });
            });
          });
      });
    }
  });
</script>
