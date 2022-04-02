<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/profil.css">
    <title>Document</title>
</head>
<body>
	@include('partials.navbar')

    <!-- content -->
    <div class="container row justify-content-center">
        <div class="card" style="width:40rem">
            @if (session()->has('updateprofile'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('updateprofile') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h5 class="card-header text-center">Halaman Profil</h5>
            <div class="card-body">
              <h5 class="card-title text-center">{{ auth()->user()->username }}</h5>
              <br><br>
              <a href="{{ route('editprofil', auth()->user()->id) }}" class="btn btn-primary">Edit</a>
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