<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$cinema = Lomba::where('kategori_lomba_id', 1)->count();
    	$iai = Lomba::where('kategori_lomba_id', 2)->count();
    	$mdr = Lomba::where('kategori_lomba_id', 3)->count();
        return view('server.admin.home', compact('cinema', 'iai', 'mdr'));
    }
}
