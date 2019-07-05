function validation() {
		var nam = document.getElementById("nam").value; //variabel penampung
		if (nam != "") { //percabangan agar bisa memunculkan alert
			return true;
		}
		else{
			alert('Anda harus mengisi Nama Lengkap !'); //pesan peringatan
		}

		var nim = document.getElementById("nim").value;
		if (nim != "") {
			return true;
		}
		else{
			alert('NIM wajib diisi !');
		}
		
		var wa = document.getElementById("wa").value;
		if (wa != "") {
			return true;
		}else{
			alert('Bagaimana kami akan menghubungi anda jika No. WhatsApp anda kosong !');
		}
	}
	//PROSES
	//fungsi validasi akan mengambil element dari id di form html dan dimaksukkan ke dalam variable penampung yg ditulis
	//jika variable tersebut tidak ada isinya maka akan muncul alert
	//sederhananya fungsi ini hanya untuk mengecek jika nama itu ada isinya / tidak dan kalau tidak akan memunculkan pesan peringatan

	function pesan() {
		alert("Tanggapan Anda berhasil direkam"); //untuk menampilkan pesan peringatan
	}

	function cari() {
	var kata = document.formcari.keyword.value; //variable penampung yang akan diisi dengan kata yang kita ketik
	var hasil = "http://www.google.com/search?q=" + kata ; //untuk menambahkan variable kata dengan pencarian google
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')	//untuk membuka window baru dengan hasil pencarian yang sudah kita ketik
	};

	function cf(){
	confirm("Press Ok to Continue"); //memunculkan pesan konfirmasi jadi / tidak kita melanjutkan pencarian fungsi cari
	}
