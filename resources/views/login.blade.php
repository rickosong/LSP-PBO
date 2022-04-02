<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/login.css" />
		<title>Login</title>
	</head>
	<body>
		<!-- form login -->
		<section class="container">
			<section class="row justify-content-center">
				<section class="col-sm-12 col-lg-5 col-md-12">
					<form class="form-container" method="POST" action="{{ route('storelogin') }}">
						@csrf
						<div class="form-group mb-3">
							<h2>CAR WASH SMKN 2 Banjarmasin</h2>
							<br /><br />
							@if (session()->has('error'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ session('error') }} 
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>
							@endif
							<label for="username" class="teks-kolom">Username:</label>
							<input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" />
						</div>
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" />
							<a href="{{ route('register') }}"><small class="text-cl-sm">Gak punya akun? Daftar Sekarang!</small></a
							><br />
						</div>
						<div class="d-grid gap-2">
							<button class="btn btn-primary" type="submit">Login</button>
						</div>
					</form>
				</section>
			</section>
		</section>
		<!-- form login end -->
	</body>

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</html>