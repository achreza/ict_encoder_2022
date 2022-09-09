<?php

namespace App\Models;

use App\Models\KategoriPersyaratan;
use App\Models\Lomba;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    protected $guarded = ['id'];

    public function lomba() {
    	return $this->hasOne(Lomba::class, 'id', 'lomba_id');
    }

    public function kategoriPersyaratan() {
    	return $this->belongsTo(KategoriPersyaratan::class, 'kategori_persyaratan_id', 'id');
    }
}
