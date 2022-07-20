<?php
require "config.php";
	$hasil = 0;
if(isset($_POST["submit"])) {
	$hasil = hitung($_POST["jarak"]);
	tulis($_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rju Express</title>
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  </head>

  <body>
  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
	  <div class="container">
	  	<a class="navbar-brand" href="#">
	      <i class="fas fa-dolly"></i>
	      RjuExpress.
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" href="#layanan">Layanan</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#biaya">Biaya</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#tentang">Tentang</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#kontak">Kontak Kami</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- banner -->
	<div class="container-fluid banner">
		<div class="container text-center hh">
			<h4 class="display-5 text-warning">Selamat Datang di Website Kami</h4>
			<h3 class="display-6 text-light">Penyedia Layanan Pengiriman</h3>
			<a href="#layanan">
				<button type="button" class="btn btn-warning btn-lg">Cek Layanan</button>
			</a>
		</div>
	</div>
	<!-- layanan -->
	<div class="container-fluid layanan pt-5 pb-5">
		<div class="container text-center">
			<h2 id="layanan" style="color: white;">hook</h2>
			<h2 class="display-3" >Layanan</h2>
			<p>Di RjuExpress kami menyediakan beberapa layanan seperti berikut!</p>
			<div class="row pt-4">
				<div class="col-md-4">
					<span class="lingkaran"><i class="fas fa-shipping-fast fa-5x"></i></span>
					<h3 class="mt-3">Pengiriman</h3>
					<p>Layanan pengiriman kami merupakan salah satu yang tercepat di Indonesia.</p>

				</div>

				<div class="col-md-4">
					<span class="lingkaran"><i class="fas fa-dollar-sign fa-5x"></i></span>
					<h3 class="mt-3">Biaya Pengiriman</h3>
					<p>Di Website ini, kami juga menyediakan layanan penghitung biaya pengiriman.</p>

				</div>

				<div class="col-md-4">
					<span class="lingkaran"><i class="fas fa-map-marker-alt fa-5x"></i></span>
					<h3 class="mt-3">Lacak Pengiriman</h3>
					<p>RjuExpress juga memiliki fitur pelacakan! dengan fitur ini kalian dapat melacak lokasi barang kalian pada saat pengiriman.</p>

				</div>
			</div>
		</div>
	</div>
    <!-- biaya -->
	<div class="container-fluid pt-5 pb-5 bg-light">
		<div class="container text-center">
			<h2 class="text-light" id="biaya">hook</h2>
			<h3 class="display-3">Cek Biaya Pengiriman</h2>
			<p>Kalian bisa melakukan pengecekan biaya pengiriman di website kami lho! dengan hanya memasukkan jarak pengiriman(dalam KM),
				biaya pengirimannya akan langsung keluar.
			</p>
			<div class="row pt-4 gx-4 gy-4">
				<div class="col-md-12">
					<form  method="post">
					  <label class="form-label" for="jarak">Jarak (Dalam KM): </label>
					  <input type="number" id="jarak" name="jarak" placeholder="Masukkan jarak" class="form-control" value="<?php if(isset($_POST["submit"])) echo $_POST["jarak"] ?>" />
					  <br>
					  <button class="btn btn-warning" id="tombol_form" name="submit" value="submit" type="submit">Hitung Biaya</button>
					</form>
					<br>
					<label class="form-label">Biaya Pengiriman : Rp</label><span id="hasil"><?= $hasil ?></span>
				</div>
			</div>
		</div>
	</div>
	<!-- tentang -->
	<div class="container-fluid pt-5 pb-5">
		<div class="container">
			<h2 id="tentang" style="color: white;">hook</h2>
			<h2 class="display-3 text-center" >Tentang</h2>
			<p class="text-center">RjuExpress sebuah layanan penyedia jasa pengiriman keseluruh Indonesia.</p>
			<div class="clearfix pt-5">
				<div class="row pt-4">
					<div class="col-md-6 text-center">
						<span class="lingkaranA"><i class="fas fa-users fa-6x"></i></span>
						<h2 class="mt-3">About Us</h3>
					</div>

					<div class="col-md-6 mb-5">
						<p>
	            	RjuExpress didirikan pada tahun 2022 oleh Raju Putra, dengan tujuan untuk membantu masyarakat dalam melakukan pengiriman.
	            </p>
	            <p>
	            	RjuExpress menyediakan banyak sekali layanan yang gampang untuk dimengerti oleh masyarakat.
	            </p>
	            <p>
	            	Disini kami akan selalu melakukan inovasi dalam jasa pengiriman, sehingga dapat menjadi yang nomor 1 di hati masyarakat Indonesia. 
	            </p>
	            <p>
	            	Kirimlah barang kalian menggunakan RjuExpress! Cepat, murah, aman dan bersahabat!.
	            </p>
					</div>
	            
			</div>
		</div>
	</div>
	<!-- kontak -->
	<div class="container-fluid pt-5 pb-5 kontak">
		<div class="container">
			<h2 class="display-3 text-center text-warning" id="kontak">Kontak Kami</h2>
			<p class="text-center">Kalian dapat mengirimkan masukan ataupun kritik melalui form dibawah ini.</p>
			<div class="row pb-3">
				<div class="col-md-6">
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Nama">
					<input class="form-control form-control-lg mb-3" type="text" placeholder="Email">
					<input class="form-control form-control-lg" type="text" placeholder="No. Phone">
				</div>
				<div class="col-md-6">
					<textarea class="form-control form-control-lg" rows="5"></textarea>
				</div>
			</div>
			<div class="col-md-3 mx-auto text-center">
				<button type="button" class="btn btn-warning btn-lg">Kirim Pesan</button>
			</div>
		</div>
	</div>
	<div class="container text-center pt-3 teks ">
		<a class="nav-link"href="tampil.php" >tampilan</a>
		All Rights Reserved &copy; 2022
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>						