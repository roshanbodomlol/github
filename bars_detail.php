<?php include 'header.php'; ?>

<div class="container">
  <!-- Slider -->
  <div id="detail_slider" class="k-slider">
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
    <!-- Content -->
    <div class="venue-content">
      <div class="venue-head"> 
        <a href="#">Food and Drinks</a>
        <h1>Club 25 Hours</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
      </div>

      <div class="venue-body">
        <!-- Menu -->
        <div class="content-menu">
          <div class="author">
            <i class="far fa-clock"></i>
            <div class="info">
              by
              <a href="#">John Doe</a>
              <br>
              <span>January 1, 2019</span>
            </div>
          </div>
        </div>
        <!-- Main Content -->
        <div class="main-content">
          <div class="row">
            <div class="col-md-3">
              <div class="info-block">
                  <div class="inner-info-block"> <!-- Inner Info Block 1-->
                      <div class="stars stars-white star-3-2"></div>
                      <div class="info-piece">
                        <label>Address</label>
                        <span>
                          Tangal, 
                          <a href="#">Kathmandu</a>
                        </span>
                      </div>
                      <div class="separator"></div> 
                      <div class="info-piece">
                        <label>Phone</label>
                        <span>
                          <a href="#">1234543211</a>
                        </span>
                      </div>
                      <div class="separator"></div> 
                      <div class="info-piece">
                        <span><a href="#">Get Direction</a></span>
                        <span><a href="#">Visit Website</a></span>
                      </div>
                  </div>
                  <div class="empty-section"></div> 

                  <div class="inner-info-block-2"> <!-- Inner Info BLock 2-->
                    <div class="open-now">
                      <i class="far fa-clock"></i>
                      <a href="#">Open Now</a>
                    </div>
                    <div class="opening-hours">
                      <span>Hours</span>
                      <!-- <i class="fas fa-chevron-down"></i> -->
                    </div>
                    <div class="visible-hours hours">
                        <span>Sunday</span>
                        <span>5-12pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Monday</span>
                        <span>5-10pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Tuesday</span>
                        <span>9-10pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Wednesday</span>
                        <span>8-5pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Thursday</span>
                        <span>5-11pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Friday</span>
                        <span>3-12pm</span>
                    </div>
                    <div class="hidden-hours hours">
                        <span>Saturday</span>
                        <span>4-12pm</span>
                    </div>
                    <div class="separator"></div> <!-- Separator -->
                    
                    <div class="info-piece">
                      <label>Cuisine</label>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Italian
                        </a>
                       </span>
                    </div>
                    <div class="separator"></div> <!-- Separator -->

                    <div class="info-piece">
                      <label>Style</label>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Lounge
                        </a>
                       </span>
                    </div>
                    <div class="separator"></div> <!-- Separator -->

                    <div class="info-piece">
                      <label>Features</label>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Bar Food
                        </a>
                      </span>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           CP Pick
                        </a>
                      </span>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Good for Dates
                        </a>
                      </span>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Wine Bar
                        </a>
                      </span>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Romantic
                        </a>
                      </span>
                    </div>
                    <div class="separator"></div>

                    <div class="info-piece">
                      <label>Price</label>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           $$$
                        </a>
                       </span>
                    </div>
                    <div class="separator"></div>

                    <div class="info-piece">
                      <label>More Like This</label>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Reggae Bar
                        </a>
                      </span>
                      <span>
                        <a href="#">
                          <i class="fas fa-chevron-right"></i>
                           Trishara
                        </a>
                      </span>
                    </div>
                  </div>
              </div>
            </div> <!-- Col 3 Ends-->
            <div class="col-md-9">
              <div class="row">
                <div class="col-sm-7">
                  <div class="review">
                    <div class="detail">
                      <p>
                          From the people that brought Sydney Fratelli Paradiso, 10 William Street sits inside a converted 
                          storefront in the most boutique of boutique shopping strips in Paddington. Given that Paddington 
                          has declined since its hey-day back in the '90s as Sydney's groundbreaking dining and drinking 
                          scene, 10 William Street is proof that there's still life in Paddington yet, and gives you a very 
                          welcome reason to pay a visit.
                          <br><br>
                          Stripped back and simple, 10 William Street is blessedly free of pretention - there are white 
                          walls, naked lightbulbs, a wooden counter and a big chalkboard advertising the entire wine list. 
                          While the selection of drinks is vast enough to satisfy the most seasoned connaisseurs, those who 
                          feel at a loss when it comes to swilling and sniffing bouquets will also be at home in this 
                          comfortable bar. The staff are friendly, happy to recommend and even offer you a taste test 
                          before you invest in the whole bottle of wine, and then perhaps suggest the perfect thing to 
                          nibble on. You're well advised to do just this, given the excellent Italian sharing plates on 
                          offer, as well as more substantial meals if you feel like making a night of it.
                          <br><br>
                          If you want real intimacy try and to snag the small alcove upstairs or the balcony overlooking 
                          the Paddington Inn. But even if you don't, 10 William Street is the kind of bar that sometimes 
                          feel thin on the ground in Sydney, and will be the kind of place you return to again and again.
                      </p>
                      <span>Images: Diana Scalfati.</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="venue-specials">
                    <div class="specials-title">
                      <h4>A Gin For Every Season</h4>
                      <a href="#">Explore All</a>
                    </div>
                    <div class="special-slider">
                      <div class="_slide" style="background: url(img/whale.jpg)"></div>
                      <div class="_slide" style="background: url(img/ducks.jpg)"></div>
                      <div class="_slide" style="background: url(img/girl.jpg)"></div>
                      <div class="_slide" style="background: url(img/rocks.jpg)"></div>
                    </div>
                    <ul class="special-items">
                      <li>
                        <a href="#" data-index="0">
                          <i class="fas fa-chevron-right"></i> The Gin List: Autumn
                        </a>
                      </li>
                      <li>
                        <a href="#" data-index="1">
                          <i class="fas fa-chevron-right"></i> The Gin List: Winter
                        </a>
                      </li>
                      <li>
                        <a href="#" data-index="2">
                          <i class="fas fa-chevron-right"></i> The Gin List: Spring
                        </a>
                      </li>
                      <li>
                        <a href="#" data-index="3">
                          <i class="fas fa-chevron-right"></i> The Gin List: Summer
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> <!-- Col 5 Ends-->
          </div>
          <div class="row">
            <div class="col-sm-9">
              <div class="row">
                <div class="col">
                  <div class="review commenting-section">
                    <div class="row">
                      <div class="col">
                        <!-- Comment Section -->
                        <div class="content-menu">
                          <div class="author">
                            <div class="hiddenComments">
                              <i class="far fa-comments"></i>
                              <span>View Comments</span>
                            </div>
                          </div>
                          <div class="share-page">
                            <div class="sharethis-inline-share-buttons"></div>             
                          </div>
                        </div>
                        <div class="comments-block">
                          <div class="comments">
                              <div class="fb-comments" data-href="" data-numposts="5"></div>
                            <?php /*
                            <h5>Render comments....</h5>
                            <div class="comments-inner">
                              <div class="comment-count">
                                <span>0 comments</span>
                              </div>
                              <div class="signin-comment">
                                <a href="#">Sign in</a> or <a href="#">Create Account</a>
                              </div>
                            </div>
                            <!-- Comment Form -->
                            <div class="bordered-abc">
                                <div class="comment-form">
                                    <form action="#">
                                      <div class="form-detail">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="" cols="60" rows="5">Write your comment....</textarea>
                                      </div>
                                      <div class="form-detail">
                                        <label for="name">Name*</label>
                                        <input type="text">
                                      </div>
                                      <div class="form-detail">
                                        <label for="email">Email*</label>
                                        <input type="email">
                                      </div>
                                      <div class="form-detail">
                                        <label for="website">Website</label>
                                        <input type="text">
                                      </div>
                                      <button type="submit">Post Comment</button>
                                  </form>
                                </div>
                            </div> */ ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- MAP -->
                  <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0060871405153!2d85.32915831458334!3d27.717098331671306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190d841ad86d%3A0x2dd5aeafe26d1473!2sClub+25+Hours!5e0!3m2!1sen!2snp!4v1545981781051" width="100%" height="540" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col">
                  <!-- Nearby Places -->
                  <div class="nearby-places">
                    <div class="nearby-head">
                      <h4>Nearby Places</h4>
                      <div class="right-item">
                          <i class="fas fa-bars"></i>
                          <span>List</span>
                      </div>
                    </div>
                    <div class="nearby-listing">
                      <div class="row">
                        <div class="col-md-4">
                          <a class="nearby__single" href="#">
                            <div class="nearby-single-place">
                              <div class="_img">
                                <img src="img/pubs.png" alt="">
                                <div class="overlay">
                                  <i class="fas fa-glass-martini-alt"></i>
                                </div>
                              </div>
                              <h6>The Fake Pub</h6>
                              <span>123 fake street</span>
                              <span>Kathmandu</span>
                              <div class="_tel">
                                <label>T</label>
                                <span>(123)456788</span>
                              </div>
                              <div class="stars star-4-2"></div>
                            </div>
                          </a>
                        </div>
                        
                        <div class="col-md-4">
                            <a class="nearby__single" href="#">
                              <div class="nearby-single-place">
                                <div class="_img">
                                  <img src="img/pubs.png" alt="">
                                  <div class="overlay">
                                    <i class="fas fa-glass-martini-alt"></i>
                                  </div>
                                </div>
                                <h6>The Fake Pub</h6>
                                <span>123 fake street</span>
                                <span>Kathmandu</span>
                                <div class="_tel">
                                  <label>T</label>
                                  <span>(123)456788</span>
                                </div>
                                <div class="stars star-4-2"></div>
                              </div>
                            </a>
                        </div>
        
                        <div class="col-md-4">
                            <a class="nearby__single" href="#">
                              <div class="nearby-single-place">
                                <div class="_img">
                                  <img src="img/pubs.png" alt="">
                                  <div class="overlay">
                                    <i class="fas fa-glass-martini-alt"></i>
                                  </div>
                                </div>
                                <h6>The Fake Pub</h6>
                                <span>123 fake street</span>
                                <span>Kathmandu</span>
                                <div class="_tel">
                                  <label>T</label>
                                  <span>(123)456788</span>
                                </div>
                                <div class="stars star-4-2"></div>
                              </div>
                            </a>
                        </div>
        
                        <div class="col-md-4">
                            <a class="nearby__single" href="#">
                              <div class="nearby-single-place">
                                <div class="_img">
                                  <img src="img/pubs.png" alt="">
                                  <div class="overlay">
                                    <i class="fas fa-beer"></i>
                                  </div>
                                </div>
                                <h6>The Fake Pub</h6>
                                <span>123 fake street</span>
                                <span>Kathmandu</span>
                                <div class="_tel">
                                  <label>T</label>
                                  <span>(123)456788</span>
                                </div>
                                <div class="stars star-4-2"></div>
                              </div>
                            </a>
                        </div>
        
                        <div class="col-md-4">
                            <a class="nearby__single" href="#">
                              <div class="nearby-single-place">
                                <div class="_img">
                                  <img src="img/pubs.png" alt="">
                                  <div class="overlay">
                                    <i class="fas fa-glass-martini-alt"></i>
                                  </div>
                                </div>
                                <h6>The Fake Pub</h6>
                                <span>123 fake street</span>
                                <span>Kathmandu</span>
                                <div class="_tel">
                                  <label>T</label>
                                  <span>(123)456788</span>
                                </div>
                                <div class="stars star-4-2"></div>
                              </div>
                            </a>
                        </div>
        
                        <div class="col-md-4">
                          <a class="nearby__single" href="#">
                              <div class="nearby-single-place">
                                <div class="_img">
                                  <img src="img/pubs.png" alt="">
                                  <div class="overlay">
                                    <i class="fas fa-utensils"></i>
                                  </div>
                                </div>
                                <h6>The Fake Pub</h6>
                                <span>123 fake street</span>
                                <span>Kathmandu</span>
                                <div class="_tel">
                                  <label>T</label>
                                  <span>(123)456788</span>
                                </div>
                                <div class="stars star-4-2"></div>
                              </div>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="kad sticky" style="height: 500px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>

<script>
  $('.hiddenComments').click(function () {
    $('.comments-block').toggleClass('showComments');
  });
    function slidePrev() {
      // define slide
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
        backgroundPosition: (slideWidth - 150) + 'px 0'
      });
  
      anime({
        targets: '.__nextSlide',
        left: 0,
        backgroundPosition: ['0px center'],
        easing: 'easeOutQuint',
        duration: 800,
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
        backgroundPosition: (-1 * slideWidth + 150) + 'px 0'
      });
  
      anime({
        targets: '.__nextSlide',
        left: 0,
        backgroundPosition: ['0px center'],
        easing: 'easeOutQuint',
        duration: 800,
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
    $(document).ready(function() {
      $('.fb-comments').attr("data-href", window.location.href.split("?")[0]); 
      $('.special-slider').slick({
        autoplay: false,
        arrows: false,
        dots: false,
        draggable: false,
        fade: true,
        touchMove: false
      });
    });
    $('.special-items a').hover(function() {
      var slideIndex = $(this).data('index');
      $('.special-slider').slick('slickGoTo', slideIndex);
    }, function() {});
  </script>

<?php include 'footer.php'; ?>
