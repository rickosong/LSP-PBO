<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
        <div class="row">
            @include('partials.navbaradmin')
            <div class="col-lg-8">
                <h1>Selamat Datang Admin</h1>
                <hr>
                <br><br>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Jumlah data User</h3>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body bg-primary">
                              <h5 class="card-title text-center text-white">{{ $user }}</h5>
                              <h6 class="card-subtitle mb-2 text-center text-white">User</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Jumlah data transaksi</h3>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body bg-primary">
                              <h5 class="card-title text-center text-white">{{ $transaksi }}</h5>
                              <h6 class="card-subtitle mb-2 text-center text-white">Transaksi</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
