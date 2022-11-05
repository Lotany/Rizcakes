<?php session_start();
if(!isset($_SESSION["id"])){
    header("location: ../index.php?err=youmustlogin");
}
?>
<html>
    <head>
        <title>Admin</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="../banner.jpg" alt="profile picture">
                <h3>Lotan Kilinda</h3>
                <p>Designer</p>
            </div>

        </div>
    </div>

    <script>
        
    </script>
    </body>
</html>