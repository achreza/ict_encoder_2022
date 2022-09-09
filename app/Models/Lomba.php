<?php

namespace App\Models;

use App\Models\KategoriLomba;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $guarded = ['id'];

    public function kategoriLomba() {
    	return $this->hasOne(KategoriLomba::class, 'id', 'kategori_lomba_id');
    }

    public function tim() {
    	return $this->belongsTo(Tim::class, 'tim_id', 'id');
    }

    public function persyaratan() {
    	return $this->belongsTo(Persyaratan::class, 'id', 'lomba_id');
    }
}
