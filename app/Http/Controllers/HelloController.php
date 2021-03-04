<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function read(){
        return view ('hello');
    }

    public function class(){
        $kelas = ['Pemrograman Web', 'Pemrograman Android', 'Pemrograman Dasar', 'Pemrograman Integrasi'];
        return view ('class', compact('kelas'));
    }

}
