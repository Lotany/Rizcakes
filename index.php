<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<!--displayed errors here -->
<?php include 'login.php' ?>
  
  <?php include 'errors.php' ?>
<!--end of errors -->
<div class="row">
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
    <div class="card">
      <h2> heading 3</h2>
      <h5>Tittle description, dec 5, 2020</h5>
      <img src="images/image_3.png" class="fakeimg" style="height: 200px;">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus a esse quos, minima sint dolore saepe. Quidem aperiam obcaecati iure? Consequuntur possimus libero molestias autem provident omnis, dolorem nemo est.</p>
    </div>
    <div class="card">
      <h2>heading 4</h2>
      <h5>Tittle description, dec 5, 2020</h5>
      <img src="images/image_3.png" class="fakeimg" style="height: 200px;">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores eaque incidunt porro! Sapiente esse quam, facere voluptate, consectetur eveniet, quod explicabo sunt ducimus reprehenderit distinctio aspernatur fugit possimus cumque!</p>
    </div>
  </div>

  <!--right column -->
  <div class="rightcolumn">
    <div class="card">
      <h2>About me</h2>
      <img src="images/banner.jpg" class="fakeimg" style="height: 200px;">
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