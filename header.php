<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lotan Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head>
    <body> 
      <nav>
        <ul class="menu">
            <li class="logo">
                <a href="index.php">Able Kilinda</a>
            </li>
            <li class="item">
                <a href="#">Home</a>
            </li>
            <li class="item">
                <a href="#">About</a>
            </li>
            <li class="item has-submenu">
                <a tabindex="0">Services</a>
                   <ul class="submenu">
                    <li class="subitem"><a href="#">Development</a></li>
                    <li class="subitem"><a href="#">Design</a></li>
                    <li class="subitem"><a href="#">Networking</a></li>
                    <li class="subitem"><a href="#">Repair & Maintenance</a></li>
                   </ul>
            </li>


             <li class="item">
                <a href="#">Contact</a>
              </li>

              <li class="item button">
              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

              </li>

              <li class="item button secondary">
              <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
              </li>

              <li class="toggle">
                <a href="#"><i class="fas fa-bars"></i></a>
              </li>
        </ul>
      </nav>