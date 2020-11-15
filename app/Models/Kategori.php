<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table='kategori';
    public $timestamps = false;

    public function barangs(){
        return $this->hasMany('App\Models\Barang');
    }
}
