<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kota;
use App\Kelas;

class MemberController extends Controller
{
    public function index()
    {
        $data['kota'] = Kota::all();
        $data['kelas'] = Kelas::all();
        return view('member.profile', $data);
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nama'          => $request['nama'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'kota_id'       => $request['kota_id'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'asal_sekolah'  => $request['asal_sekolah'],
            'kelas_id'      => $request['kelas_id'],
            'username'      => $request['username'],
            'password'      => $request['password'],
            'email'         => $request['email']
        ]);

        return redirect('/home')->with('OK', 'Welcome');
    }
}
