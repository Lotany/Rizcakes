<?php 
function getposts(){
    global $conn;
    $sql = "select * from content order by id desc limit 5";
    $resu = mysqli_query($conn, $sql);
    $posts =mysqli_fetch_all($resu,MYSQLI_ASSOC);
    return $posts;
}

