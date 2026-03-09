<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SPL1', 'supplier_nama' => 'PT Sumber Makmur'],
            ['supplier_id' => 2, 'supplier_kode' => 'SPL2', 'supplier_nama' => 'CV Maju Jaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SPL3', 'supplier_nama' => 'Toko Laris'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
