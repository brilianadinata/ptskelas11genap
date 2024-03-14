<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerhitungController extends Controller
{
    public function hitung() {
        $bil1=5;
        $bil2=10;
        $hasil = $bil1+$bil2;
        return view('hitung', ['hasiljumlah' =>$hasil]);
    }
}
