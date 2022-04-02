<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
</head>
<body>
        <!-- content -->
        <div class="row">
            @include('partials.navbaradmin')
            <div class="col-lg-8">
                <h1>Halaman Edit Data user</h1>
                <hr>
                <div class="card" style="">
                    <div class="card-body">
                        <form action="{{ route('updateuser', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                gagal, Silahkan coba lagi dan cek. 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> --}}

                            <div class="form-group mb-3">
                                <label for="username" class="teks-kolom">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" value="{{ $user->username }}" />
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-primary">Update User</a>
                        </form>
                    </div>
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