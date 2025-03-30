<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;

    protected $table = 'stok_barangs';

    protected $fillable = [
        'barang_id',
        'stok',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
