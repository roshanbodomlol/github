<div id="featured-events">
  <div id="events-slider" class="k-slider">
    <div class="_window">
      <div class="_img active" style="background: url(img/whale.jpg)"></div>
      <div class="_img" style="background: url(img/girl.jpg)"></div>
      <div class="_img" style="background: url(img/canyon.jpg)"></div>
    </div>
    <div class="_dets">
      <div class="_description">
        <div class="description-slider">
          <div class="slide-description">
            <h5>Slide Title</h5>
            <p>Slide description</p>
          </div>
          <div class="slide-description">
            <h5>Slide Number 2</h5>
            <p>Qui ita affectus, beatum esse numquam probabis; Bonum integritas corporis: misera debilitas.</p>
          </div>
          <div class="slide-description">
            <h5>Slide Number 3</h5>
            <p>Sed quid minus probandum quam esse aliquem beatum nec satis beatum</p>
          </div>
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
      <div class="_next_slide">
        <div class="_img_next" style="background: url(img/whale.jpg)"></div>
        <div class="_img_next" style="background: url(img/girl.jpg)"></div>
        <div class="_img_next" style="background: url(img/canyon.jpg)"></div>    
      </div>
    </div>
  </div>
</div>

<script>
  // description slider
  $(document).ready(function() {
    $('.description-slider').slick({
      autoplay: false,
      arrows: false,
      dots: false,
      fade: true
    });
    $('._next_slide').slick({
      autoplay: false,
      arrows: false,
      dots: false,
      fade: true,
      initialSlide: 1
    });
  });
  function slidePrev() {
    // define slide
    var slides = $('.k-slider ._window ._img');

    // mask details
    $('._dets').addClass('transitioning');

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
      backgroundPosition: (slideWidth - 150) + 'px 0'
    });

    anime({
      targets: '.__nextSlide',
      left: 0,
      backgroundPosition: ['0px 0px'],
      easing: 'easeOutQuint',
      duration: 800,
      complete: function() {
        slides.removeClass('active').css({'z-index': 10});
        nextSlide.css({
          'z-index': 15,
          'left': 0
        })
        $(nextSlide).removeClass('__nextSlide').addClass('active');
        $('.description-slider').slick('slickPrev');
        $('._next_slide').slick('slickPrev');
        $('._dets').removeClass('transitioning');
      }
    });
  }
  function slideNext() {

    // define slide
    var slides = $('.k-slider ._window ._img');

    // mask details
    $('._dets').addClass('transitioning');

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
      backgroundPosition: (-1 * slideWidth + 150) + 'px 0'
    });

    anime({
      targets: '.__nextSlide',
      left: 0,
      backgroundPosition: ['0px 0px'],
      easing: 'easeOutQuint',
      duration: 800,
      complete: function() {
        slides.removeClass('active').css({'z-index': 10});
        nextSlide.css({
          'z-index': 15,
          'left': 0
        })
        $(nextSlide).removeClass('__nextSlide').addClass('active');
        $('.description-slider').slick('slickNext');
        $('._next_slide').slick('slickNext');
        $('._dets').removeClass('transitioning');
      }
    });
  
  }
</script>
