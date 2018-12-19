<?php include 'header.php'; ?>

<div class="page">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="kad" style="height: 180px"></div>
      </div>
    </div>
  </div>
  <div id="mast-search">
    <div class="background-slider">
      <div class="_slide" style="background: url(img/events.png) no-repeat">
        <div class="_title">
          <p>
              Will it be <b>sushi and sake</b> or a <b>blow-out banquet</b> with mates? Sift through  Sydney's <b>best restaurants</b> to find the perfect place.
          </p>
        </div>
        <div class="_tags">
          <span>OR BROWSE:</span>
          <div class="buttons">
            <a href="#" class="btn kbtn empty">Burger</a>
            <a href="#" class="btn kbtn empty">Gastropub</a>
            <a href="#" class="btn kbtn empty">Thai</a>
          </div>
        </div>
      </div>
      <div class="_slide" style="background: url(img/pubs.png) no-repeat">
        <div class="_title">
          <p>
              No one should have to make any real decisions before brunch. Let's help you find the <b>best coffee</b> and <b>brunch spots</b> near you, stat.
          </p>
        </div>
        <div class="_tags">
          <span>OR BROWSE:</span>
          <div class="buttons">
            <a href="#" class="btn kbtn empty">Pet-friendly</a>
            <a href="#" class="btn kbtn empty">Take Away</a>
          </div>
        </div>
      </div>
      <div class="_slide" style="background: url(img/restaurants.png) no-repeat">
        <div class="_title">
          <p>
              <b>Rooftop bars</b>. Underground speakeasies. After-work haunts. <b>Boozy brunch slingers</b>. You can have it all when you're hopping between Sydney's best bars.
          </p>
        </div>
        <div class="_tags">
          <span>OR BROWSE:</span>
          <div class="buttons">
            <a href="#" class="btn kbtn empty">Hotel Bar</a>
            <a href="#" class="btn kbtn empty">Beachfront</a>
            <a href="#" class="btn kbtn empty">Dine at the bar</a>
          </div>
        </div>
      </div>
      <div class="_slide" style="background: url(img/cafes.png) no-repeat">
        <div class="_title">
          <p>
              Whatever you need, Sydney's got it. Scour the city for the <b>freshest</b> produce, the <b>best vintage finds</b>, the stinkiest cheese and hard-to-find records and books.
          </p>
        </div>
        <div class="_tags">
          <span>OR BROWSE:</span>
          <div class="buttons">
            <a href="#" class="btn kbtn empty">$10 & Under</a>
            <a href="#" class="btn kbtn empty">Good For Dates</a>
            <a href="#" class="btn kbtn empty">Film</a>
          </div>
        </div>
      </div>
      <div class="_slide" style="background: url(img/bars.png) no-repeat">
        <div class="_title">
          <p>
              Answer the age-old question: what the hell should we do <b>tonight</b>?<br>Take your pick of <b>exhibitions</b>, pop-up <b>bars</b> and free stuff and lock in plans with your mates.
          </p>
        </div>
        <div class="_tags">
          <span>OR BROWSE:</span>
          <div class="buttons">
            <a href="#" class="btn kbtn empty">Artisan</a>
            <a href="#" class="btn kbtn empty">Chocolate</a>
          </div>
        </div>
      </div>
    </div>
    <div class="search-tab">
      <ul class="nav nav-tabs" id="seachTab" role="tablist">
        <li class="nav-item">
          <a data-slideindex="0" class="nav-link active" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="true">EVENTS</a>
        </li>
        <li class="nav-item">
          <a data-slideindex="1" class="nav-link" id="reastaurants-tab" data-toggle="tab" href="#restaurants" role="tab" aria-controls="restaurants" aria-selected="false">RESTAURANTS</a>
        </li>
        <li class="nav-item">
          <a data-slideindex="2" class="nav-link" id="cafes-tab" data-toggle="tab" href="#cafes" role="tab" aria-controls="cafes" aria-selected="false">CAFES</a>
        </li>
        <li class="nav-item">
          <a data-slideindex="3" class="nav-link" id="bars-tab" data-toggle="tab" href="#bars" role="tab" aria-controls="bars" aria-selected="false">BARS</a>
        </li>
        <li class="nav-item">
          <a data-slideindex="4" class="nav-link" id="shops-tab" data-toggle="tab" href="#shops" role="tab" aria-controls="shops" aria-selected="false">SHOPS</a>
        </li>
      </ul>
      
      <div class="tab-content">
        <div class="tab-pane active" id="events" role="tabpanel" aria-labelledby="events-tab">
          <form action="">
            <div class="_input_wrap">
              <input type="text" placeholder="Search events...">
              <button type="submit" class="btn kbtn"><i class="fas fa-search"></i></button>
            </div>
            <div class="options k-input">
              <div class="option">
                <span>AREA</span>
                <i class="fas fa-angle-down"></i>
                <div class="sub-options">
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Thamel</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Chettrapati</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Lazimpat</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>New Road</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Baneshwor</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Basantapur</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="option">
                <span>CATEGORY</span>
                <i class="fas fa-angle-down"></i>
                <div class="sub-options">
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Art</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Party</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Dance</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Trance</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="option">
                <span>FEATURE</span>
                <i class="fas fa-angle-down"></i>
                <div class="sub-options">
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Free</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>DJ</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>18 and above</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>All night</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Loud</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Obnoxious</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="option">
                <span>DATE</span>
                <i class="fas fa-angle-down"></i>
                <div class="sub-options">
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Today</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Tomorrow</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>Next day</span>
                    </label>
                  </div>
                  <div class="sub-option">
                    <label>
                      <input type="checkbox">
                      <span>10/12/2018</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="restaurants-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search restaurants...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
          <div class="options k-input">
            <div class="option">
              <span>AREA</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Thamel</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Chettrapati</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Lazimpat</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>New Road</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Baneshwor</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Basantapur</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>CATEGORY</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Art</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Party</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Dance</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Trance</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>FEATURE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Free</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>DJ</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>18 and above</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>All night</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Loud</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Obnoxious</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>DATE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Today</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Tomorrow</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Next day</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>10/12/2018</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="cafes" role="tabpanel" aria-labelledby="cafes-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search cafes...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
          <div class="options k-input">
            <div class="option">
              <span>AREA</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Thamel</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Chettrapati</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Lazimpat</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>New Road</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Baneshwor</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Basantapur</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>CATEGORY</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Art</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Party</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Dance</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Trance</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>FEATURE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Free</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>DJ</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>18 and above</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>All night</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Loud</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Obnoxious</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>DATE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Today</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Tomorrow</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Next day</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>10/12/2018</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="bars" role="tabpanel" aria-labelledby="bars-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search bars...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
          <div class="options k-input">
            <div class="option">
              <span>AREA</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Thamel</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Chettrapati</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Lazimpat</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>New Road</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Baneshwor</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Basantapur</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>CATEGORY</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Art</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Party</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Dance</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Trance</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>FEATURE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Free</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>DJ</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>18 and above</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>All night</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Loud</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Obnoxious</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>DATE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Today</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Tomorrow</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Next day</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>10/12/2018</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="shops" role="tabpanel" aria-labelledby="shops-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search shops...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
          <div class="options k-input">
            <div class="option">
              <span>AREA</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Thamel</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Chettrapati</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Lazimpat</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>New Road</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Baneshwor</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Basantapur</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>CATEGORY</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Art</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Party</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Dance</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Trance</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>FEATURE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Free</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>DJ</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>18 and above</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>All night</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Loud</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Obnoxious</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="option">
              <span>DATE</span>
              <i class="fas fa-angle-down"></i>
              <div class="sub-options">
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Today</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Tomorrow</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>Next day</span>
                  </label>
                </div>
                <div class="sub-option">
                  <label>
                    <input type="checkbox">
                    <span>10/12/2018</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="front-page-reviews">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="_title">
            <h3>LATEST REVIEWS</h2>
          </div>    
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="_main">
            <div class="reviews-slider-wrap">
              <div class="reviews-slider">
                <div class="_slide" style="background: url('img/restaurants-review.jpg')"></div>
                <div class="_slide" style="background: url('img/bars-review.jpeg')"></div>
              </div>
            </div>
            <div class="_tabs">
              <ul class="nav nav-tabs" id="reviewsTab" role="tablist">
                <li class="nav-item">
                  <a data-slideindex="0" data-slideindex="0" class="nav-link active" id="restaurants-review-tab" data-toggle="tab" href="#restaurants-review" role="tab" aria-controls="events" aria-selected="true">RESTAURANTS</a>
                </li>
                <li class="nav-item">
                  <a data-slideindex="1" data-slideindex="0" class="nav-link" id="bars-review-tab" data-toggle="tab" href="#bars-review" role="tab" aria-controls="restaurants" aria-selected="false">BARS</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="restaurants-review" role="tabpanel" aria-labelledby="restaurants-review-tab">
                  <div class="_review">
                    <div>
                      <div class="_review_title">RON'S UPSTAIRS</div>
                      <div class="stars star-3"></div>
                    </div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">25 HOURS</div>
                      <div class="stars star-4-2"></div>
                    </div>
                    <div class="__pick"></div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">SAL'S PIZZA</div>
                      <div class="stars star-5"></div>
                    </div>
                    <div class="__pick"></div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">MAMA'S HOT CURRY</div>
                      <div class="stars star-4-2"></div>
                    </div>
                    <div class="__pick"></div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">MAMA'S COLD CURRY</div>
                      <div class="stars star-0-2"></div>
                    </div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <a href="#">View All Restaurants <i class="fas fa-angle-right"></i></a>
                  </div>
                </div>
                <div class="tab-pane" id="bars-review" role="tabpanel" aria-labelledby="bars-review-tab">
                  <div class="_review">
                    <div>
                      <div class="_review_title">RON'S UPSTAIRS</div>
                      <div class="stars star-5"></div>
                    </div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">25 HOURS</div>
                      <div class="stars star-3"></div>
                    </div>
                    <div class="__pick"></div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">SAL'S PIZZA</div>
                      <div class="stars star-0"></div>
                    </div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">MAMA'S HOT CURRY</div>
                      <div class="stars star-4-2"></div>
                    </div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <div>
                      <div class="_review_title">MAMA'S COLD CURRY</div>
                      <div class="stars star-2-2"></div>
                    </div>
                    <div class="__pick"></div>
                    <div class="_location_overlay">
                      <div class="_pin">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="_address">
                        <span>Shanti Marga, Sanepa 21, Lalitpur</span>
                        <span><b>(T) </b>01-444-4432</span>
                      </div>
                    </div>
                  </div>
                  <div class="_review">
                    <a href="#">View All Bars <i class="fas fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

  <section id="food-news" class="k-section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section-title">
            <h4>FOOD & DRINK NEWS</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="foodscontainer">
        <?php include "templates/list/1.php"; ?>
      </div>
      <div class="row">
        <div class="loadMore" data-load="http://localhost:88/kgarira/ajax/morefoods.json" data-container="#foodscontainer">
          <i class="fas fa-plus-circle"></i>
        </div>
      </div>
    </div>
  </section>

  <section id="art-news" class="k-section">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-title">
              <h4>ARTS & ENTERTAINMENT NEWS</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" id="artscontainer">
          <?php include "templates/list/2.php"; ?>
        </div>
        <div class="row">
          <div class="loadMore" data-load="http://localhost:88/kgarira/ajax/morefoods.json" data-container="#artscontainer">
            <i class="fas fa-plus-circle"></i>
          </div>
        </div>
      </div>
    </section>

</div>
<script>
  $(document).ready(function() {
    $('.sub-options').mCustomScrollbar({
      theme: 'minimal'
    });
    $('.background-slider, .reviews-slider').slick({
      arrows: false,
      dots: false,
      autoplay: false,
      draggable: false,
      fade: true,
      touchMove: false
    });
    $('.search-tab .nav-link').click(function() {
      $('.background-slider').slick('slickGoTo', $(this).data('slideindex'));
    });
    $('#reviewsTab .nav-link').click(function() {
      $('.reviews-slider').slick('slickGoTo', $(this).data('slideindex'));
    });
  });
</script>

<?php include 'footer.php'; ?>