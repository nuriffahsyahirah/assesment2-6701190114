<?php
require ('functions.php');
session_start();
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql ="select * from registrasi where username = '".$username."' and password ='".$password."'";
    $data = mysqli_query($conn,$sql); 
    $login_check = mysqli_num_rows($data);
    if($login_check > 0){ 
        $_SESSION['register']=$username;
        header("Location: about.php");
         
    }
    else{
        echo "<script>
        alert('Username atau password salah');
        </script>";
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
  <title>Login Mahasiswa</title>


</head>


<body>
 
  <div id="login-page">
    <div class="container">
        
  <form method="post">
  
     
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    
     
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Login">

    <div class="form-group">
    <a href="registration.php">Click here to register</a>
    </div>
  </form>
        
    </div>
  </div>
 
</body>

</html>


