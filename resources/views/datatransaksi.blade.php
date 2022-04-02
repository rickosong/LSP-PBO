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
                <h1>Halaman Kelola Data Transaksi</h1>
                <hr>
                <a href="{{ route('export') }}" class="btn btn-success">Export PDF</a>
                <br><br>
                @include('partials.table')
            </div>
        </div>
</body>
</html>
