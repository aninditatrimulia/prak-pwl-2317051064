<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "") {
        // Kalau nama semua huruf kecil → pecah per kata (contoh: aninditatrimulia -> Anindita Tri Mulia)
        if (ctype_lower($nama)) {
    // Sisipkan spasi khusus sebelum kata "tri"
    $namaFormatted = preg_replace('/(tri)/i', ' $1 ', $nama);
    // Rapikan spasi berlebih + kapital tiap kata
    $namaFormatted = ucwords(trim(preg_replace('/\s+/', ' ', $namaFormatted)));
    } else {
    $namaFormatted = ucwords(preg_replace('/(?<!\ )[A-Z]/', ' $0', $nama));
    }

        $data = [
            'nama' => $namaFormatted, 
            'npm' => $npm,
            'kelas' => ucwords(str_replace('-', ' ', $kelas)),
        ];

        return view('profile', $data);
    }
}
