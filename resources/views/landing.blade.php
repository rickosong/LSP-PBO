<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/landing.css" />
		<title>Halaman Home</title>
	</head>
	<body>

		@include('partials.navbar')

		<!-- carousel -->
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../img/mobil2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>Selamat Datang di CAR WASH SMKN 2 Banjarmasin</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- carousel end -->

		<!-- card and content -->
		<div class="container">
			<br><br>
			<h1 class="text-lg-center text-md-center text-sm-center">Daftar paket Pencucian Mobil</h1>
			<br><br>
			<div class="row">
				<!-- looping array data paket -->
				@foreach ($datapaket as $paket)
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto" style="width:18rem">
						<div class="card-body">
							<h5 class="card-title m-1">{{ $paket->namapaket }}</h5>
							<br><br>
							<p>{{ $paket->deskripsi }}</p>
							<br><br>	
							<h6 class="price">RP. {{ $paket->harga }} </h4>
							<div class="d-grid gap-2">
							<a href="{{ route('transaksi', $paket->id) }}" class="btn btn-primary btn-card-info"></i>Pilih Paket</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- stop looping -->
			</div>		
		</div>
		<!-- card and content -->

		<br><br><br><br>

		@include('partials.footer');

			<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
    </body>
</html>
