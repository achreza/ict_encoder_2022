<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function cinema() {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function($query) {
            $query->where('kategori_lomba_id', 1);
        })->paginate(10);
        return view('server.admin.cinema', compact('peserta'));
    }

    public function iai() {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function($query) {
            $query->where('kategori_lomba_id', 2);
        })->paginate(10);
        return view('server.admin.iai', compact('peserta'));
    }

    public function mdr() {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function($query) {
            $query->where('kategori_lomba_id', 3);
        })->paginate(10);
        return view('server.admin.mdr', compact('peserta'));
    }
}
