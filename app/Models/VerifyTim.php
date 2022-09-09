<?php

namespace App\Models;

use App\Models\Tim;
use Illuminate\Database\Eloquent\Model;

class VerifyTim extends Model
{
    protected $guarded = ['id'];

    public function tim() {
    	return $this->hasOne(Tim::class, 'id', 'tim_id');
    }
}
