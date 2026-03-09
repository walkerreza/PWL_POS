<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX001', 'tanggal_penjualan' => '2024-03-01', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Siti', 'penjualan_kode' => 'TRX002', 'tanggal_penjualan' => '2024-03-02', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Agus', 'penjualan_kode' => 'TRX003', 'tanggal_penjualan' => '2024-03-03', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Tini', 'penjualan_kode' => 'TRX004', 'tanggal_penjualan' => '2024-03-04', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Joko', 'penjualan_kode' => 'TRX005', 'tanggal_penjualan' => '2024-03-05', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Wati', 'penjualan_kode' => 'TRX006', 'tanggal_penjualan' => '2024-03-06', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Andi', 'penjualan_kode' => 'TRX007', 'tanggal_penjualan' => '2024-03-07', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Lina', 'penjualan_kode' => 'TRX008', 'tanggal_penjualan' => '2024-03-08', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Rudi', 'penjualan_kode' => 'TRX009', 'tanggal_penjualan' => '2024-03-09', 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'TRX010', 'tanggal_penjualan' => '2024-03-10', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
