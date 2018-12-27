<div id="trending-ajax">
  <div class="_title-row">
    <h3 class="float-left">TRENDING</h3>
    <div class="time-range float-right">
      <span class="_time_range">TODAY</span>
      <div class="_icon"><i class="fas fa-angle-down"></i></div>
      <div class="_sub">
        <ul>
          <li><span class="_date_change" data-date="TODAY">TODAY</span></li>
          <li><span class="_date_change" data-date="WEEK">THIS WEEK</span></li>
          <li><span class="_date_change" data-date="MONTH">THIS MONTH</span></li>
          <li><span class="_date_change" data-date="YEAR">THIS YEAR</span></li>
        </ul>
      </div>
    </div>
  </div>
  <ul id="trending-topics">
    <li class="active"><a href="#" data-load="http://localhost:3030/ajax/moretrending.json">NEWS</a></li><li>
      <a href="#" data-load="http://localhost:3030/ajax/moretrending.json">RESTAURANTS</a></li><li>
        <a href="#" data-load="http://localhost:3030/ajax/moretrending.json">BARS</a></li><li>
          <a href="#" data-load="http://localhost:3030/ajax/moretrending.json">EVENTS</a></li>
  </ul>
  <div class="trending-wrap">
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small1.jpg" alt="">
        </div>
        <div class="num-index">1</div>
        <div class="_desc">
          Eight 2018 Emmy-Winning TV Shows You Should Watch Immediately
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small2.jpg" alt="">
        </div>
        <div class="num-index">2</div>
        <div class="_desc">
            A Look Inside Wes Anderson's First Curated Art Exhibition
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small3.jpg" alt="">
        </div>
        <div class="num-index">3</div>
        <div class="_desc">
          Sweden's Ice Hotel Has Unveiled Its New Batch of Super-Chilled Artist-Created Rooms
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small4.jpg" alt="">
        </div>
        <div class="num-index">4</div>
        <div class="_desc">
          A Look Inside Wes Anderson's First Curated Art Exhibition
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small5.jpg" alt="">
        </div>
        <div class="num-index">5</div>
        <div class="_desc">
          A Look Inside Wes Anderson's First Curated Art Exhibition
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small6.jpg" alt="">
        </div>
        <div class="num-index">6</div>
        <div class="_desc">
          Swedish Furniture Giant IKEA Is Looking to Open in New Zealand
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small7.png" alt="">
        </div>
        <div class="num-index">7</div>
        <div class="_desc">
          Your Guide to Dining Out in Auckland on Christmas Day
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small8.jpg" alt="">
        </div>
        <div class="num-index">8</div>
        <div class="_desc">
          You'll Be Able to Binge-Watch All Eight 'Harry Potter' Movies on Netflix in 2019
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small9.jpg" alt="">
        </div>
        <div class="num-index">9</div>
        <div class="_desc">
          You'll Be Able to Binge-Watch All Eight 'Harry Potter' Movies on Netflix in 2019
        </div>
      </div>
    </a>
    <a href="#">
      <div class="trend-box">
        <div class="_img">
          <img src="img/list/small10.jpg" alt="">
        </div>
        <div class="num-index">10</div>
        <div class="_desc">
          Concrete Playground's 2018 Boxing Day Movie Smackdown
        </div>
      </div>
    </a>
  </div>
</div>
<script>
  var trendingDate = 'today';
  var trendingUrl = 'http://localhost:3030/ajax/moretrending.json';
  $(document).ready(function() {
    $('._date_change').click(function() {
      trendingDate = $(this).data('date');
      $('._date_change').removeClass('active');
      $('._time_range').text($(this).text());
      populateTrends();
      $(this).addClass('active');
    });
    $('#trending-topics a').click(function(e) {
      e.preventDefault();
      if (!$(this).parent('li').hasClass('active')) {
        trendingUrl = $(this).data('load');
        populateTrends();
        $(this).parent('li').addClass('active');
      }
    });
  });
  function populateTrends() {
    $('#trending-topics li').removeClass('active');
      $('.trending-wrap').fadeOut(300, function() {
        $('.trending-wrap').empty();
        $.ajax({
          method: 'GET',
          url: trendingUrl + '?time=' + trendingDate
        })
          .done(function(response) {
            $.each(response, function(i, e) {
              var template = '<a href="'+e.url+'"><div class="trend-box" style="opacity:0"><div class="_img"><img src="'+e.img+'" alt=""></div><div class="num-index">'+(i + 1)+'</div><div class="_desc">'+e.text+'</div></div></a>';
              $('.trending-wrap').append(template);
            });
            $('.trending-wrap').fadeIn(300);
            $('.trending-wrap').imagesLoaded(function() {
              $('.trend-box').each(function(i, e) {
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
</script>