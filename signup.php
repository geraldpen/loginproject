<?php 
  include 'connect.php';
  if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "insert into adduser (name, email, password) 
    values('$name','$email','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
      echo "";
    }
    else{
      die(mysqli_error($con));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title></title>
  </head>
  <body>
  

  <div class="container my-5">
    <h2>Gytec</h2>
  <form method= "post">
  <div class="mb-3">
    <label  class="form-label">Full Name</label>
    <input type="text" class="form-control" name= "name" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Adress</label>
    <input type="email" name = "email"class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label  class="form-label">Enter your password</label>
    <input type="password" class="form-control" name= "password" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>

  </body>
</html>