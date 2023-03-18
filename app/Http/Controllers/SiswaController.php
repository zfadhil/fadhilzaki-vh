<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function home(){
        return view('class.index');
    }
    
    public function materi(){
        return view('class.materi');
    }
    
    public function tugas(){
        return view('class.tugas');
    }
}
