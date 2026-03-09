<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 150000, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 450000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 180000, 'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 220000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 300000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 3500, 'jumlah' => 5],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 5500, 'jumlah' => 3],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 16000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 3500, 'jumlah' => 4],
            ['penjualan_id' => 4, 'barang_id' => 11, 'harga' => 7000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 12, 'harga' => 4000, 'jumlah' => 3],
            ['penjualan_id' => 5, 'barang_id' => 13, 'harga' => 2000000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 14, 'harga' => 1700000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 15, 'harga' => 450000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 4, 'harga' => 180000, 'jumlah' => 2],
            ['penjualan_id' => 6, 'barang_id' => 7, 'harga' => 3500, 'jumlah' => 10],
            ['penjualan_id' => 7, 'barang_id' => 2, 'harga' => 150000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 5, 'harga' => 220000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 8, 'harga' => 5500, 'jumlah' => 5],
            ['penjualan_id' => 8, 'barang_id' => 3, 'harga' => 450000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 6, 'harga' => 300000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 9, 'harga' => 16000, 'jumlah' => 4],
            ['penjualan_id' => 9, 'barang_id' => 10, 'harga' => 3500, 'jumlah' => 5],
            ['penjualan_id' => 9, 'barang_id' => 13, 'harga' => 2000000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 15, 'harga' => 450000, 'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 11, 'harga' => 7000, 'jumlah' => 6],
            ['penjualan_id' => 10, 'barang_id' => 12, 'harga' => 4000, 'jumlah' => 5],
            ['penjualan_id' => 10, 'barang_id' => 14, 'harga' => 1700000, 'jumlah' => 1],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
