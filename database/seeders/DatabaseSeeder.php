<?php

namespace Database\Seeders;

use App\Models\Membership;
use App\Models\Pemesanan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Aditya Prasetyo',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Leonza',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);

        Pemesanan::create([
            'user_id' => 2,
            'nama' => 'Ibadurrahman Al Hadi',
            'telp' => '2904300513',
            'email' => 'hadi@gmail.com',
            'alamat_penjemputan' => 'Jl. Pramuka',
            'jenis_pemesanan' => 'Layanan Sepatu',
            'jenis_layanan' => 'Biasa',
            'tanggal_penjemputan' => '2025-07-12',
            'jam_penjemputan' => '23:59:00',
            'pengiriman' => 'antar',
            'status' => 'Finished',
            'berat' => '2.30',
            'total_harga' => '15000.00',
        ]);

        Pemesanan::create([
            'user_id' => 2,
            'nama' => 'ibadurrahman al hadi',
            'telp' => '082390442675',
            'email' => 'ibadurrahman@gmail.com',
            'alamat_penjemputan' => 'JL. Garuda Sakti',
            'jenis_pemesanan' => 'Cuci Kering',
            'jenis_layanan' => 'Member',
            'tanggal_penjemputan' => '2025-07-14',
            'jam_penjemputan' => '16:46:00',
            'pengiriman' => 'antar',
            'status' => 'pending',
            'berat' => null,
            'total_harga' => null,
        ]);

        Membership::create([
            'user_id' => 2, 
            'nama' => 'Leonza',
            'email' => 'Leonza@gmail.com',
            'password' => Hash::make('29043005'),
            'member' => 50
        ]);
    }
}
