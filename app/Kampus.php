<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    public $table = "kampus";
    protected $fillable = [
        'nama_kampus', 'alamat', 'latitude', 'longitude', 'telepon', 'gambar'
    ];
}
