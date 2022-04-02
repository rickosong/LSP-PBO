<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbtransaksi;
use App\Models\Tbpaketcuci;

class TransaksiController extends Controller
{
    public function index($id){
        // dd($id);
        $paket = Tbpaketcuci::find($id);
        // dd($paket);
        return view('transaksi', [
            'paket' => $paket,
        ]);
    }

    public function store(Request $request, $id){
        $iduser = auth()->user()->id;

        if ($request->tambahan == 20000) {
            $namapaket = 'Fogging';
        }
        else if($request->tambahan == 10000){
            $namapaket = 'Wax';
        }
        else{
            $namapaket = '-';
        }

        // dd($namapaket);

        $transaksi = New Tbtransaksi;

        $transaksi->user_id = $iduser;
        $transaksi->tgltransaksi = $request->tanggal;
        $transaksi->paketcuci_id = $request->idpaket;
        $transaksi->namapakettambahan = $namapaket;
        $transaksi->totalharga = $request->totalharga;
        $transaksi->pembayaran = $request->pembayaran;
        $transaksi->kembalian = $request->kembalian;

        $transaksi->save();

        // return session()->flash('transaksiberhasil');

        return redirect('/home');
    }
}
