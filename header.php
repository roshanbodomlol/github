<!doctype html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KGarira?</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/malihu/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="vendors/themify/themify-icons.css">
  <link rel="stylesheet" href="vendors/slick/slick.css">
  <link rel="stylesheet" href="vendors/slick/slick-theme.css">

  <link rel="stylesheet" href="css/global2.min.css">
  <link rel="stylesheet" href="css/global.min.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script>
    globalVariable = {
      siteUrl: 'localhost:3030',
      loadEventsCalendar: 'http://localhost:3030/ajax/morecalendarevents.json'
    }
  </script>
  <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c28a633d02b6e0010eca610&product=inline-share-buttons"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1051423384939469&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <div id="playmaker">
    <div id="playmaker-main">
      <span class="_close"><i class="fas fa-times"></i></span>
      <form action="">
        <div class="_form">
          <div class="inputs">
            <div class="_input">
              <i class="fas fa-calendar-alt"></i>
              <div class="_selected" id="play_day">It's Monday</div>
              <input class="play_input" type="hidden" value="monday">
              <i class="fas fa-angle-down down"></i>
              <div class="dropdown">
                <ul></ul>
              </div>
            </div>
            <div class="_input">
              <i class="far fa-clock"></i>
              <div class="_selected" id="play_time">NOW</div>
              <input class="play_input" type="hidden" value="now">
              <i class="fas fa-angle-down down"></i>
              <div class="dropdown">
                <ul>
                  <li class="selected">
                    <span role="button" data-value="now">Now</span>
                  </li>
                  <li>
                    <span role="button" data-value="morning">Morning</span>
                  </li>
                  <li>
                    <span role="button" data-value="afternoon">Afternoon</span>
                  </li>
                  <li>
                    <span role="button" data-value="evening">Evening</span>
                  </li>
                  <li>
                    <span role="button" data-value="latenight">Late Night</span>
                  </li>
                  <li>
                    <span role="button" data-value="afterhours">After Hours</span>
                  </li>
                  <li>
                    <span role="button" data-value="any">Anytime</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="_input">
              <i class="fas fa-map-marker-alt"></i>
              <div class="_selected" id="play_location">Anywhere</div>
              <input class="play_input" type="hidden" value="any">
              <i class="fas fa-angle-down down"></i>
              <div class="dropdown">
                <ul>
                  <li class="selected">
                    <span role="button" data-value="any">Anywhere</span>
                  </li>
                  <li>
                    <span role="button" data-value="basantapur">Basantapur</span>
                  </li>
                  <li>
                    <span role="button" data-value="thamel">Thamel</span>
                  </li>
                  <li>
                    <span role="button" data-value="durbarmarg">Durbar Marg</span>
                  </li>
                  <li>
                    <span role="button" data-value="lazimpat">Lazimpat</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="_input">
              <i class="fas fa-utensils"></i>
              <div class="_selected" id="play_what">I want something to do</div>
              <input class="play_input" type="hidden" value="do">
              <i class="fas fa-angle-down down"></i>
              <div class="dropdown">
                <ul>
                  <li class="selected">
                    <span role="button" data-value="any">I want something to do</span>
                  </li>
                  <li>
                    <span role="button" data-value="basantapur">I want drinks</span>
                  </li>
                  <li>
                    <span role="button" data-value="thamel">I want dessert</span>
                  </li>
                  <li>
                    <span role="button" data-value="durbarmarg">I want to go to an event</span>
                  </li>
                  <li>
                    <span role="button" data-value="lazimpat">Surprise me</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="_input">
              <i class="far fa-heart"></i>
              <div class="_selected" id="play_other">Anything</div>
              <input class="play_input" type="hidden" value="any">
              <i class="fas fa-angle-down down"></i>
              <div class="dropdown">
                <ul>
                  <li class="selected">
                    <span role="button" data-value="any">Anything</span>
                  </li>
                  <li>
                    <span role="button" data-value="view">Somewhere with a view</span>
                  </li>
                  <li>
                    <span role="button" data-value="romantic">Somewhere romantic</span>
                  </li>
                  <li>
                    <span role="button" data-value="free">That's free</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <button role="button" type="submit" class="play_btn">LET'S PLAY <i class="fas fa-angle-right"></i></button>
        </div>
      </form>
    </div>
  </div>
  <div id="wrapper">
    <div id="header-wrapper">
      <div id="login-wrap">
        <div id="login">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <div>
                  <img src="img/kgarira.png" alt="">
                </div>
                <div class="login-text">
                    Make Concrete Playground yours with My Playground. Save and share your favourite picks and make plans to go out with friends. Registration is fast and free.
                </div>
              </div>
              <div class="col-sm">
                <div class="row">
                  <div class="col">
                    <div class="fb-login">
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Login With Facebook
                      </a>
                    </div>
                  </div>
                  <div class="col">
                    <i class="fas fa-times close_header_login"></i>
                  </div>
                </div>
                <div class="OR text-center">
                  <span>OR</span>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="login-form">
                      <input type="text" placeholder="Email Address">
                      <input type="password" placeholder="Password">
                      <button type="submit" class="login-btn">GO</button>
                    </div>
                  </div>
                </div>
                <div class="separator"></div>
                <a class="register-link" href="#">REGISTER</a> |
                <a href="#">FORGOT PASSWORD</a>
              </div>
            </div>
          </div>
        </div>
        <div id="register">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 offset-3">
                <div class="register-form">
                  <div class="row">
                    <div class="col">
                      <i class="fas fa-times close_header_register"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <input type="text" placeholder="First Name">
                    </div>
                    <div class="col-sm">
                      <input type="text" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-sm">
                      <input type="email" placeholder="Confirm Email Address">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <input type="password" placeholder="Password">
                    </div>
                    <div class="col-sm">
                      <div style="position:relative">
                        <input type="password" placeholder="Confirm Password">
                        <button type="submit" class="register-btn">GO</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <input type="checkbox"> I agree to the terms & conditions.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="_top">
        <div class="container">
          <div class="row centered">
            <div class="col-6">
              <div class="social">
                <ul>
                  <li class="list-inline-item"><a href="#" target="_blank" rel="nofollow noreferrer"><span class="ti-facebook"></span></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" rel="nofollow noreferrer"><span class="ti-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-6">
              <div class="float-right">
                <ul class="_menu bordered">
                  <li><a href="#">BOOK ARTIST</a></li>
                  <li><a href="#">BUY TICKETS</a></li>
                  <li><a id="showlogin" href="#">LOGIN</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="_bottom">
        <div class="container">
          <div class="row">
            <div class="col">
              <div id="logo">
                <a href="#">
                  <img src="img/kgarira.png" alt="kgarira">
                </a>
              </div>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
      <div id="menu-main">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="menus">
                <ul class="primary list-inline">
                  <li class="list-inline-item"><a href="#">EVENTS</a></li>
                  <li class="list-inline-item"><a href="bars.php">BARS</a></li>
                  <li class="list-inline-item"><a href="#">ARTISTS</a></li>
                  <li class="list-inline-item"><a href="#">EVENTS</a></li>
                  <li class="list-inline-item"><a href="#">BLOG</a></li>
                  <li class="list-inline-item"><a href="#">CONTACT</a></li>
                </ul>
                <ul class="secondary list-inline bordered">
                  <li class="list-inline-item">
                    <a href="#" id="openPlayMaker"><i class="fas fa-sliders-h"></i><span>PLAYMAKER</span></a>
                  </li>
                  <li id="directory-menu" class="list-inline-item">
                    <a href="#"><i class="fas fa-sitemap"></i><span>DIRECTORY</span></a>
                    <div class="directory-sub">
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="_inner">
                              <div class="_left">
                                <h2>SEARCH OUR DIRECTORY</h2>
                              </div>
                              <div class="_right">
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-utensils"></i>
                                    <span>Restaurants</span>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-coffee"></i>
                                    <span>Cafes</span>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-glass-martini-alt"></i>
                                    <span>Bars</span>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-beer"></i>
                                    <span>Pubs</span>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span>Shops</span>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="_icon">
                                    <i class="fas fa-calendar-check"></i>
                                    <span>Events</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li id="calendar-menu" class="list-inline-item">
                    <a href="#"><i class="fas fa-calendar-week"></i><span>CALENDAR</span></a>
                    <div class="calendar-sub">
                      <div class="_left">
                        <div data-index="0" class="_slide active" style="background: url(img/whale.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>The Event of The Year</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="1" class="_slide" style="background: url(img/mounts.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Blast from the Past</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="2" class="_slide" style="background: url(img/girl.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Hard Times</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="3" class="_slide" style="background: url(img/casino.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Birthday Bash</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="4" class="_slide" style="background: url(img/canyon.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Disco Disco</h6>
                                <p>The Royal Botanic Garden's killer new exhibition.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="5" class="_slide" style="background: url(img/whale.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Diplo</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div data-index="6" class="_slide" style="background: url(img/rocks.jpg)">
                          <div class="_info">
                            <a href="#">
                              <div>
                                <h6>Dance Dance</h6>
                                <p>The Royal Botanic Garden's killer new exhibition features 25,000 carnivorous plants.</p>
                                <div class="_icon">
                                  <i class="fas fa-angle-right"></i>
                                </div>
                              </div>
                              <div class="_icon">
                                <i class="fas fa-glass-martini-alt"></i>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="_right">
                        <ul id="header-calendar">
                          <li data-index="0" class="active">
                            <span><a href="#">Wed 2</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="1">
                            <span><a href="#">Thu 3</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="2">
                            <span><a href="#">Fri 4</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="3">
                            <span><a href="#">Sat 5</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="4">
                            <span><a href="#">Sun 6</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="5">
                            <span><a href="#">Mon 7</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                          <li data-index="6">
                            <span><a href="#">Tue 8</a></span>
                            <span class="_all">| <a href="#">View All</a></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li id="search-menu" class="list-inline-item">
                    <a href="#"><i class="fas fa-search"></i><span>SEARCH</span></a>
                    <div class="search-sub">
                      <div class="_left">
                        <div class="_top">
                          <h5>Search</h5>
                          <input type="text" class="search-input">
                        </div>
                        <span class="adv-search">ADVANCED FILTER</span>
                        <span class="adv-search-hide">HIDE ADVANCED FILTER</span>
                      </div>
                      <div class="_advanced">
                        <div class="search-cat">
                          <div class="cat-title">Filter by category</div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Food & Drink</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Arts & Entertainment</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Design & Style</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Travel & Leisure</span>
                            </label>
                          </div>
                        </div>
                        <div class="search-cat">
                          <div class="cat-title">Filter by Type</div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Places</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Events</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="checkbox">
                              <span>Articles</span>
                            </label>
                          </div>
                        </div>
                        <div class="search-cat">
                          <div class="cat-title">Filter by dates</div>
                          <div class="k-input">
                            <label>
                              <input type="radio" name="date">
                              <span>All</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="radio" name="date">
                              <span>Past Week</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="radio" name="date">
                              <span>Past Month</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="radio" name="date">
                              <span>Past Year</span>
                            </label>
                          </div>
                          <div class="k-input">
                            <label>
                              <input type="radio" name="date">
                              <span>Specific Date</span>
                            </label>
                          </div>
                          <div class="specific-date">
                            <input type="text" placeholder="DD">
                            <span>:</span>
                            <input type="text" placeholder="MM">
                            <span>:</span>
                            <input type="text" placeholder="YY">
                          </div>
                        </div>
                      </div>
                      <div class="_right">
                        <button type="submit" class="rounded">GO</button>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="content-wrapper">
