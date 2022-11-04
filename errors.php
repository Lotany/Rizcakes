<div class="login-fom">
    <?php if (isset($_GET['logout']))
      $msg0 = "Logout successfull"; ?>
    <p class="danger"><?php if (isset($msg0)) { echo $msg0;} ?></p>
  </div>


  <div class="login-fom">
    <?php if (isset($_GET['err']))
      $msg1 = "Cannot access this page please log in"; ?>
    <p class="danger"><?php if (isset($msg1)) {echo $msg1;} ?></p>

    <div class="login-fom">
      <?php if (isset($_GET['error']))
        $msg = "Failed to login"; ?>
      <p class="danger"><?php if (isset($msg)) {echo $msg;} ?></p>
    </div>
  </div>