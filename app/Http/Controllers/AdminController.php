<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('adminPage.index');
    }

    public function daftarPesanan(){
        return view('adminPage.daftarPesanan');
    }

    public function pesananBaru(){
        return view('adminPage.pesananBaru');
    }

    public function recap(){
        return view('adminPage.recap');
    }
}
