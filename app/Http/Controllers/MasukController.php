<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function add()
    {
        return view("masuk");
    }

    public function proses(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
            'email:rfc,dns' => 'harus memasukkan alamat :attribute yang valid',
            'min' => ' :attribute minimal :min karakter'
        ];

        $validasi = $request->validate([
            "email" => ['required', 'email:rfc,dns'],
            "password" => ['required', 'min:8']
        ],  $messages);

        echo "Email : " . $request->get("email") . "<br>";
        echo "Password : " . $request->get("password") . "<br>";
    }
}
