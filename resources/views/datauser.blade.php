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
                <h1>Halaman Kelola Data User</h1>
                <hr>
                <a href="{{ route('tambahuser') }}" class="btn btn-success">Tambah User</a>
                @if (session()->has('success'))
                <br><br>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->has('successDelete'))
                <br><br>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successDelete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->has('successUpdate'))
                <br><br>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successUpdate') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <br><br>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id user</th>
                        <th>username</th>
                        <th>password</th>
                        <th>Keterangan</th>
                    </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->password }}</td>
                            <td>                
                                <a href="{{ route('edituser', $user->id) }}" class="btn btn-warning" type="submit">Edit</a>
                                <form action="{{ route('hapususer', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="confirm('apakah anda yakin ingin menghapus {{ $user->username }}')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
</body>
</html>
