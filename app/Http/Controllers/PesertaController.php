<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use App\Models\Tim;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function detail($id) {
        $profile = Tim::with(['peserta', 'lomba.kategoriLomba'])->where('id', $id)->first();
        $persyaratan = Persyaratan::with('kategoriPersyaratan')->whereHas('lomba', function($query) use($id) {
        	$query->where('tim_id', $id);
        })->get();
        return view('server.admin.profile', compact('profile', 'persyaratan'));
    }
}
