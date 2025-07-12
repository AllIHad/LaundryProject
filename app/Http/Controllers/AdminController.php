<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $pemesananBaru = Pemesanan::where('status', 'pending')->count();
        $pemesananProcess = Pemesanan::where('status', 'process')->count();
        $pemesananFinished = Pemesanan::where('status', 'finished')->count();
        $members = Membership::latest()->get();

        return view('adminPage.index', compact('pemesananBaru', 'pemesananProcess', 'pemesananFinished', 'members'));
    }

    public function daftarPesanan()
    {
        $pemesanan = Pemesanan::whereIn('status', ['pending', 'process'])->latest()->get();

        return view('adminPage.daftarPesanan', compact('pemesanan'));
    }

    public function pesananBaru()
    {
        return view('adminPage.pesananBaru');
    }

    public function recap()
    {
        $pesanans = Pemesanan::where('status', 'finished')
            ->whereMonth('created_at', 7) // 7 = July
            ->whereYear('created_at', 2025) // use current year
            ->latest()
            ->get();


        return view('adminPage.recap', compact('pesanans'));
    }

    public function edit($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        return view('adminPage.pesananBaru', compact('pesanan'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_pemesanan' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'jenis_layanan' => 'required|string|max:255',
            'berat' => 'required|numeric|min:0.1',
            'harga' => 'required|numeric|min:0',
        ]);

        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        $pesanan->update([
            'nama' => $request->nama,
            'jenis_pemesanan' => $request->jenis_pemesanan,
            'telp' => $request->telp,
            'jenis_layanan' => $request->jenis_layanan,
            'berat' => $request->berat,
            'total_harga' => $request->harga,
        ]);

        return redirect()->route('daftarPesanan');
    }

    public function approve($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->firstOrFail();

        $pesanan->update([
            'status' => 'Finished'
        ]);

        return redirect()->route('daftarPesanan');
    }

    public function delete($slug)
    {
        $pesanan = Pemesanan::where('id', $slug)->first();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $pesanan->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
