<?php 
   require 'functions.php';
	$ipk = query("SELECT * FROM ipk");

	// if(isset($_POST["cari"]) ){
	// 	$adm = cari($_POST["keyword"]);
	// }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Login</title>
  </head>
  <style >
    .container{
      width : 1000%;
      margin-top: 9%;
      box-shadow: 0 3px 20px rgba(0,0,0,0.3);
      padding: 40px;
    }
    button{
      width: 48%;
      height: 100%
    }
  </style>
  <body>
      <div class="container">
        <form action="" method="post">
			<table class="table table-hover">
					 <h2>Indeks Prestasi Kumulatif</h2>
					 <a href="tambah.php" style="margin-left">Tambah Data Ipk</a>
					 
		<tr>
			<th>Semester Mahasiswa</th>
			<th>Ipk</th>
			<th>Aksi</th>
		</tr>

		<?php foreach( $ipk as $row ): ?>
		<tr>
      <td><?= $row["semester"]; ?></td>
			<td><?= $row["ipk"]; ?></td>
      <td>
        <a href="edit.php?semester=<?= $row["semester"]; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>

        <a href="hapus.php?semester=<?= $row["semester"] ;?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return confirm('anda yakin ingin menghapus data ini?');">Delete</a>
      </td>
		</tr>
		<?php endforeach; ?>
	</table>
        
        </form>
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </div>
</div>
  </body>
</html>



























































<!-- 
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Halaman Admin</title>
</head>
<body>
	 <div class="card bg-dark text-black">
          <img src="bglogin.png" class="card-img" alt="..." height="770" width="100">
          <div class="card-img-overlay"><br><br> -->
	<!-- <h1>Data Hijab</h1>

	<a href="tambah.php">Tambah Data Hijab</a>
	<br><br> -->
	<!-- <div class="container">
	<form action="" method="post">
 -->
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" border="1" cellpadding="10" cellspacing="0 " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1><a class="navbar-brand" href="#">A E R A l l</a></h1>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="tambah.php">Tambah Data Hijab</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>  -->
    <!-- form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="keyword" autofocus placeholder="Search" autocomplete="off" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari">Search</button>
    </form>
</div>
  </div>
</nav> -->

	<!-- <div class="container">
	<table class="table table-hover">


		<tr>
			<th>Semester Mahasiswa</th>
			<th>Ipk</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $adm as $row ): ?>
		<tr>
			<td><?= $i ; ?></td>
			<td>

				<a href="edit.php?semester=<?= $row["semester"]; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>

				<a href="delete.php?semester=<?= $row["semester"] ;?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return confirm('anda yakin ingin menghapus data ini?');">Delete</a>
			</td>
			<td><?= $row["Semester"]; ?></td>
			<td><?= $row["Ipk"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</form>
</div>
</body>
</html> -->