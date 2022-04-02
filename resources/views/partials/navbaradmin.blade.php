<div class="col-lg-2">
    <ul class="bg-dark text-white">
        <br><br>
        <a href="{{ route('dashboard') }}">Home</a> <br><br>
        <a href="{{ route('datauser') }}">Kelola Data User</a> <br><br>
        <a href="{{ route('datatransaksi') }}">Kelola Data transaksi</a> <br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-dark" type="submit">Logout</button>
        </form>
    </ul>
</div>