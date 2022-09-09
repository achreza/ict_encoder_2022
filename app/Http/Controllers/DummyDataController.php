<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KategoriLomba;
use App\Models\KategoriPersyaratan;
use Illuminate\Http\Request;

class DummyDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // admin
        Admin::create(['username' => 'ict-admin@himatif-encoder.or.id', 'password' => bcrypt('gebyarict2019')]);
        
        // Kategori persyaratan
        $dataKategoriPersyaratan = ['proposal', 'link video', 'link prototype'];

        foreach ($dataKategoriPersyaratan as $value) {
            KategoriPersyaratan::create(['nama' => $value]);
        }

        // kategori lomba
        $dataKategoriLomba = [
            'Cinematography',
            'Innovative App Idea',
            'Micro Drone Race',
        ];

        foreach ($dataKategoriLomba as $value) {
            KategoriLomba::create(['nama' => $value]);
        }

        return 'oke';
    }
}
