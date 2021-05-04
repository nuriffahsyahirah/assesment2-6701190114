<?php
require('functions.php');
// $conn = mysqli_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.register(nim,nama,kelas,username,password)values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['kelas']."','".$_POST['username']."','".md5($_POST['password'])."')";
    $ret = mysqli_query($conn, $sql);
    if($ret){
        
          echo "<script>
          alert('Registrasi Berhasil')
          location= 'login.php';
          </script>";
    }else{
        
          echo "<script>
          alert('Registrasi Gagal');
          </script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>

    <div class="container">
  <h2>Register Here </h2>
  <form method="post">

    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
    </div>
  
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
    </div>

    <div class="form-group">
      <label for="kelas">Kelas:</label>
      <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" required>
    </div>

    <div class="form-group">
      <label for="Username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">

    <div class="form-group">
    <a href="login.php">Login</a>
    </div>
  </form>
</div>


  </body>
</html>

