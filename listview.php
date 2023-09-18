<?php
require("auth-session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your List</title>
    <style>
        .container .col-md-12{
            margin-bottom: 500px;
        }
    </style>
</head>
<body>
 <?php
  error_reporting(0);
 include("header.php");

 ?> 
<?php
$id =  $_SESSION["userId"];
$query= "SELECT * FROM todolist JOIN users ON todolist.userId = users.userId WHERE users.userId = '$id';";
$result = mysqli_query($conn,$query); 
?>
<div class="container">
<div class="row">
    <div class="col-md-12">
  <div class="text-center">
  <h3>Your List View</h3> 
  </div>
  <div class="mb-3">
      <label for="">To Add more tasks: <a href="addlist.php"> click here </a></label>
    </div>
    <table class="table table-hover table-bordered">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 

  <tbody>
  <?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
    <td><?php echo $row["listId"]?></td>
     <td><?php echo $row["title"]?></td>
     <td><?php echo $row["description"]?></td>
      <td><a href="updatetask.php?id=<?php echo $row["listId"]?>" class="link-success">Update</a>
      <a href="deletetask.php?id=<?php echo $row["listId"]?>" class="link-danger">Delete</a></td>
    </tr>
    <?php }?>
    </tbody>
    

</table>
    </div>


  <?php
 include("footer.php");
 ?>   
</body>
</html>