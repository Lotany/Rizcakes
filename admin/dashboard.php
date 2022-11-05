<?php session_start();
if (!isset($_SESSION["id"])) {
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

    <!--sidebar navigation -->
        <div class="sidebar">
            <div class="profile">
                <img src="../banner.jpg" alt="profile picture">
                <h3>Lotan Kilinda</h3>
                <a href="logout.php">Logout</a>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Perfomance</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cahrt-line"></i></span>
                        <span class="item">Report</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--section navbar-->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>



    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList
        })
    </script>
</body>

</html>