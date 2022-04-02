<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/transaksi.css" />
		<title>Halaman Home</title>
	</head>
	<body>
        @include('partials.navbar')

        <!-- content -->
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('storetransaksi', $paket->id) }}" method="post">
                        @csrf
                        <div class="row">
								{{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
									    Gagal, Silahkan coba lagi. 
									  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div> --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="hidden" class="form-control" aria-describedby="emailHelp" name="iduser" value="{{ auth()->user()->id }}"/>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="hidden" class="form-control" aria-describedby="emailHelp" name="idpaket" value="{{ $paket->id }}"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="transaksi" class="teks-kolom">No Transaksi:</label>
                                    <input type="number" class="form-control" id="transaksi" aria-describedby="emailHelp" name="transaksi" placeholder="nomor Transaksi" onkeypress="return onlyNumberKey(event)" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="teks-kolom">Tanggal Transaksi:</label>
                                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Password" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nama" class="teks-kolom">Nama Customer:</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Customer" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="paket" class="teks-kolom">Pilihan Paket:</label>
                                    <input type="text" class="form-control" name="namapaket" id="paket" placeholder="Masukkan Password" value="{{ $paket->namapaket }}" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="harga" class="teks-kolom">Harga Paket:</label>
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga" value="{{ $paket->harga }}" required readonly/>
                                </div>
                            </div>
                            <div class="col-md-3 offset-3">
                                <div class="form-group">
                                    <input type="radio" name="tambahan" id="tidakada" value="0"> Tidak ada tambahan
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="tambahan" id="wax" value="10000"> wax RP 10.000
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="tambahan" id="fogging" value="20000"> Fogging RP 20.000
                                </div>
                                <br><br><br><br><br><br><br><br><br><br><br>
                                <a class="btn btn-primary" type="submit" name="totalharga" id="total">Hitung Total Harga</a>
                            </div>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                            <label for="total_harga" class="teks-kolom">Total harga</label>
                            <input type="number" class="form-control" name="totalharga" id="total_harga" aria-describedby="emailHelp" placeholder="Masukkan Total Harga" required  value="" readonly/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username" class="teks-kolom">Pemabayaran:</label>
                                    <input type="number" class="form-control" name="pembayaran" id="pembayaran" aria-describedby="emailHelp" placeholder=" Masukkan Pembayaran" required value="" onkeypress="return onlyNumberKey(event)"/>
                                </div>
                                <a class="btn btn-primary" id="tombol_kembalian">Hitung Kembalian</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="username" class="teks-kolom">Kembalian:</label>
                                    <input type="number" class="form-control" name="kembalian" id="kembalian" aria-describedby="emailHelp" placeholder="Kembalian Anda" required value="" readonly/>
                                </div>
                                <button class="btn btn-success" type="submit" name="submit" onclick="return alert('Transaksi Berhasil, kembalie ke home')">Simpan</button>
                                {{-- @if (has('transaksiberhasil'))
                                    
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
        <br><br><br><br><br>
        <!-- content end -->

        @include('partials.footer')

        	<!-- jQuery -->
            <script src="../js/jquery-3.6.0.min.js"></scrip>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="../js/bootstrap.min.js"></script>
            <!-- jQuery end -->

            <!-- js -->
            <script type="text/javascript">
                // panggil tombol yang memakai id "total lalu jalankan function total"
                document.getElementById('total').addEventListener("click", total)
                // panggil tombol yang memakai id "tombol_kembalian lalu jalankan function total"
                document.getElementById('tombol_kembalian').addEventListener("click", kembalian)

                function total(){
                    var hargaPaket = document.getElementById('harga').value;
                    var hargaTambahanWax = document.getElementById('wax').value;
                    var tidakAdaHargaTambahan = document.getElementById('tidakada').value;
                    var hargaTambahanFogging = document.getElementById('fogging').value;
                    if ($("input[id='wax']:checked").val() != null ) {
                        var grand_total = Number(hargaPaket) + Number(hargaTambahanWax);
                    } else if ($("input[id='fogging']:checked").val() != null ) {
                        var grand_total = Number(hargaPaket) + Number(hargaTambahanFogging);
                    } else{
                        var grand_total = Number(hargaPaket) + Number(tidakAdaHargaTambahan);
                    }   
                    var hasil = document.getElementById('total_harga').value = grand_total;
                    document.getElementById("total_harga").innerHTML=hasil;
                }

                function kembalian(){
                    var total = document.getElementById('total_harga').value;
                    var pembayaran = document.getElementById('pembayaran').value;
                    var kembalian = Number(pembayaran) - Number(total);
                    var hasilKembalian = document.getElementById('kembalian').value = kembalian;
                    document.getElementById("kembalian").innerHTML=hasilKembalian;
                }

                function onlyNumberKey(event) {
                    // Only ASCII character in that range allowed
                    var ASCIICode = (event.which) ? event.which : event.keyCode
                    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                        return false;
                    return true;
                }
            </script>
   </body>
</html> 
