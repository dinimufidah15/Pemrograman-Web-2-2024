<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelurahan;

class KelurahanController extends Controller
{
    public function index (){
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan', compact('list_kelurahan'));
    }
}
