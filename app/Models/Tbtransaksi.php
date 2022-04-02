<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbtransaksi extends Model
{
    use HasFactory;
    public $table = 'tbtransaksi';

    public $fillable = [
        'namapakettambahan',
        'totalharga',
        'pembayaran',
        'kembalian',
        'user_id',
        'paketcuci_id',
    ];

}
