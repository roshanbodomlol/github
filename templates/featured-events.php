<div id="featured-events">
  <div id="events-slider" class="k-slider">
    <div class="_window">
      <div class="_img active" style="background: url(img/whale.jpg)"></div>
      <div class="_img" style="background: url(img/girl.jpg)"></div>
      <div class="_img" style="background: url(img/canyon.jpg)"></div>
    </div>
    <div class="_buttons">
      <button type="button" class="_prev" onclick="slidePrev()">
        <div class="_icon">
          <i class="fas fa-angle-left"></i>
        </div>
      </button>
      <button class="_next" onclick="slideNext()">
        <div class="_icon">
          <i class="fas fa-angle-right"></i>
        </div>
      </button>
    </div>
  </div>
</div>

<script>
  function slidePrev() {
    // get slide width
    var slideWidth = $('.k-slider ._window ._img').width();

    // get next slider
    var prevSlide = $('.k-slider ._window ._img.active').prev();
    prevSlide.addClass('ready').css({
      'background-position': slideWidth/2+'px center',
      'left': 'auto',
      'right': '100%'
    });
    // return false;
    prevSlide.animate({
      right: 0,
      backgroundPosition: '0 +=0%'
    }, 500, 'easeOutSine', function() {
      $('.k-slider ._window ._img').removeClass('active');
      prevSlide.addClass('active').removeClass('ready');
    });
  }
  function slideNext() {
    // get slide width
    var slideWidth = $('.k-slider ._window ._img').width();

    // get next slider
    var nextSlide = $('.k-slider ._window ._img.active').next();
    nextSlide.addClass('ready').css({
      'background-position': '-'+slideWidth/2+'px center'
    });
    // return false;
    nextSlide.animate({
      left: 0,
      backgroundPosition: '0 +=0%'
    }, 500, 'easeOutSine', function() {
      $('.k-slider ._window ._img').removeClass('active');
      nextSlide.addClass('active').removeClass('ready');
    });
  }
</script>
