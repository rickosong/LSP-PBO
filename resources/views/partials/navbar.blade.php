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
							<a class="nav-link active" href="{{ route('landing') }}">Home</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="">Transaksi</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="{{ route('profil') }}">Profil</span></a>
						</li>
						<li class="nav-item active">
							<form action="{{ route('logout') }}" method="post">
								@csrf
								<button class="nav-link active btn btn-dark" type="submit">Logout</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navbar end --> 