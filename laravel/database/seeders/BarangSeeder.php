<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Laptop Asus', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Mouse Logitech', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Keyboard Mechanical', 'harga_beli' => 300000, 'harga_jual' => 450000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Kemeja Flannel', 'harga_beli' => 120000, 'harga_jual' => 180000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG05', 'barang_nama' => 'Celana Chino', 'harga_beli' => 150000, 'harga_jual' => 220000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Jaket Denim', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG07', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG08', 'barang_nama' => 'Taro Snack', 'harga_beli' => 4000, 'harga_jual' => 5500],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG09', 'barang_nama' => 'Silverqueen', 'harga_beli' => 12000, 'harga_jual' => 16000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG10', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2000, 'harga_jual' => 3500],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG11', 'barang_nama' => 'Pocari Sweat', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG12', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG13', 'barang_nama' => 'Windows 10 Pro', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Microsoft Office', 'harga_beli' => 1200000, 'harga_jual' => 1700000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Antivirus Kaspersky', 'harga_beli' => 300000, 'harga_jual' => 450000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
