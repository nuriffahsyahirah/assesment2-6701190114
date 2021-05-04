
<?php
	$conn = mysqli_connect("localhost", "root", "", "assesment2");  

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows =[];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}

		return $rows;

	}
	function hapus($semester){
		global $conn;

		 mysqli_query($conn, "DELETE FROM ipk WHERE semester = $semester");
		return mysqli_affected_rows($conn);
	}
	function edit($data){
		global $conn;

		$semester = stripslashes($data["semester"]);
		$ipk =stripslashes($data["ipk"]);
		

			$query ="UPDATE ipk SET ipk ='$ipk' WHERE semester = $semester
		      ";
		      
		      mysqli_query($conn, $query);

		      return mysqli_affected_rows($conn);
	}
	function tambah($data){
		global $conn;
		$semester = stripslashes($data["semester"]);
		$ipk =stripslashes($data["ipk"]);
		
		// $Gambar = upload();
		// if(!$Gambar){
		// 	return false;
		// }

			$query ="INSERT INTO ipk 
		      VALUES
		      ('$semester', '$ipk')
		      ";
		      mysqli_query($conn, $query);

		      return mysqli_affected_rows($conn);
	}

	function registrasi($data){
	global $conn;
	$nim=stripslashes($data["nim"]);
	$nama=stripslashes($data["nama"]);
	$kelas=stripslashes($data["kelas"]);
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	
	$result = mysqli_query($conn, "SELECT nim FROM registrasi WHERE username = '$username'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
					alert('username sudah terdaftar');
			  </script>";	  
			  return false;
	}

	//cek konfirmasi password

	if ($password !== $password2){
		echo "<script>
					alert('password tidak sesuai');
			  </script>";	  
			  return false;
	}

	// enkripsi password

	$password = password_hash($password, PASSWORD_DEFAULT);


	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO registrasi VALUES('$nim', '$nama', '$kelas', $username', '$password')");

	return mysqli_affected_rows($conn);
}
?>