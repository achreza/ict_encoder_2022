<?php

namespace App\Models;

use App\Model\VerifyTim;
use App\Models\Lomba;
use App\Models\Pembayaran;
use App\Models\Peserta;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tim extends Authenticatable
{
	use Notifiable;

    protected $guarded = ['id'];

    public function verifyTim() {
    	return $this->hasOne(VerifyTim::class, 'id', 'tim_id');
    }

    public function pembayaran() {
    	return $this->hasOne(Pembayaran::class, 'tim_id', 'id');
    }

    public function lomba() {
    	return $this->hasOne(Lomba::class, 'tim_id', 'id');
    }

    public function peserta() {
        return $this->hasMany(Peserta::class);
    }
}
