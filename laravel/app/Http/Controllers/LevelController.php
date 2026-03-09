<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level (level_kode, level_nama,created_at) values (?,?,?)', ['customer', 'pelanggan', now()]);

        // return "insert data baru berhasil";
    
    //     $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'customer']);
    // return "update data berhasil. jumlah barre yang diupdate: " . $row. 'baris';
    
    // $row = DB::delete('delete from m_level where level_kode = ?', ['customer    ']);
    // return "delete data berhasil. jumlah baris yang dihapus: " . $row . 'baris';
    
    
    $data = DB::select('select * from m_level');
    return view ('level', ['data' => $data]);

    
    
    
    
    }
}
