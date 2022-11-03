<?php session_start();
if(!isset($_SESSION["id"])){
    header("location: ../index.php?err=youmustlogin");
}
?>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>

    <body>
        <h1>Admin site</h1>
        <?php if(isset($_GET['login'])) $msg ="Login successfull"; ?>
        <p><?php if(isset($msg)) echo $msg ?></p>
        <p>Go back <a href="../index.php">Home</a></p>

        <?php if(isset($_GET['upload'])) $msg ="Post uploaded successfull"; ?>
        <p><?php if(isset($msg)) echo $msg ?></p>
        

        <div class="sess">
        <h3><?php echo $_SESSION['username'] ?></h3>
        <i><a href="logout.php">logout</a></i>
        </div>

  <div class="fom">
        <form action="dashboad.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name">
            <input type="file" name="uploadfile" value="">
            <label for="para">Content</label>
            <input type="text" name="cont">
            <label for="link">Link</label>
            <input type="text" name="cont">
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>

    </body>
</html>