<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<?php
include("header.php");
?>
<?php
$id = $_GET['id'];  
$Dquery = "SELECT * FROM `todolist` WHERE `listId` = '$id'";
$Dresult = mysqli_query($conn , $Dquery);
$row = mysqli_fetch_row($Dresult);
if(isset($_POST["updatebtn"])){
    $title = $_POST["title"];
 $description = $_POST["description"];
    $Rquery = "UPDATE `todolist` SET `title` ='$title', `description` = '$description' where listId = '$id'";
    $Rresult = mysqli_query($conn,$Rquery);
    if($Rresult)
    {
       header("location:listview.php");
    }
    
}
?>
<div class="container mt-3">
  <h2>Update Task</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="">Title:</label>
      <input type="text" class="form-control"  value="<?php echo $row['1'];?>" name="title">
    </div>
    <div class="mb-3">
      <label for="">Description:</label>
      <input type="text" class="form-control"  value="<?php echo $row['2'];?>" name="description">
    </div>
    <div class="mb-3">
      <label for="">To view your tasks: <a href="listview.php"> click here </a></label>
    </div>
    <button type="submit" name="updatebtn" class="btn btn-primary">Submit</button>
  </form>
</div>





</body>
</html>
