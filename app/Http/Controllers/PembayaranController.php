<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function konfirmasi($id) {
        try {
            Pembayaran::where('tim_id', $id)->update([
                'status' => 1
            ]);
            return redirect()->back()->with(['status' => true, 'message' => 'pembayaran berhasil dikonfirmasi']);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => false, 'message' => 'pembayaran gagal dikonfirmasi']);
        }

    }

    public function konfirmasiBatal($id) {
        try {
            Pembayaran::where('tim_id', $id)->update([
                'status' => 0
            ]);
            return redirect()->back()->with(['status' => true, 'message' => 'pembayaran batal dikonfirmasi']);
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => false, 'message' => 'gagal']);   
        }
    }
}
