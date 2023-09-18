<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "todolist";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    echo "connection failed";
}


?>