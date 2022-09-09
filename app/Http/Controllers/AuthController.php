<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use App\Models\Lomba;
use App\Models\Pembayaran;
use App\Models\Peserta;
use App\Models\Tim;
use App\Models\VerifyTim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

	public function login() {
		return view('auth.login');
	}

	public function loginPost(Request $request) {
		$dataLogin = ['email' => $request->email, 'password' => $request->password];

		if (auth()->guard('tim')->attempt($dataLogin)) {
			return redirect()->route('dashboard.peserta');
		}

		return redirect()->back()->with(['status' => false, 'message' => 'Maaf Email/password Salah']);
	}

    public function register() {
    	return view('auth.register');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'email' => 'required|unique:tims'
        ]);

    	DB::beginTransaction();

    	try {

            $dateNow = strtotime(date('Y-m-d'));


            $openRegisterCinema = strtotime('2019-08-26');
            $openRegisterIAI = strtotime('2019-08-28');
            $openRegisterDrone = strtotime('2019-09-08');

            if($dateNow < $openRegisterCinema && $request->kategori_lomba == 1) {
                return redirect()->back()->with(['status' => false, 'message' => "Mohon maaf pendaftaran Cinematography belum di buka, pendaftaran dibuka tanggal 26 Agustus 2019"]);
            }

            if($dateNow < $openRegisterIAI && $request->kategori_lomba == 2) {
                return redirect()->back()->with(['status' => false, 'message' => "Mohon maaf pendaftaran Innovative App Idea belum di buka, pendaftaran dibuka tanggal 28 Agustus 2019"]);
            }

            if($dateNow < $openRegisterDrone && $request->kategori_lomba == 3) {
                return redirect()->back()->with(['status' => false, 'message' => "Mohon maaf pendaftaran Micro Drone Race belum di buka, pendaftaran dibuka tanggal 08 September 2019"]);
            }

    		$dataTim = 	[
    			"nama_tim" => $request['nama_tim'],
    			"no_telp" => $request['no_telp'],
    			"email" => $request['email'],
    			"asal_tim" => $request['asal_tim'],
    			"password" => bcrypt($request['password']),
    		];

    		$tim = Tim::create($dataTim);
            
            $nama_anggota = collect(request()->nama_anggota)->filter(function($value) {
                return null !== $value;
            })->toArray();

    		foreach ($nama_anggota as $value) {
    			$dataPeserta = [
    				"tim_id" => $tim->id,
    				"nama" => $value
    			];

    			$peserta = Peserta::create($dataPeserta);
    		}

    		$dataLomba = [
    			"kategori_lomba_id" => $request->kategori_lomba,
    			"tim_id" => $tim->id
    		];

    		$lomba = Lomba::create($dataLomba);

            $dataPembayaran = [
                'tim_id' => $tim->id
            ];

            $pembayaran = Pembayaran::create($dataPembayaran);


    		// send email verification
    		$verifyTim = VerifyTim::create([
	            'tim_id' => $tim->id,
	            'token' => str_random(40)
	        ]);

    		Mail::to($tim->email)->send(new VerifyMail($tim, $verifyTim));

    		DB::commit();

    		return redirect()->route('auth.login')->with(['status' => true, 'message' => 'Pendaftaran berhasil, silahkan cek email untuk verifikasi akun ICT2019']);

    	} catch (Exception $e) {

    		DB::rollback();
    		return redirect()->back()->with(['status' => false, 'message' => "Pendaftaran Gagal"]);
    	}
    }

    public function logout() {
        session()->flush();
        return redirect()->route('auth.login');
    }

    public function verifyTim($token) {
    	$verifyTim = VerifyTim::where('token', $token)->first();

        if(isset($verifyTim) ){
            $tim = $verifyTim->tim;
            if(!$tim->email_verified) {
                $verifyTim->tim->email_verified = 1;
                $verifyTim->tim->save();
                $status = "Email kamu terverifikasi, silahkan login sekarang.";
            }else{
                $status = "Email kamu sudah terverifikasi, silahkan login sekarang";
            }
        }else{
            return redirect('/login')->with(['status' => false, 'message' => "Maaf email kamu tidak terdaftar."]);
        }

        return redirect('/login')->with(['status' => true, 'message' => $status]);
    }

    public function loginAdmin() {
        return view('auth.login-admin');
    }

    public function loginAdminPost(Request $request) {
        $dataLogin = ['username' => $request->email, 'password' => $request->password];
        if (auth()->guard('admin')->attempt($dataLogin)) {
            return redirect()->route('dashboard.admin');
        }

        return redirect()->back()->with(['status' => false, 'message' => 'Maaf Email/password Salah']);
    }
}
