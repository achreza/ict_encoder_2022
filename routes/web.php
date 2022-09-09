<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Dummy data

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dummy-data', 'DummyDataController@index');

// Home

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/cinematography-competition', 'HomeController@cinema')->name('home.cinema');
Route::get('/innovative-app-idea', 'HomeController@iai')->name('home.iai');
Route::get('/micro-drone-race', 'HomeController@drone')->name('home.drone');

// Auth
Route::group(['middleware' => 'guest'], function() {
	// Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
	// Route::get('/login', [AuthController::class, 'loginPost']);
	// Route::get('/login-admin', [AuthController::class, 'loginAdmin'])->name('auth.loginAdmin');
	// Route::get('/login-admin', [AuthController::class, 'loginAdminPost']);
	// Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
	// Route::get('/register', [AuthController::class, 'store']);
	Route::get('/login', 'AuthController@login')->name('auth.login');
	Route::post('/login', 'AuthController@loginPost');
	Route::get('/login-admin', 'AuthController@loginAdmin')->name('auth.loginAdmin');
	Route::post('/login-admin', 'AuthController@loginAdminPost');
	Route::get('/register', 'AuthController@register')->name('auth.register');
	Route::post('/register', 'AuthController@store');
});
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::get('/peserta/verify/{token}', 'AuthController@verifyTim')->name('auth.email-verification');

// Admin Auth

// Dashboard
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'dashboard'], function() {
		Route::group(['middleware' => 'tim','prefix' => 'peserta'], function() {
			Route::get('/', 'DashboardController@homePeserta')->name('dashboard.peserta');
			Route::get('/konfirmasi-pembayaran', 'DashboardController@konfirmasiPembayaran')->name('dashboard.peserta.konfirmasi-pembayaran');
			Route::post('/konfirmasi-pembayaran', 'DashboardController@storeKonfirmasiPembayaran');
			Route::get('/profile', 'DashboardController@profile')->name('dashboard.profile');

			// persyaratan
			Route::get('/proposal', 'DashboardController@proposal')->name('dashboard.proposal');
			Route::post('/proposal', 'DashboardController@storeProposal');

			Route::get('/link-video', 'DashboardController@linkVideo')->name('dashboard.linkVideo');
			Route::post('/link-video', 'DashboardController@storeLinkVideo');

			Route::get('/link-prototype', 'DashboardController@linkPrototype')->name('dashboard.linkPrototype');
			Route::post('/link-prototype', 'DashboardController@storelinkPrototype');
		});

		Route::group(['middleware' => 'admin','prefix' => 'admin'], function() {
			Route::get('/', 'AdminController@index')->name('dashboard.admin');
			
			Route::get('/cinematography', 'LombaController@cinema')->name('dashboard.cinema');
			Route::get('/innovative-app-idea', 'LombaController@iai')->name('dashboard.iai');
			Route::get('/micro-drone-race', 'LombaController@mdr')->name('dashboard.mdr');

			Route::get('/konfirmasi-pembayaran/{id}', 'PembayaranController@konfirmasi')->name('konfirmasi');
			Route::get('/konfirmasi-batal/{id}', 'PembayaranController@konfirmasiBatal')->name('konfirmasi.batal');
			Route::get('/tim/{id}', 'PesertaController@detail')->name('peserta.detail');
			
		});
	});
});