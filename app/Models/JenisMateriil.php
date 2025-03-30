<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMateriil extends Model
{
    use HasFactory;

    protected $table = 'jenis_materiil';
    protected $fillable = ['nama'];

    public function subJenis()
    {
        return $this->hasMany(SubJenis::class);
    }
}

