<?php

namespace App\Http\Controllers;

use App\Models\KategoriPersyaratan;
use App\Models\Pembayaran;
use App\Models\Persyaratan;
use App\Models\Tim;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function homePeserta() {
        $linkProposal = Persyaratan::where('kategori_persyaratan_id', 1)->whereHas('lomba', function($query) {
            $query->where('tim_id', auth()->guard('tim')->user()->id);
        })->count();
        $linkPrototype = Persyaratan::where('kategori_persyaratan_id', 2)->whereHas('lomba', function($query) {
            $query->where('tim_id', auth()->guard('tim')->user()->id);
        })->count();

    	return view('server.peserta.home',compact('linkProposal','linkPrototype'));
    }

    public function konfirmasiPembayaran() {
    	return view('server.peserta.konfirmasi-pembayaran');
    }

    public function storeKonfirmasiPembayaran(Request $request) {
    	$this->validate($request, [
    		'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    	]);

    	try {

    		if ($request->hasFile('file')) {
    			
    			$file = $request->file('file');

				$imageName = time().'-'.auth()->guard('tim')->user()->nama_tim.'.'.$file->getClientOriginalExtension();
				// dd($imageName);
				$file->move(public_path('pembayaran'), $imageName);

    			$pembayaran = Pembayaran::where('tim_id', auth()->guard('tim')->user()->id)->first();

    			$pembayaran->update([
    				'bukti_pembayaran' => $imageName
    			]);

    			return redirect()->back()->with(['status' => true, 'message' => "upload bukti pembayaran berhasil"]);
    		}

    	} catch (Exception $e) {
    		return redirect()->back()->with(['status' => false, 'message' => "upload bukti pembayaran gagal"]);
    	}
    }

    public function profile() {
    	$profile = Tim::with(['peserta', 'lomba.kategoriLomba'])->where('id', auth()->guard('tim')->user()->id)->first();
    	return view('server.peserta.profile', compact('profile'));
    }

    public function proposal() {
    	$kategoriPersyaratanId = KategoriPersyaratan::where('nama', 'proposal')->first()->id;
    	return view('server.peserta.proposal', compact('kategoriPersyaratanId'));
    }

    public function storeProposal(Request $request) {
    	$this->validate($request, [
    		'file' => 'required|mimes:pdf'
    	]);

    	try {

    		if ($request->hasFile('file')) {

    			$file = $request->file('file');

				$fileName = time().'-'.auth()->guard('tim')->user()->nama_tim.'.'.$file->getClientOriginalExtension();
				// dd($fileName);
				$file->move(public_path('proposal'), $fileName);

				$persyaratan = new Persyaratan;
				$result = $persyaratan->where(['lomba_id' => auth()->guard('tim')->user()->lomba->id, 'kategori_persyaratan_id' => $request->kategori_persyaratan_id])->first();
				
    			if ($result != null) {
    				return redirect()->back()->with(['status' => false, 'message' => "anda sudah mengupload proposal sebelumnya"]);
    			}else {
    				$persyaratan->create([
	    				'lomba_id' => auth()->guard('tim')->user()->lomba->id,
	    				'kategori_persyaratan_id' => $request->kategori_persyaratan_id,
	    				'isi' => $fileName
	    			]);
    			}

    			return redirect()->back()->with(['status' => true, 'message' => "upload proposal berhasil"]);
    		}

    	} catch (Exception $e) {
    		return redirect()->back()->with(['status' => false, 'message' => "upload proposal gagal"]);
    	}
    }

    public function linkVideo() {
    	$kategoriPersyaratanId = KategoriPersyaratan::where('nama', 'link video')->first()->id;
        $persyaratan = Persyaratan::whereHas('lomba', function($query) {
            $query->where('tim_id', auth()->guard('tim')->user()->id);
        })->first();
    	return view('server.peserta.link_video', compact('kategoriPersyaratanId', 'persyaratan'));
    }

    public function storeLinkVideo(Request $request) {
    	$this->validate($request, [
    		'link_video' => 'required'
    	]);

    	try {


            $persyaratan = Persyaratan::find($request->id);
            if ($persyaratan != null) {

                $persyaratan->update([
                    'isi' => $request->link_video
                ]);

                return redirect()->back()->with(['status' => true, 'message' => "link video berhasil di update"]);
            }else {
                $persyaratan = new Persyaratan;
                $persyaratan->create([
                    'lomba_id' => auth()->guard('tim')->user()->lomba->id,
                    'kategori_persyaratan_id' => $request->kategori_persyaratan_id,
                    'isi' => $request->link_video
                ]);
			    return redirect()->back()->with(['status' => true, 'message' => 'data berhasil disimpan']);
            }


    	} catch (Exception $e) {
    		return redirect()->back()->with(['status' => false, 'message' => 'da	ta gagal disimpan']);
    	}
    }

    public function linkPrototype() {
    	$kategoriPersyaratanId = KategoriPersyaratan::where('nama', 'link prototype')->first()->id;
        $persyaratan = Persyaratan::where('kategori_persyaratan_id', $kategoriPersyaratanId)->whereHas('lomba', function($query) {
            $query->where('tim_id', auth()->guard('tim')->user()->id);
        })->first();
    	return view('server.peserta.link_prototype', compact('kategoriPersyaratanId', 'persyaratan'));
    }

    public function storeLinkPrototype(Request $request)  {
    	$this->validate($request, [
    		'link_prototype' => 'required'
    	]);

    	try {

            $persyaratan = Persyaratan::find($request->id);

            if ($persyaratan != null) {

				$persyaratan->update([
					'isi' => $request->link_prototype
				]);

				return redirect()->back()->with(['status' => true, 'message' => "proposal berhasil di update"]);
			}else {
                $persyaratan = new Persyaratan;
				$persyaratan->create([
    				'lomba_id' => auth()->guard('tim')->user()->lomba->id,
    				'kategori_persyaratan_id' => $request->kategori_persyaratan_id,
    				'isi' => $request->link_prototype
    			]);
			}

			return redirect()->back()->with(['status' => true, 'message' => 'data berhasil disimpan']);

    	} catch (Exception $e) {
    		return redirect()->back()->with(['status' => false, 'message' => 'data gagal disimpan']);
    	}
    }
}
