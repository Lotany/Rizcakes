<?php 
   include '../inc/config.php';

if(isset($_POST['submit'])){
    global $conn;

    $name =$_POST['name'];
    $file = $_FILES['uploadfile']['name'];
    $cont =$_POST['cont'];

    $filename =$_FILES['uploadfile']['tmp_name'];

    $folder ="../folder/" . $file;


    $sql ="insert into content(name, file, para) values('$name','$file', '$cont')";
    $result = mysqli_query($conn, $sql);
    if(move_uploaded_file($filename, $folder)){
        header('location: dashboard.php?upload=success');
    }else{
        echo "failed";    }

}