<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function landingPage(){
        return view ('welcome');
    }

    public function katalogPage(){
        return view ('laundry.katalog');
    }

    public function kontak_pemesananPage(){
        return view ('laundry.kontak_pemesanan');
    }

    public function daftarmemberPage(){
        return view ('laundry.daftar_member');
    }

    public function konfirmasipesananPage(){
        return view ('laundry.konfirmasi_pemesanan');
    }
}
