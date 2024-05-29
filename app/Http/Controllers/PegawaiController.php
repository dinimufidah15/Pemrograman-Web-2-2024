<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PegawaiController extends Controller
{
    //
    public function index()
    {
       // shared data untuk layout diluar slot komponen layout
       $data_layout = [
            'title' => 'halaman admin',
       ];
       View::share($data_layout);
       // shared data ke view dalam slot layout
       return view('pegawai.index', ['username' => 'dini mufidah']);
    }
}
