<?php include 'header.php'; ?>

<div class="container">
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
</div>

<script>
  $(document).ready(function () {
    $('.slider').slick({
      arrows: true
    });
  });
</script>

<?php include 'footer.php'; ?>
