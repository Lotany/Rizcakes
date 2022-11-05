<?php session_start();
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/public_func.php'; ?>
<?php $conte = getposts(); ?>
<?php include 'header.php' ?>

<!--displayed errors here -->
<?php include 'errors.php' ?>
<?php include 'login.php' ?>
<!--end of errors -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2> heading 1</h2>
      <img src="folder/1656582503596.jpg" class="fakeimg1" style="height: 200px;">
      <h5>Tittle description, dec 5, 2020</h5>
    </div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta quod aspernatur ipsa deserunt esse libero iure. Quibusdam, molestias consectetur omnis rem eaque nostrum cum aliquam harum, ducimus alias tenetur asperiores?</p>
  </div>
</div>

<?php include 'footer.php' ?>