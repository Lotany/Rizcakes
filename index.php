<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<div class="wrapper">
  <h1>ADVERTS</h1>

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



  <div class="login-fom">
    <?php if (isset($_GET['logout']))
      $msg0 = "Logout successfull"; ?>
    <p class="danger"><?php if (isset($msg0)) {
                        echo $msg0;
                      } ?></p>
  </div>


  <div class="login-fom">
    <?php if (isset($_GET['err']))
      $msg1 = "Cannot access this page please log in"; ?>
    <p class="danger"><?php if (isset($msg1)) {
                        echo $msg1;
                      } ?></p>

    <div class="login-fom">
      <?php if (isset($_GET['error']))
        $msg = "Failed to login"; ?>

      <p class="danger"><?php if (isset($msg)) {
                          echo $msg;
                        } ?></p>



    </div>


  </div>


  <div class="form-popup" id="myForm">
<form action="inc/login.php" method="post" class="form-container">
        <label for="user">Username</label>
        <input type="text" name="user">
        <label for="pass">Password</label>
        <input type="password" name="pass">
        <button class="btn" name="submit" type="submit">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">close</button>
      </form>

</div>

  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
    </div>
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <?php foreach ($conte as $cont) : ?>
          <img src="./folder/<?php echo $cont['file']; ?>" alt="John" style="width:50%">
          <div class="w3-container">
            <h3><?php echo $cont['name']; ?></h3>
            <p class="w3-opacity">CEO & Founder</p>
            <p><?php echo $cont['para'] ?></p>
            <p><button class="w3-button w3-light-grey w3-block"><a href="<?php $cont['link']; ?>">Contact Seller</a></button></p>
          </div>
          <br>
        <?php endforeach ?>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>