<?php  

	require 'functions.php';

	//ambil data di url
	$semester = $_GET['semester'];  

	//query data
	$adm = query("SELECT * FROM ipk WHERE semester = $semester")[0];

	if(isset($_POST["submit"]) ) {
		//cek data
		if( edit($_POST) > 0 ) {
			echo "
			<script>
				alert('data ipk berhasil diubah!!');
				document.location.href ='indexprestasi.php';
			</script>
			";
		}else{
			echo "
			<script>
				alert('data ipk gagal diubah!!');
				document.location.href ='indexprestasi.php';
			</script>

			";
	}
}

 ?>

 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Tambah</title>
  </head>
  <style >
    .container{
      width : 30%;
      margin-top: 9%;
      box-shadow: 0 3px 20px rgba(0,0,0,0.3);
      padding: 40px;
    }
    button{
      width: 40%;
      height: 5%
    }
  </style>
  <body>
      <!-- <div class="card bg-dark text-black">
          <img src="regis.png" class="card-img" alt="..." height="770" width="100">
          <div class="card-img-overlay"><br><br> -->
      <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <h4 class="text-center">Indeks Prestasi Akademik</h4>
        <hr>				
            <div class="form-group">
              <input type="hidden" name="semester" value="<?= $adm["semester"];?>"> 
                <label>Indeks Prestasi Akademik</label>
                <input type="text" name="ipk" class="form-control" id="ipk" value="<?= $adm["ipk"];?>" placeholder="Masukkan Ipk"> 
            </div>
            <br>
           
           <center>
            <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
          </center>
         
        </form>
      </div>

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