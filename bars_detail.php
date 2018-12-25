<?php include 'header.php'; ?>

<div class="container">
  <!-- Slider -->
    <div class="slider">
        <div class="slide">
          <img src="img/rocks.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/whale.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/ducks.jpg" alt="">
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
          <div class="social-widgets">
            <div class="shares">
              <span>18</span> 
              <span>Shares</span>
            </div>
            <div class="social-icons">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fas fa-envelope"></i>
            </div>
            <div class="login">
              <i class="far fa-bookmark"></i>
            </div>
          </div>
        </div>
        <!-- Main Content -->
        <div class="main-content">
          <div class="row">
            <div class="col-md-3">
              <div class="info-block">
                  <div class="inner-info-block">
                      <div class="stars star-3-2"></div>
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
                  <div class="info-block-2">
                    <div class="open-now">
                      <i class="far fa-clock"></i>
                      <a href="#">Open Now</a>
                    </div>
                    <div class="hours">
                      <span>Hours</span>
                      <i class="fas fa-chevron-down"></i>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
</div>

<script>
  $(document).ready(function () {
    $('.slider').slick({
      arrows: true
    });
  });
</script>

<?php include 'footer.php'; ?>
