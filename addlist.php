<?php
require("auth-session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your List</title>
</head>
<body>
 <?php
   error_reporting(0);
 include("header.php");
 ?> 
<?php
if(isset($_POST["addlistbtn"])){
    $title= $_POST["title"];
    $description = $_POST["description"];
    $userId = $_SESSION["userId"];
    $insert = "INSERT INTO `todolist`(`title`, `description`, `userId`) VALUES ('$title','$description','$userId')";
    $deliver = mysqli_query($conn,$insert);
    if(!$deliver){
      echo "<h3>".mysqli_error()."</h3>";
    }
  }

?>

<div class="container mt-3">
  <h2>Add tasks in Your To Do List</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="">Title:</label>
      <input type="text" class="form-control"  placeholder="Add Title" name="title" required>
    </div>
    <div class="mb-3">
      <label for="">Description:</label>
      <input type="text" class="form-control"  placeholder="Add Description" name="description" required>
    </div>
    <div class="mb-3">
      <label for="">To view your tasks: <a href="listview.php"> click here </a></label>
    </div>
    <button type="submit" name="addlistbtn" class="btn btn-primary">Submit</button>
  </form>
</div>
















   <?php
 include("footer.php");
 ?>   
</body>
</html>