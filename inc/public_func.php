<?php 
function getpostsdesc(){
    global $conn;
    $sql = "select * from content order by id desc limit 5";
    $resu = mysqli_query($conn, $sql);
    $posts =mysqli_fetch_all($resu,MYSQLI_ASSOC);
    return $posts;
}

function getpostrand(){
    global $conn;
    $sql = "select * from content order by rand() limit 5";
    $resu = mysqli_query($conn, $sql);
    $posts =mysqli_fetch_all($resu,MYSQLI_ASSOC);
    return $posts;
}