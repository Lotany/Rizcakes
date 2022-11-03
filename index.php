<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<body>
  <h1>Tany public site</h1>

  <div class="login-fom">
    <?php if (isset($_GET['logout']))
      $msg = "Logoout successfull"; ?>
    <p><?php if (isset($msg)) {
          echo $msg;
        } ?></p>

<div class="slideshow-container">
  <div class="myslides fade">
  <div class="numbertext">1/3</div>
  <img src="folder/1656582503596.jpg" alt="" style="width: 100%;">
  <div class="text">caption this</div>
</div>


<div class="myslides fade">
  <div class="numbertext">1/3</div>
  <img src="folder/1656582503596.jpg" alt="" style="width: 100%;">
  <div class="text">caption this</div>
</div>


</div>

<div style="text-align: center;">
<span class="dot"></span>
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
<script>
  let slideIndex = 0;
  showslides();
  function showslides(){
    let i;
    let slides = document.getElementsByClassName("myslides");
    let dots =getElementsByClassName("dot");
    for(i=0; i<slides.length; i++){
      slides[i].style.display="none";
    }
    slideIndex++;
    if(slideIndex > slides.length){
      slideIndex =1;
    }

    for(i=0;i<dots.length;i++){
      dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display ="block";
    dots[slideIndex-1].className += " active";
    setTimeout(showslides, 2000);
  }
</script>
      <?php include 'footer.php' ?>