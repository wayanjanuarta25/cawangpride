<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubJenis extends Model
{
    use HasFactory;

    protected $table = 'sub_jenis';
    protected $fillable = ['jenis_materiil_id', 'nama'];

    public function jenisMateriil()
    {
        return $this->belongsTo(JenisMateriil::class);
    }

    public function subSubJenis()
    {
        return $this->hasMany(SubSubJenis::class);
    }
}
