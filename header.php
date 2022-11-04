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


             <li class="item">
                <a class="open-button" onclick="openLogin()">Login</a>
              </li>

              <li class="item">
                <a href="admin/dashboard.php">Dashboard</a>
              </li>

              <li class="toggle">
                <a href="#"><i class="fas fa-bars"></i></a>
              </li>
        </ul>

        <div class="form-popup" id="myForm">
    <form action="inc/login.php" method="post" class="form-container">
      <label for="user">Username</label>
      <input type="text" name="user">
      <label for="pass">Password</label>
      <input type="password" name="pass">
      <button class="btn" name="submit" type="submit">Login</button>
      <button type="button" class="btn cancel" onclick="closeLogin()">close</button>
    </form>
  </div>
      </nav>