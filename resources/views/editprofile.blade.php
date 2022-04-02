<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <title>Document</title>
</head>
<body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="home.html">CAR WASH SMKN 2 Banjarmasin</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class="nav-link active" href="home.html">Home</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="alltransaksi.php">Transaksi</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="profil.php">Profil</span></a>
						</li>
						<li class="nav-item active">
							<button class="nav-link active btn btn-dark" ><a href="logout.php" class="text-white">Logout</a></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navbar end -->

    <!-- content -->
    <div class="container row justify-content-center">
        <div class="card" style="width:40rem">
            <h5 class="card-header text-center">Halaman Edit Profil</h5>
            <div class="card-body">
                <form action="{{ route('updateprofil', auth()->user()->id) }}" method="post">
					@csrf
					@method('PUT')
				@if (session()->has('error'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('error') }} 
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
					<div class="form-group mb-3">
					</div>
					<div class="form-group mb-3">
						<label for="username" class="teks-kolom">Username:</label>
						<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" value="{{ $user->username }}" />
					</div>
					<br><br>
					<button type="submit" name="ubah" class="btn btn-primary">Ubah</a>
				</form>
            </div>
          </div>
    </div>
    <!-- content end -->

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</body>
</html>