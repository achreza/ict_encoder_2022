<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function cinema() {
        return view('client.cinema');
    }

    public function iai() {
        return view('client.iai');
    }

    public function drone() {
        return view('client.drone');
    }
}
