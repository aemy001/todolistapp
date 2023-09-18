<?php
    include('header.php');
    $id = $_GET['id'];
    $query= "DELETE FROM `todolist` where `listId` = '$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location:listview.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>