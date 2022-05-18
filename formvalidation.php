<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation</title> <!--Judul HTML-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuPkFOJwJ*ERdknLPMO" crossorigin="anonymous"> <!--Penggunaan boostrap-->
	<style type="text/css"> /*bagian CSS untuk membuat tampilan menjadi menarik*/
		.warning {color: #FF0000;}
		.card{
			align-content: center;
			background-color: lightsteelblue;
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
	<!--Baris kode PHP untuk mendeklarasikan variabel -->
	<?php 
	$error_nama=""; //variabel eror nama
	$error_email=""; //variabel eror email
	$error_web=""; //variabel eror web
	$error_pesan=""; //variabel eror pesan
	$error_telp=""; //variabel eror telepon

	$nama=""; //variabel nama
	$email=""; //variabel email
	$web=""; //variabel web
	$pesan=""; //variabel pesan
	$telp=""; //variabel telepon

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["nama"])) //cek apabila inputan Nama kosong
		{
			$error_nama = "Nama tidak boleh kosong"; //pesan eror apabila inputan Nama belum diisi
		}
		else {
			$nama = cek_input($_POST["nama"]);
			if(!preg_match("/^[a-zA-Z]*S/",$nama)) //cek inputan Nama dengan kondisi
			{
				$nameErr = "Inputan hanya boleh huruf dan spasi"; //pesan eror apabila inputan Nama kurang tepat
			}
		}
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
		if (empty($_POST["pesan"])) //cek apabila inputan Pesan kosong
		{
			$error_pesan = "Pesan tidak boleh kosong"; //pesan eror apabila inputan pesan belum diisi
		}
		else {
			$pesan = cek_input($_POST["pesan"]);//cek apabila inputan Pesan kosong
		}
		if (empty($_POST["web"]))
		{
			$error_web = "Website tidak boleh kosong";
		}
		else {
			$web = cek_input($_POST["web"]); //cek input website user
			if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i",$web)) //cek inputan Website dengan kondisi
			{
				$error_web = "URL tidak valid"; //pesan eror apabila inputan Website tidak valid
			}
		}
		if (empty($_POST["telp"])) //cek apabila inputan Telepon kosong
		{
			$error_pesan = "Telp tidak boleh kosong"; //pesan eror apabila inputan telepon belm diisi
		}
		else {
			$telp = cek_input($_POST["telp"]); //cek input telepon user
			if(!is_numeric($telp)) //cek inputan Telepon dengan kondisi
			{
				$error_telp = 'Nomor HP hanya boleh angka'; //pesan eror apabila inputan Telepon kurang tepat
			}
		}
	}
	function cek_input($data){ //fungsi cek_input untuk membantu program memvalidasi inputan dari user
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<div class ="row">
		<div class="col-md-6">
			<div class="card ml-3 mt-3">
				<div class="card-header"><!--Judul Form-->
					Contoh Validasi Form dengan PHP
				</div>
				<div class="card-body">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><!--menggunakan method POST dan data inputan disimpan pada server-->
						<div class="form-group row"><!--Baris kode untuk mengatur Nama dalam tabel-->
							<label for="nama" class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span><!--Apabila inputan Nama kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row"><!--Baris kode untuk mengatur Email dalam tabel-->
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span><!--User diminta mengisi email dengan sesuai, jika tidak akan muncul warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Website dalam tabel-->
							<label for="web" class="col-sm-2 col-form-label">Website</label>
							<div class="col-sm-10">
								<input type="text" name="web" class="form-control <?php echo ($error_web !="" ? "is-invalid" : ""); ?>" id="web" placeholder="Web" value="<?php echo $web; ?>"><span class="warning"><?php echo $error_web; ?></span><!--User diminta mengisi website denga valid, jika tidak akan muncul warning-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Telepon dalam tabel-->
							<label for="telp" class="col-sm-2 col-form-label">Telp</label>
							<div class="col-sm-10">
								<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="Telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span> <!--Apabila inputan telepon tidak boleh kosong dan harus berisi angka-->
							</div>
						</div>

						<div class="form-group row"> <!--Baris kode untuk mengatur Pesan dalam tabel -->
							<label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
							<div class="col-sm-10">
								<input type="text" name="pesan" class="form-control <?php echo ($error_pesan !="" ? "is-invalid" : ""); ?>" id="pesan" placeholder="Pesan" value="<?php echo $pesan; ?>"><span class="warning"><?php echo $error_pesan; ?></span> <!--Apabila inputan pesan kosong maka menampilkan warning-->
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Sign in</button> <!--Tombol Sign in-->
							</div>
						</div>
					</form> <!--Tag penutup form-->
				</div>
			</div>
		</div>
	</div>
	<!-- Baris kode PHP untuk menampilkan data inputan user-->
	<div class="php">
	<?php 
	echo "<h2> Your Input: </h2>";
	echo "Nama = ".$nama; //memanggil inputan nama
	echo "<br>";
	echo "Email = ".$email; //memanggil inputan email
	echo "<br>";
	echo "Website = ".$web; //memanggil inputan website
	echo "<br>";
	echo "Telp = ".$telp; //memanggil inputan telepon
	echo "<br>";
	echo "Pesan = ".$pesan; //memanggil inputan pesan
	?> </div>
</body> <!--Tag penutup body-->
</html> <!--Tag penutup html-->