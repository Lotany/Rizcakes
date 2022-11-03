<?php session_start();
 include 'config.php';
global $conn;

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

 $sql = ("select * from user where username= '$user' and password ='$pass'");
 $result =mysqli_query($conn,$sql);

 $getNumRows = mysqli_num_rows($result);
		
 if($getNumRows == 1)
 {
    $getUserRow = mysqli_fetch_assoc($result);
    unset($getUserRow['password']);
    
    $_SESSION = $getUserRow;
             
    header('location: ../admin/dashboard.php?login=success');
    exit;
 }
 else
 {
             
   header('location: ../index.php?error=fail');
 }
}