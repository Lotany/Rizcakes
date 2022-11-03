<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<div class="wrapper">
  <h1>ADVERTS</h1>
  <?php foreach ($conte as $cont) : ?>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./folder/<?php echo $cont['file']; ?>" style="width:100%">
      <div class="text"><?php echo $cont['name'] ?></div>
     
    </div>
  </div>
  <?php endforeach ?>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
  </div>



  <div class="login-fom">
    <?php if (isset($_GET['logout']))
      $msg = "Logoout successfull"; ?>
    <p><?php if (isset($msg)) {
          echo $msg;
        } ?></p>
  </div>


  <div class="content">
    <?php foreach ($conte as $cont) : ?>
      <h2><?php echo $cont['name'] ?></h2>
      <img src="./folder/<?php echo $cont['file']; ?>" alt="blog pics">
      <p><?php echo $cont['para'] ?></p>
      <hr>
      <br>
    <?php endforeach ?>
  </div>





  <div class="login-fom">
    <?php if (isset($_GET['err']))
      $msg = "Cannot access this page please log in"; ?>
    <p><?php if (isset($msg)) {
          echo $msg;
        } ?></p>

    <div class="login-fom">
      <?php if (isset($_GET['error']))
        $msg = "Failed to login"; ?>

      <h2><a href="admin/dashboard.php">Dashboard</a></h3>


        <p class="danger"><?php if (isset($msg)) {
                            echo $msg;
                          } ?></p>
        <form action="inc/login.php" method="post">
          <label for="user">Username</label>
          <input type="text" name="user">
          <label for="pass">Password</label>
          <input type="password" name="pass">
          <button name="submit" type="submit">Login</button>
        </form>
    </div>


    </div>

    <?php include 'footer.php' ?>