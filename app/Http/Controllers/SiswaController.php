<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $profile = DB::table('table')->get();
        return view('data_siswa.indexdatasiswa');
    }

    public function tambahdatasiswa()
    {
        return view('data_siswa.tambahdatasiswa');
    }

    public function pelanggan(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);
    
        DB::table('profile')->insert([
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);
    
        return redirect('/pelanggan');
    }
}
?>