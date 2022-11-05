<?php
  session_start();
  include 'inc/config.php'; 
  include 'inc/public_func.php';
  $conte = getpostsdesc();
  $taita = getpostsasc();
  include 'header.php';
  include 'login.php';
  ?>

<!--end of errors -->
<div class="row">
<?php include 'errors.php' ?>
  <div class="leftcolumn">
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="folder/1656582503596.jpg" style="max-width:100%">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="folder/1656650273869.jpg" style="max-width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="folder/Logopit_1663181254408_1.jpg" style="max-width:100%">
      <div class="text">Caption Three</div>
    </div>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>


  <?php foreach ($conte as $cont) : ?>
    <div class="card">
      <h2> heading 1</h2>
      <img src="./folder/<?php echo $cont['file']; ?>" class="fakeimg1" style="height: 200px;">
      <h5><?php echo $cont['name']; ?></h5>
      <p><?php echo $cont['para'] ?></p>
    </div>
  <?php endforeach ?>
  </div>

  <!-- middle column-->
  <div class="middlecolumn">
    <?php foreach($taita as $dawida) : ?>
    <div class="card">
      <h2> heading 3</h2>
      <h5><?php echo $cont['name']; ?></h5>
      <img src="./folder/<?php echo $cont['file']; ?>" class="fakeimg" style="height: 200px;">
      <p><?php echo $dawida['para'] ?></p>
    </div>
    <?php endforeach ?>
  </div>

  <!--right column -->
  <div class="rightcolumn">
    <div class="card">
      <h2>About me</h2>
      <img src="folder/banner.jpg" class="fakeimg" style="height: 200px;">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus soluta autem earum iusto vero voluptatum reiciendis exercitationem ullam itaque magnam labore quidem voluptas quisquam necessitatibus, consequuntur tempore sequi nam fugit.</p>
    </div>
    <div class="card">
      <h3>Popular Posts</h3>
      <img src="images/image_3.png" class="fakeimg" style="height: 200px;">
      <br>
      <img src="images/image_3.png" class="fakeimg" style="height: 200px;">
      <br>
      <img src="images/image_3.png" class="fakeimg" style="height: 200px;">
    </div>

    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text</p>
    </div>
  </div>

  <?php include 'footer.php' ?>