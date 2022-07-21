
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rju Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  </head>

  <body>
  	<!-- navbar -->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
	  <div class="container">
	  	<a class="navbar-brand" href="index.php">
	      <i class="fas fa-dolly"></i>
	      RjuExpress.
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  </div>
	</nav>
	<!-- tampil -->
	<div class="container-fluid layanan pt-5 pb-5">
		<div class="container text-center">
			<h2 id="layanan" style="color: white;">hook</h2>
			<h2 class="display-6" >Data Inputan User</h2>
			<p>Berikut adalah data inputan user yang bisa dicek oleh pemilik jasa pengiriman.</p>
			<table class="table mt-5">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Jarak</th>
			      <th scope="col">Hasil</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
						$buka = fopen("inputan.txt", "r");
						$hitung=1;
						while($isi = fgets($buka,100)){
							$pisah = explode("|", $isi);
							echo "<tr>";
							echo "<th scope='row'>$hitung</th>";
							echo "<td>$pisah[0]</td>";
							echo "<td>$pisah[1]</td>";
							echo "<td>Rp$pisah[2]</td>";
							echo "</tr>";
							$hitung++;
						}
					?>
			  </tbody>
			</table>
		</div>
	</div>	
	<div class="container text-center pt-5 pb-5">
		All Rights Reserved &copy; 2022
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>						
