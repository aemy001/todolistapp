<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
<?php
include("header.php");
?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
<?php
if(isset($_POST["submit"])){
  $name= $_POST["userName"];
  $password = $_POST["userPassword"];
  $login = "SELECT * FROM users WHERE userName = '$name' && userPassword = '".md5($password)."';";
  $deliver = mysqli_query($conn,$login);
$row = mysqli_fetch_assoc($deliver);
$count = mysqli_num_rows($deliver);
if($count>0){
    $_SESSION["userId"] = $row["userId"];
    $_SESSION["userName"] = $row["userName"];
    $_SESSION["userPassword"] = $row["userPassword"];
    header("location:listview.php");
}
else{
    echo "<script>alert('enter valid email or password')</script>";
}
}



?>





                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="userName" />
                      <label class="form-label" for="form3Example1c">Enter Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="userPassword" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
</div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-check-label" for="form2Example3">
                    Don't have an Account? <a href="signup.php">click here</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Log In</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<?php
include("footer.php");

?>
</body>
</html>