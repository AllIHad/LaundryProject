<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaundryController extends Controller
{
    public function landingPage()
    {
        return view('welcome');
    }

    public function katalogPage()
    {
        return view('laundry.katalog');
    }

    public function kontak_pemesananPage()
    {
        return view('laundry.kontak_pemesanan');
    }

    public function daftarmemberPage()
    {
        return view('laundry.daftar_member');
    }

    public function konfirmasipesananPage()
    {
        return view('laundry.konfirmasi_pemesanan');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'email' => 'required|email',
            'alamat_penjemputan' => 'required|string|max:255',
            'jenis_pemesanan' => 'required|in:Cuci Setrika,Cuci Kering,Setrika Saja,Layanan Sepatu,Layanan Tas',
            'jenis_layanan' => 'required|in:Biasa,Express,Member',
            'tanggal_penjemputan' => 'required|date',
            'jam_penjemputan' => 'required|date_format:H:i',
            'pengiriman' => 'required|in:antar,ambil',
        ]);

        $validated['user_id'] = Auth::id();

        Pemesanan::create($validated);

        return redirect()->route('konfirmasi_pesananPage')->with('success', 'Your order is successfully placed');
    }

    public function memberStore(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'member' => 'required|in:30kg,50kg',
        ], [
            'required' => ':attribute is required',
            'email' => 'Email is not  valid',
            'unique' => 'Email is already registered',
            'confirmed' => 'Confirm password does not match',
            'min' => 'Minimum Password: min 8 characters.',
        ]);

        $validated['user_id'] = Auth::id();

        Membership::create($validated);

        return redirect()->route('landingPage')->with('success', 'Member registration successful!');
    }
}
