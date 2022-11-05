<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<div class="wrapper">
  
<!--displayed errors here -->
<?php include 'errors.php' ?>
<?php include 'login.php' ?>
  <!--end of errors -->


  <?php include 'footer.php' ?>