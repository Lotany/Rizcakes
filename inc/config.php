<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prac";

$conn =mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection failed!");
}
