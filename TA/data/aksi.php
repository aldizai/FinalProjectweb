<!DOCTYPE html> 
<html>
<head>
	<title>TUGAS AKHIR WEB</title>
	<link rel="stylesheet" type="text/css" href="../css/aar.css">
</head>
<body>

	<div class="zai">
	<marquee><h2>SELAMAT TANNGAPAN BERHASIL DIKIRIM </h2></marquee>
</div>
	<div class="ppn">

</div>
	<div class="maverick">
		<h2><center>Formulir pendaftaran Kepanitiaan Teknik Informatika</center></h2><br>
		<?php
		$nam = $_POST["nam"]; //untuk membuat variabel penampung untuk var nam
		$nim = $_POST["nim"]; //untuk membuat variabel penampung untuk var nim
		$jk = $_POST["jk"]; //untuk membuat variabel penampung untuk var jk
		$wa = $_POST["wa"]; //untuk membuat variabel penampung untuk var wa
		$myFile = "data.txt"; //agar membuat variabel penampung untuk data txt
		$data = fopen($myFile, "a") or die("can't open file"); //variabel penampung untuk menampung & membuka var myfile dan membaca isinya
		fputs($data, "Nama           :".$nam."\n"); //untuk menulis isi variabel tersebut ke dalam txt
		fputs($data, "NIM            :".$nim."\n");
		fputs($data, "Jenis Kelamin  :".$jk."\n");
		fputs($data, "No.WA          :".$wa."\n");
		fclose($data); //untuk menutup data yg di fopen diatas

		echo"Nama           :$nam<br>"; //untuk menampilkan isi dari variabel nama
		echo"NIM            :$nim<br>"; //untuk menampilkan isi dari variabel nim
		echo"Jenis Kelamin  :$jk<br>"; //untuk menampilkan isi dari variabel jenis kelamin
		echo"No.WA          :$wa<br>"; //untuk menampilkan isi dari variabel wa
		?>

	<center>
	<p>Ingin Mencari Refrensi?</p>
	<form name="formcari" onSubmit="cari()">
  	<input class="search" name="keyword" type="text" placeholder="Cari..." required>	
  	<input class="button" type="submit" value="Cari" onclick="cf()">
	</form>
</center>
	</form>
</div>
<script type="text/javascript" src="../js/mav.js"></script>
</body>
</html>