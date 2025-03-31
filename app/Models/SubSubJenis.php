<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubJenis extends Model
{
    use HasFactory;

    protected $table = 'sub_sub_jenis';
    protected $fillable = ['sub_jenis_id', 'nama'];

    public function subJenis()
    {
        return $this->belongsTo(SubJenis::class, 'sub_jenis_id');
    }
}
