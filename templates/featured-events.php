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
    /// define slide
    var slides = $('.k-slider ._window ._img');

    // get slide width
    var slideWidth = $('.k-slider ._window').width();

    // get next slider
    var nextSlide = $('.k-slider ._window ._img.active').prev();

    // if not next select last child
    if (nextSlide.length === 0) {
      nextSlide = $('.k-slider ._window ._img:last-child');
    }

    //  ready next slide
    // pre-slide css
    nextSlide.addClass('__nextSlide').css({
      zIndex: 20,
      left: '-100%',
      backgroundPosition: '-600px 0'
    });

    anime({
      targets: '.__nextSlide',
      left: {
        value: 0,
        duration: 450
      },
      backgroundPosition: {
        value: ['0px 0px'],
        duration: 650
      },
      easing: 'easeOutQuint',
      // duration: 600,
      complete: function() {
        slides.removeClass('active').css({'z-index': 10});
        nextSlide.css({
          'z-index': 15,
          'left': 0
        })
        $(nextSlide).removeClass('__nextSlide').addClass('active');
      }
    });
  }
  function slideNext() {

    // define slide
    var slides = $('.k-slider ._window ._img');

    // get slide width
    var slideWidth = $('.k-slider ._window').width();

    // get next slider
    var nextSlide = $('.k-slider ._window ._img.active').next();

    // if not next select last child
    if (nextSlide.length === 0) {
      nextSlide = $('.k-slider ._window ._img:first-child');
    }

    //  ready next slide
    // pre-slide css
    nextSlide.addClass('__nextSlide').css({
      zIndex: 20,
      left: '100%',
      backgroundPosition: '600px 0'
    });

    anime({
      targets: '.__nextSlide',
      left: {
        value: 0,
        duration: 450
      },
      backgroundPosition: {
        value: ['-120px 0px'],
        duration: 650
      },
      easing: 'easeOutQuint',
      // duration: 600,
      complete: function() {
        slides.removeClass('active').css({'z-index': 10});
        nextSlide.css({
          'z-index': 15,
          'left': 0
        })
        $(nextSlide).removeClass('__nextSlide').addClass('active');
      }
    });
  
  }
</script>
