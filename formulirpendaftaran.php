<!--<?php
	//Koneksi Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbsiswabaru";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error($conn));
			//Data akan disimpan di database
			$submit = mysqli_query($conn, "INSERT INTO registrasi (tanggal, jenispendaftaran, tglMasuk, nis, paud, tk, skhun, ijazah, hobi, cita, nama, jkelamin, nisn, nik, tmplahir, tgllahir, agama, bk, jalan, rt, rw, dusun, kelurahan, kecamatan, kode, tmptinggal, transportasi, hp, telp, email, penerimaKPS, noKPS, kwn)
										  VALUES ('$_POST[tanggal]', 
										  		 '$_POST[jenispendaftaran]', 
										  		 '$_POST[tglMasuk]',
										  		 '$_POST[nis]', 
										  		 '$_POST[paud]', 
										  		 '$_POST[tk]',
										  		 '$_POST[skhun]', 
										  		 '$_POST[ijazah]', 
										  		 '$_POST[hobi]', 
										  		 '$_POST[cita]',
										  		 '$_POST[nama]',
										  		 '$_POST[jkelamin]',
										  		 '$_POST[nisn]',
										  		 '$_POST[nik]',
										  		 '$_POST[tmplahir]', 
										  		 '$_POST[tgllahir]',
										  		 '$_POST[agama]',
										  		 '$_POST[bk]',
										  		 '$_POST[jalan]',
										  		 '$_POST[rt]',
										  		 '$_POST[rw]',
										  		 '$_POST[dusun]',
										  		 '$_POST[kelurahan]',
										  		 '$_POST[kecamatan]',
										  		 '$_POST[kode]',
										  		 '$_POST[tmptinggal]',
										  		 '$_POST[transportasi]',
										  		 '$_POST[hp]', 
										  		 '$_POST[telp]', 
										  		 '$_POST[email]',
										  		 '$_POST[penerimaKPS]', 
										  		 '$_POST[noKPS]', 
										  		 '$_POST[kwn]')");
			if($submit) //kondisi saat tombol submit sukses
			{
				echo "<script>
						alert('Data pendaftaran berhasil di simpan!');
						document.location='formulirpendaftaran.php';
				     </script>";
			} else
			{
				echo "<script>
						alert('Data pendaftaran tidak berhasil di simpan! Ulangi lagi!');
						document.location='formulirpendaftaran.php';
				     </script>";
			}
?>-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulir Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuPkFOJwJ*ERdknLPMO" crossorigin="anonymous"> <!--Penggunaan boostrap-->
	<style type="text/css"> /*bagian CSS untuk membuat tampilan menjadi menarik*/
		*{
		background-color: cornflowerblue;
		}
		.warning {color: #FF0000;}
		.card{
			align-content: center;
			background-color: lightsteelblue;
		}
		.card-body{
			font-size: 16px;
		}
		.card-header{
			align-content: center;
			background-color: cornflowerblue;
		}
		.php{
			margin-top: 10px;
			margin-left: 20px;
		}

	</style>
</head>
<body>
	<?php 
	$error_tanggal=""; //variabel eror tanggal
	$error_jenispendaftaran=""; //variabel eror jenispendaftaran
	$error_tglMasuk=""; //variabel eror tglMasuk
	$error_nis=""; //variabel eror nis
	$error_npu=""; //variabel eror npu
	$error_paud=""; //variabel eror paud
	$error_tk=""; //variabel eror tk
	$error_skhun=""; //variabel eror skhun
	$error_ijazah=""; //variabel eror ijazah
	$error_hobi=""; //variabel eror hobi
	$error_cita=""; //variabel eror cita

	$error_nama=""; //variabel eror nama
	$error_jkelamin=""; //variabel eror jkelamin
	$error_nisn=""; //variabel eror nisn
	$error_nik=""; //variabel eror nik
	$error_tmplahir=""; //variabel eror tmplahir
	$error_tgllahir=""; //variabel eror tgllahir
	$error_agama=""; //variabel eror agama
	$error_bk=""; //variabel eror bk
	$error_jalan=""; //variabel eror jalan
	$error_rt=""; //variabel eror rt
	$error_rw=""; //variabel eror rw
	$error_dusun=""; //variabel eror dusun
	$error_kelurahan=""; //variabel eror kelurahan
	$error_kecamatan=""; //variabel eror kecamatan
	$error_kode=""; //variabel eror kode
	$error_tmptinggal=""; //variabel eror tmptinggal
	$error_transportasi=""; //variabel eror transportasi
	$error_hp=""; //variabel eror hp
	$error_telp=""; //variabel eror telepon
	$error_email=""; //variabel eror email
	$error_penerimaKPS=""; //variabel eror penerimaKPS
	$error_noKPS=""; //variabel eror noKPS
	$error_kwn=""; //variabel eror kwn

	$tanggal=""; //variabel tanggal 
	$jenispendaftaran=""; //variabel jenispendaftaran
	$tglMasuk=""; //variabel tglMasuk
	$nis=""; //variabel nis
	$npu=""; //variabel npu
	$paud=""; //variabel paud
	$tk=""; //variabel tk
	$skhun=""; //variabel skhun
	$ijazah=""; //variabel ijazah
	$hobi=""; //variabel hobi
	$cita=""; //variabel cita-cita

	$nama=""; //variabel nama
	$jkelamin=""; //variabel jkelamin
	$nisn=""; //variabel nisn
	$nik=""; //variabel nik
	$tmplahir=""; //variabel tmplahir
	$tgllahir=""; //variabel tgllahir
	$agama=""; //variabel agama
	$bk=""; //variabel bk
	$jalan=""; //variabel jalan
	$rt=""; //variabel rt
	$rw=""; //variabel rw
	$dusun=""; //variabel dusun
	$kelurahan=""; //variabel kelurahan
	$kecamatan=""; //variabel kecamatan
	$kode=""; //variabel kode
	$tmptinggal=""; //variabel tmptinggal
	$transportasi=""; //variabel transportasi
	$hp=""; //variabel hp
	$telp=""; //variabel telepon
	$email=""; //variabel email
	$penerimaKPS=""; //variabel penerimaKPS
	$noKPS=""; //variabel noKPS
	$kwn=""; //variabel kwn

	//dibawah ini merupakan sourcecode untuk form validasi setiap elemen tertentu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//FORM VALIDASI setiap elemen yang membutuhkan validasi
		//Jenis pendaftaran
		if (empty($_POST["jenispendaftaran"])) //cek apabila inputan jenis pendaftaran kosong
		{
			$error_jenispendaftaran = "Jenis pendaftaran tidak boleh kosong"; //pesan eror apabila inputan jenis pendaftaran belum diisi
		}

		//Tanggal masuk sekolah
		if (empty($_POST["tanggal"])) //cek apabila inputan Tanggal masuk sekolah kosong
		{
			$error_tanggal = "Tanggal masuk sekolah tidak boleh kosong"; //pesan eror apabila inputan NIS belum diisi
		}

		//NIS
		if (empty($_POST["nis"])) //cek apabila inputan NIS kosong
		{
			$error_nis = "NIS tidak boleh kosong"; //pesan eror apabila inputan NIS belum diisi
		}

		//NPU
		if (empty($_POST["npu"])) //cek apabila inputan NPU kosong
		{
			$error_npu = "Nomor Peserta Ujian tidak boleh kosong"; //pesan eror apabila inputan NPU belum diisi
		}
		
		//PAUD
		if (empty($_POST["paud"])) //cek apabila inputan PAUD kosong
		{
			$error_paud = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan PAUD belum diisi
		}

		//TK
		if (empty($_POST["tk"])) //cek apabila inputan TK kosong
		{
			$error_tk = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan TK belum diisi
		}

		//SKHUN
		if (empty($_POST["skhun"])) //cek apabila inputan SKHUN kosong
		{
			$error_skhun = "Nomor SKHUN tidak boleh kosong"; //pesan eror apabila inputan SKHUN belum diisi
		}

		//Ijazah
		if (empty($_POST["ijazah"])) //cek apabila inputan ijazah kosong
		{
			$error_ijazah = "Nomor ijazah tidak boleh kosong"; //pesan eror apabila inputan ijazah belum diisi
		}

		//hobi
		if (empty($_POST["hobi"])) //cek apabila inputan hobi kosong
		{
			$error_hobi = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan hobi belum diisi
		}

		//cita-cita
		if (empty($_POST["cita"])) //cek apabila inputan cita-cita kosong
		{
			$error_cita = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan cita-cita belum diisi
		}

		//Nama
		if (empty($_POST["nama"])) //cek apabila inputan Namalengkap kosong
		{
			$error_nama = "Nama harus diisi, tidak boleh kosong"; //pesan eror apabila inputan Nama belum diisi
		}
		else {
			$nama = cek_input($_POST["nama"]);
			if(!preg_match("/^[a-zA-Z]*S/",$nama)) //cek inputan Nama dengan kondisi
			{
				$nameErr = "Inputan hanya boleh huruf dan spasi"; //pesan eror apabila inputan Nama kurang tepat
			}
		}

		//Jenis Kelamin
		if (empty($_POST["jkelamin"])) //cek apabila inputan jenis kelamin kosong
		{
			$error_jkelamin = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan jenis kelamin belum diisi
		}

		//NISN
		if (empty($_POST["nisn"])) //cek apabila inputan NISN kosong
		{
			$error_nisn = "NISN tidak boleh kosong"; //pesan eror apabila inputan NISN belum diisi
		}

		//NIK
		if (empty($_POST["nik"])) //cek apabila inputan NIK kosong
		{
			$error_nik = "NIK tidak boleh kosong"; //pesan eror apabila inputan NIK belum diisi
		}

		//Tempat lahir
		if (empty($_POST["tmplahir"])) //cek apabila inputan Tempat lahir kosong
		{
			$error_tmplahir = "Tempat lahir tidak boleh kosong"; //pesan eror apabila inputan Tempat lahir belum diisi
		}

		//Tanggal lahir
		if (empty($_POST["tgllahir"])) //cek apabila inputan Tanggal lahir kosong
		{
			$error_tgllahir = "Tanggal lahir tidak boleh kosong"; //pesan eror apabila inputan Tanggal lahir belum diisi
		}

		//Agama
		if (empty($_POST["agama"])) //cek apabila inputan Agama kosong
		{
			$error_agama = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan agama belum diisi
		}

		//Berkebutuhan khusus
		if (empty($_POST["bk"])) //cek apabila inputan Berkebutuhan khusus kosong
		{
			$error_bk = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan berkebutuhan khusus belum diisi
		}

		//Alamat
		if (empty($_POST["jalan"])) //cek apabila inputan Alamat kosong
		{
			$error_jalan = "Alamat jalan tidak boleh kosong"; //pesan eror apabila inputan alamat belum diisi
		}

		//RT
		if (empty($_POST["rt"])) //cek apabila inputan Alamat rt kosong
		{
			$error_rt = "Alamat RT tidak boleh kosong"; //pesan eror apabila inputan alamat rt belum diisi
		}

		//RW
		if (empty($_POST["rw"])) //cek apabila inputan Alamat rw kosong
		{
			$error_rw = "Alamat RW tidak boleh kosong"; //pesan eror apabila inputan alamat rw belum diisi
		}

		//Nama Dusun
		if (empty($_POST["dusun"])) //cek apabila inputan Alamat dusun kosong
		{
			$error_dusun = "Alamat nama dusun tidak boleh kosong"; //pesan eror apabila inputan alamat dusun belum diisi
		}

		//Kelurahan
		if (empty($_POST["kelurahan"])) //cek apabila inputan Alamat kelurahan kosong
		{
			$error_kelurahan = "Alamat kelurahan tidak boleh kosong"; //pesan eror apabila inputan alamat kelurahan belum diisi
		}

		//Kecamatan
		if (empty($_POST["kecamatan"])) //cek apabila inputan Alamat kecamatan kosong
		{
			$error_kecamatan = "Alamat kecamatan tidak boleh kosong"; //pesan eror apabila inputan alamat kecamatan belum diisi
		}

		//kodepos 
		if (empty($_POST["kode"])) //cek apabila inputan Kode Pos kosong
		{
			$error_kode = "Kode Pos tidak boleh kosong"; //pesan eror apabila inputan Kode Pos belum diisi
		}

		//tempat tinggal
		if (empty($_POST["tmptinggal"])) //cek apabila inputan Tempat tinggal kosong
		{
			$error_tmptinggal = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan Tempat tinggal belum diisi
		}

		//transportasi
		if (empty($_POST["transportasi"])) //cek apabila inputan Transportasi kosong
		{
			$error_transportasi = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan Transportasi belum diisi
		}
		
		//hp
		if (empty($_POST["hp"])) //cek apabila inputan Telepon kosong
		{
			$error_hp = "Nomor Handphone tidak boleh kosong"; //pesan eror apabila inputan telepon belm diisi
		}
		else {
			$telp = cek_input($_POST["hp"]); //cek input telepon user
			if(!is_numeric($telp)) //cek inputan Telepon dengan kondisi
			{
				$error_hp = 'Nomor Handphone hanya boleh angka'; //pesan eror apabila inputan Telepon kurang tepat
			}
		}

		//telpon
		if (empty($_POST["telp"])) //cek apabila inputan Telepon kosong
		{
			$error_telp = "Nomor Telepon tidak boleh kosong"; //pesan eror apabila inputan telepon belm diisi
		}
		else {
			$telp = cek_input($_POST["telp"]); //cek input telepon user
			if(!is_numeric($telp)) //cek inputan Telepon dengan kondisi
			{
				$error_telp = 'Nomor Telepon hanya boleh angka'; //pesan eror apabila inputan Telepon kurang tepat
			}
		}

		//email
		if (empty($_POST["email"])) //cek apabila inputan Email kosong
		{
			$error_email = "Email tidak boleh kosong"; //pesan eror apabila inputan Email belum diisi
		}
		else {
			$email = cek_input($_POST["email"]); //cek inputan email user
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //cek inputan Email dengan kondisi
			{
				$error_email = "Format email invalid";  //pesan eror apabila inputan email kurang tepat
			}
		}

		//penerima KPS
		if (empty($_POST["penerimaKPS"])) //cek apabila inputan penerimaKPS kosong
		{
			$error_penerimaKPS = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan penerimaKPS belum diisi
		}

		//kewarganegaraan
		if (empty($_POST["kwn"])) //cek apabila inputan kewarganegaraan kosong
		{
			$error_kwn = "Silahkan dipilih, tidak boleh kosong"; //pesan eror apabila inputan kewarganegaraan belum diisi
		}

	}
	function cek_input($data){ //fungsi cek_input untuk membantu program memvalidasi inputan dari user
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	<div class="container">
				<div class="card-header"><!--Judul Form-->
				<h3 class="alert alert-primary text-center mt-3">FORMULIR PESERTA DIDIK</h3>
				</div>
				<div class="card-body text-light"> <!--card body dan membuat tulisan menjadi putih atau light-->
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--menggunakan method POST dan data inputan disimpan pada server-->
						<div class="form-group row"><!--Baris kode untuk mengatur Tanggal masuk sekolah dalam tabel-->
							<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
							<div class="col-sm-10">
								<input type="date" name="tanggal" class="form-control <?php echo ($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span> 
							</div>
						</div>
					</form>
				</div>
	
				<div class="card-header"><!--Judul Form-->
				<h4 class="alert alert-primary text-center mt-3">REGISTRASI PESERTA DIDIK</h4>
				</div>
				<div class="card-body text-light"> <!--card body dan membuat tulisan menjadi putih atau light-->
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--menggunakan method POST dan data inputan disimpan pada server-->
						<div class="form-group row"><!--Baris kode untuk mengatur Jenis pendaftaran dalam tabel-->
							<label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
							<div class="col-sm-10">
								<select name="jenispendaftaran" class="form-control <?php echo ($error_jenispendaftaran !="" ? "is-invalid" : ""); ?>" id="jenispendaftaran" placeholder="jenispendaftaran" value="<?php echo $jenispendaftaran; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Siswa Baru">Siswa Baru</option>
                                <option value="Pindahan">Pindahan</option>
                            </select>
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Tanggal masuk sekolah dalam tabel-->
							<label for="tglMasuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
							<div class="col-sm-10">
								<input type="date" name="tglMasuk" class="form-control <?php echo ($error_tglMasuk !="" ? "is-invalid" : ""); ?>" id="tglMasuk" placeholder="Tanggal" value="<?php echo $tglMasuk; ?>"><span class="warning"><?php echo $error_tglMasuk; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur NIS dalam tabel-->
							<label for="nis" class="col-sm-2 col-form-label">NIS</label>
							<div class="col-sm-10">
								<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder="Masukkan NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>  
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur NPU dalam tabel-->
							<label for="npu" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
							<div class="col-sm-10">
								<input type="text" name="npu" class="form-control <?php echo ($error_npu !="" ? "is-invalid" : ""); ?>" id="npu" placeholder="Masukkan Nomor Peserta Ujian" value="<?php echo $npu; ?>"><span class="warning"><?php echo $error_npu; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur PAUD dalam tabel -->
							<label for="paud" class="col-sm-2 col-form-label">Apakah pernah PAUD</label>
							<div class="col-sm-10">
								<select name="paud" class="form-control <?php echo ($error_paud !="" ? "is-invalid" : ""); ?>" id="paud" placeholder="paud" value="<?php echo $paud; ?>"> 
								<option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select><span class="warning"><?php echo $error_paud; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur TK dalam tabel -->
							<label for="tk" class="col-sm-2 col-form-label">Apakah pernah TK</label>
							<div class="col-sm-10">
								<select name="tk" class="form-control <?php echo ($error_tk !="" ? "is-invalid" : ""); ?>" id="tk" placeholder="tk" value="<?php echo $tk; ?>"> 
								<option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select><span class="warning"><?php echo $error_tk; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur SKHUN dalam tabel-->
							<label for="skhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
							<div class="col-sm-10">
								<input type="text" name="skhun" class="form-control <?php echo ($error_skhun !="" ? "is-invalid" : ""); ?>" id="skhun" placeholder="Masukkan Nomor SKHUN 16 Digit" value="<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Ijazah dalam tabel-->
							<label for="ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
							<div class="col-sm-10">
								<input type="text" name="ijazah" class="form-control <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?>" id="ijazah" placeholder="Masukkan Nomor Ijazah 16 Digit" value="<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span> 
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Hobi dalam tabel-->
							<label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
							<div class="col-sm-10">
								<select name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : ""); ?>" id="hobi" placeholder="hobi" value="<?php echo $hobi; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="Olah Raga"> Olah Raga </option>
								<option class="input" value="Kesenian"> Kesenian </option>
								<option class="input" value="Membaca"> Membaca </option>
								<option class="input" value="Menulis"> Menulis </option>
								<option class="input" value="Traveling"> Traveling </option>
								<option class="input" value="Lainnya"> Lainnya </option>
                            </select><span class="warning"><?php echo $error_hobi; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Cita dalam tabel-->
							<label for="cita" class="col-sm-2 col-form-label">Cita-cita</label>
							<div class="col-sm-10">
								<select name="cita" class="form-control <?php echo ($error_cita !="" ? "is-invalid" : ""); ?>" id="cita" placeholder="cita" value="<?php echo $cita; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="PNS"> PNS </option>
								<option class="input" value="TNI/Polri"> TNI/Polri </option>
								<option class="input" value="Guru/Dosen"> Guru/Dosen </option>
								<option class="input" value="Dokter"> Dokter </option>
								<option class="input" value="Politikus"> Politikus </option>
								<option class="input" value="Wiraswasta"> Wiraswasta </option>
								<option class="input" value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
								<option class="input" value="Lainnya"> Lainnya </option>
                            </select><span class="warning"><?php echo $error_cita; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>
					</form>
				</div>

				<div class="card-header"><!--Judul Form-->
				<h4 class="alert alert-primary text-center mt-3">DATA PRIBADI</h4>
				</div>
				<div class="card-body text-light"> <!--card body dan membuat tulisan menjadi putih atau light-->
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--menggunakan method POST dan data inputan disimpan pada server-->
						<div class="form-group row"> <!--Baris kode untuk mengatur Nama dalam tabel-->
							<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Jenis Kelamin dalam tabel -->
							<label for="jkelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-10">
								<select name="jkelamin" class="form-control <?php echo ($error_jkelamin !="" ? "is-invalid" : ""); ?>" id="jkelamin" placeholder="Pilih Salah Satu" value="<?php echo $jkelamin; ?>"> 
								<option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select><span class="warning"><?php echo $error_jkelamin; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur NISN dalam tabel-->
							<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
							<div class="col-sm-10">
								<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Masukkan Nomor NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur NIK dalam tabel-->
							<label for="nik" class="col-sm-2 col-form-label">NIK</label>
							<div class="col-sm-10">
								<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="Masukkan Nomor NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Tempat Lahir dalam tabel-->
							<label for="tmplahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
							<div class="col-sm-10">
								<input type="text" name="tmplahir" class="form-control <?php echo ($error_tmplahir !="" ? "is-invalid" : ""); ?>" id="tmplahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $tmplahir; ?>"><span class="warning"><?php echo $error_tmplahir; ?></span> 
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Tanggal Lahir dalam tabel-->
							<label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-10">
								<input type="date" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="Masukkan Tanggal lahir" value="<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir; ?></span> 
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Agama dalam tabel-->
							<label for="agama" class="col-sm-2 col-form-label">Agama</label>
							<div class="col-sm-10">
								<select name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="agama" value="<?php echo $agama; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="Islam"> Islam </option>
								<option class="input" value="Kristen/Protestan"> Kristen/Protestan </option>
								<option class="input" value="Katholik"> Katholik </option>
								<option class="input" value="Hindu"> Hindu </option>
								<option class="input" value="Budha"> Budha </option>
								<option class="input" value="Khong Hu Chu"> Khong Hu Chu </option>
								<option class="input" value="Lainnya"> Lainnya </option>
                            </select><span class="warning"><?php echo $error_agama; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Berkebutuhan Khusus dalam tabel-->
							<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
							<div class="col-sm-10">
								<select name="bk" class="form-control <?php echo ($error_bk !="" ? "is-invalid" : ""); ?>" id="bk" placeholder="bk" value="<?php echo $bk; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="Tidak"> Tidak </option>
								<option class="input" value="Netra"> Netra </option>
								<option class="input" value="Rungu"> Rungu </option>
								<option class="input" value="Grahita Ringan"> Grahita Ringan </option>
								<option class="input" value="Grahita Sedang"> Grahita Sedang </option>
								<option class="input" value="Daksa Ringan"> Daksa Ringan </option>
								<option class="input" value="Daksa Sedang"> Daksa Sedang </option>
								<option class="input" value="Laras"> Laras </option>
								<option class="input" value="Wicara"> Wicara </option>
								<option class="input" value="Tuna Ganda"> Tuna Ganda </option>
								<option class="input" value="Hiper Aktif"> Hiper Aktif </option>
								<option class="input" value="Cerdas Istimewa"> Cerdas Istimewa </option>
								<option class="input" value="Bakat Istimewa"> Bakat Istimewa </option>
								<option class="input" value="Kesulitan Belajar"> Kesulitan Belajar </option>
								<option class="input" value="Narkoba"> Narkoba </option>
								<option class="input" value="Indigo"> Indigo </option>
								<option class="input" value="Down Sindrome"> Down Sindrome </option>
								<option class="input" value="Autis"> Autis </option>
                            </select><span class="warning"><?php echo $error_bk; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Alamat Jalan dalam tabel-->
							<label for="jalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
							<div class="col-sm-10">
								<input type="text" name="jalan" class="form-control <?php echo ($error_jalan !="" ? "is-invalid" : ""); ?>" id="jalan" placeholder="Masukkan Alamat Jalan" value="<?php echo $jalan; ?>"><span class="warning"><?php echo $error_jalan; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur RT dalam tabel-->
							<label for="rt" class="col-sm-2 col-form-label">RT</label>
							<div class="col-sm-10">
								<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="Masukkan Alamat RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur RW dalam tabel-->
							<label for="rw" class="col-sm-2 col-form-label">RW</label>
							<div class="col-sm-10">
								<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="Masukkan Alamat RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Nama Dusun dalam tabel-->
							<label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
							<div class="col-sm-10">
								<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Masukkan Nama Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Nama Kelurahan/Desa dalam tabel-->
							<label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
							<div class="col-sm-10">
								<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Masukkan Nama Kelurahan/Desa" value="<?php echo $kelurahan; ?>"><span class="warning"><?php echo $error_kelurahan; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Kecamatan dalam tabel-->
							<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
							<div class="col-sm-10">
								<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Kode Pos dalam tabel-->
							<label for="kode" class="col-sm-2 col-form-label">Kode Pos</label>
							<div class="col-sm-10">
								<input type="text" name="kode" class="form-control <?php echo ($error_kode !="" ? "is-invalid" : ""); ?>" id="kode" placeholder="Masukkan Kode Pos" value="<?php echo $kode; ?>"><span class="warning"><?php echo $error_kode; ?></span> 
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Agama dalam tabel-->
							<label for="tmptinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
							<div class="col-sm-10">
								<select name="tmptinggal" class="form-control <?php echo ($error_tmptinggal !="" ? "is-invalid" : ""); ?>" id="tmptinggal" placeholder="tmptinggal" value="<?php echo $tmptinggal; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="Bersama Orang Tua"> Bersama Orang Tua </option>
								<option class="input" value="Wali"> Wali </option>
								<option class="input" value="Kos"> Kos </option>
								<option class="input" value="Asrama"> Asrama </option>
								<option class="input" value="Panti Asuhan"> Panti Asuhan </option>
								<option class="input" value="Lainnya"> Lainnya </option>
                            </select><span class="warning"><?php echo $error_tmptinggal; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Moda Transportasi dalam tabel-->
							<label for="transportasi" class="col-sm-2 col-form-label">Moda Transportasi</label>
							<div class="col-sm-10">
								<select name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" placeholder="Moda Transportasi" value="<?php echo $transportasi; ?>">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option class="input" value="Jalan kaki"> Jalan kaki </option>
								<option class="input" value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
								<option class="input" value="Kendaraan Umum/Angkot/Pete-pete"> Kendaraan Umum/Angkot/Pete-pete </option>
								<option class="input" value="Jemputan Sekolah"> Jemputan Sekolah </option>
								<option class="input" value="Kereta Api"> Kereta Api </option>
								<option class="input" value="Ojek"> Ojek </option>
								<option class="input" value="Andong/Bendi/Sado/Dokar/Delman/Beca"> Andong/Bendi/Sado/Dokar/Delman/Beca </option>
								<option class="input" value="Perahu penyebrangan/Rakit/Getek"> Perahu penyebrangan/Rakit/Getek </option>
								<option class="input" value="Lainnya"> Lainnya </option>
                            </select><span class="warning"><?php echo $error_transportasi; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Nomor HP dalam tabel-->
							<label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
							<div class="col-sm-10">
								<input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is-invalid" : ""); ?>" id="hp" placeholder="Masukkan Nomor HP" value="<?php echo $hp; ?>"><span class="warning"><?php echo $error_hp; ?></span> 
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Nomor Telepon dalam tabel-->
							<label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
							<div class="col-sm-10">
								<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Masukkan Nomor Telepon" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span> 
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Email dalam tabel-->
							<label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="Masukkan Email Anda" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span><!--User diminta mengisi email dengan sesuai, jika tidak akan muncul warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur PAUD dalam tabel -->
							<label for="penerimaKPS" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
							<div class="col-sm-10">
								<select name="penerimaKPS" class="form-control <?php echo ($error_penerimaKPS !="" ? "is-invalid" : ""); ?>" id="penerimaKPS" placeholder="penerimaKPS" value="<?php echo $penerimaKPS; ?>"> 
								<option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select><span class="warning"><?php echo $error_penerimaKPS; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur No. KPS/KKS/PKH/KIP dalam tabel-->
							<label for="noKPS" class="col-sm-2 col-form-label">No. KPS/KKS/PKH/KIP</label>
							<div class="col-sm-10">
								<input type="text" name="noKPS" class="form-control <?php echo ($error_noKPS !="" ? "is-invalid" : ""); ?>" id="noKPS" placeholder="No. KPS/KKS/PKH/KIP pilih salah satu" value="<?php echo $noKPS; ?>"><span class="warning"><?php echo $error_noKPS; ?></span><!--User diminta mengisi email dengan sesuai, jika tidak akan muncul warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Kewarganegaraan dalam tabel -->
							<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
							<div class="col-sm-10">
								<select name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="Pilih Kewarganegaraan" value="<?php echo $kwn; ?>"> 
								<option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Indonesia (WNI)">Indonesia (WNI)</option>
                                <option value="Asing (WNA)">Asing (WNA)</option>
                            </select><span class="warning"><?php echo $error_kwn; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary" name="submit">Submit</button> <!--Tombol Submit-->
							</div>
						</div>
					</form> <!--Tag penutup form-->
				</div>
			</div>
		</div>
	</div>
</div>
</body> <!--Tag penutup body-->
</html> <!--Tag penutup html-->