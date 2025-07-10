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
}
