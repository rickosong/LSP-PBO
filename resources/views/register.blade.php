<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/register.css" />
		<title>CAR-WASH | REGISTRASI</title>
	</head>
	<body>
		<!-- form Registrasi -->
		<section class="container">
			<section class="row justify-content-center">
				<section class="col-sm-12 col-lg-5 col-md-12">
					<form class="form-container" method="POST" action="{{ route('storeregister') }}">
						@csrf
						<div class="form-group mb-3">
							<h2>Registrasi User</h2>
							<br /><br />
							 <?php if (isset($error)) :?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  Register Gagal, Silahkan coba lagi. 
									  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							<?php endif; ?>
							<label for="username" class="teks-kolom">Username:</label>
							<input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" />
						</div>
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" />
							<a href="{{ route('login') }}"><small class="text-cl-sm">Udah Punya Akun?, Klik Disini Untuk Login!</small></a
							><br />
						</div>
						<div class="d-grid gap-2">
							<button class="btn btn-primary" type="submit">Daftar</a>
						</div>
					</form>
				</section>
			</section>
		</section>
		<!-- form rwgistrasi end -->
	</body>

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</html>