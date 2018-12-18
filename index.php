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
              Answer the age-old question: what the hell should we do <b>tonight</b>?<br>Take your pick of <b>exhibitions</b>, pop-up <b>bars</b> and free stuff and lock in plans with your mates.
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
    </div>
    <div class="search-tab">
      <ul class="nav nav-tabs" id="seachTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="true">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="reastaurants-tab" data-toggle="tab" href="#restaurants" role="tab" aria-controls="restaurants" aria-selected="false">RESTAURANTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="cafes-tab" data-toggle="tab" href="#cafes" role="tab" aria-controls="cafes" aria-selected="false">CAFES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="bars-tab" data-toggle="tab" href="#bars" role="tab" aria-controls="bars" aria-selected="false">BARS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="shops-tab" data-toggle="tab" href="#shops" role="tab" aria-controls="shops" aria-selected="false">SHOPS</a>
        </li>
      </ul>
      
      <div class="tab-content">
        <div class="tab-pane active" id="events" role="tabpanel" aria-labelledby="events-tab">
          <form action="">
            <div class="_input_wrap">
              <input type="text" placeholder="Search events...">
              <button type="submit" class="btn kbtn"><i class="fas fa-search"></i></button>
            </div>
            <div class="options">
              <div class="option">
                <span>AREA</span>
                <i class="fas fa-angle-down"></i>
              </div>
              <div class="option">
                <span>CATEGORY</span>
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane" id="restaurants" role="tabpanel" aria-labelledby="restaurants-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search restaurants...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="tab-pane" id="cafes" role="tabpanel" aria-labelledby="cafes-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search cafes...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="tab-pane" id="bars" role="tabpanel" aria-labelledby="bars-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search bars...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="tab-pane" id="shops" role="tabpanel" aria-labelledby="shops-tab">
          <div class="_input_wrap">
            <input type="text" placeholder="Search shop...">
            <button class="btn kbtn"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>