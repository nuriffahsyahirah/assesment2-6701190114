<?php 
	require 'functions.php';

	$semester = $_GET["semester"];

	if(hapus($semester) > 0){
		echo "
			<script>
				alert('data berhasil dihapus!!');
				document.location.href ='indexprestasi.php';
			</script>
			";
	} else{
		echo "
			<script>
				alert('data gagal dihapus!!');
				document.location.href ='indexprestasi.php';
			</script>
			";
	}

 ?>