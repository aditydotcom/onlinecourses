<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kelas;

class KelasController extends Controller
{
  public function kelas() 
    {
      $kelas = Kelas::lists('id_kelas', 'nama_kelas');
      return view('register')->compact('kelas');
      dd($kelas);
    }
    
    
}
