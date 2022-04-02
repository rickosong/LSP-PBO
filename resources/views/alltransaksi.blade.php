<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alltransaksi.css">
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
							<a class="nav-link active" href="landing.php">Home</span></a>
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
    <!-- table -->
    <div class="container">
        <table class="table table-striped table-hover">
            <tr>
                <th>No. Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>id user</th>
                <th>id paket cuci</th>
                <th>total harga</th>
                <th>pembayaran</th>
                <th>kembalian</th>
                <th>Nama Paket tambahan</th>
                <th>Keterangan</th>
            </tr>
            <?php foreach ($allTransaksi as $transaksi) : ?>
                <tr>
                    <td><?= $transaksi["idtransaksi"] ?></td>
                    <td><?= $transaksi["tgltransaksi"] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="delete.php?id=<?= $transaksi["idtransaksi"] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini')">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
          </table>
    </div>

    <!-- footer -->
    <div class="footer">
        <p class="text-center">&copy;copyright Mohammad Ricko Aprilianto</p>
    </div>
        <!-- footer end -->
    			<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</body>
</html>