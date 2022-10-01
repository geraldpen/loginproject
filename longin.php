
<?php 
  include 'connect.php';
  $sql = "select *from adduser where email = '$email' and password = '$password'";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['gytec']='true';
    header('location:signup.php');

  }
else
{
  echo "username or password are not correct";
}




  /*
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "insert into adduser (name, email, password) 
    values('$name','$email','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
      echo "insertion success";
    }
    else{
      die(mysqli_error($con));
    }
  }*/


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Long in page</title>
    <link  rel = "style/css" href ="C:\xampp\htdocs\gytechproject\index.css"> 
  </head>
  <body>
  <div class="container my-5">
    <h2 style="text-align: center; padding:24px;">Gytec</h2>
  <form method= "post" class="form">
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name= "email" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name = "password"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-grid gap-2 col-12 mx-auto">
  <button class="btn btn-primary" type="button" name= submit>Submit</button>
</div>
</form>
<p>By continuing, you agree to Gytech's <a href="#" style = "text-decoration:none;">conditions of use</a>  and   <a href="#" style = "text-decoration:none;">privacy notice</a></p>
<button type="button" class="btn btn-secondary btn-lg btn-primary" class = "text-light"> <a href="signup.php " style = "text-decoration:none; color:black;">Create Your Gytec Account</a></button>
  </body>
</html>