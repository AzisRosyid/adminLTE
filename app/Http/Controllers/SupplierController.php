<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function tampil_data()
    {
        // mengambil data dari tabel supplier
        $suppliers = Supplier::all();

        // mengirim data supplier ke tampil data
        return view('tampildata', ['suppliers' => $suppliers]);
    }


    public function tambah_data()
    {
        return view('tambahdata');
    }

    public function simpan_data(Request $request)
    {
        // insert data ke tabel supplier
        Supplier::create([
            's_no' => $request->s_no,
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        // alihkan halaman ke halaman tambah data
        return redirect('/supplier/tambah_data');
    }

    public function edit_data($id)
    {
        // mengambil data supplier berdasarkan id yang dipilih
        $supplier = Supplier::where('s_no', $id)->get();
        // passing data supplier yang didapat ke view edit.blade.php
        return view('editdata', ['supplier' => $supplier]);
    }


    // update data supplier
    public function update_data(Request $request)
    {
        // update data supplier
        Supplier::where('s_no', $request->s_no)->update([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        // alihkan halaman ke halaman tampul supplier
        return redirect('/supplier/tampil_data');
    }

    public function hapus_data($id)
    {
        // menghapus data supplier berdasarkan id yang dipilih
        Supplier::where('s_no', $id)->delete();

        // alihkan halaman ke halaman supplier
        return redirect('/supplier/tampil_data');
    }
}
