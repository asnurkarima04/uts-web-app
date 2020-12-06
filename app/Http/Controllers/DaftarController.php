<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function add()
    {
        return view("daftar");
    }

    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ' :attribute minimal :min karakter',
            'max' => ' :attribute maksimal :max karakter',
            'email' => ' :attribute yang dimasukkan harus bereksetensi @gmail.com',
            'mimes' => ' :attribute yang dimasukkan harus berekstensi jpeg, bmp, png',
        ];

        $validasi = $request->validate([
            "first" => ["required"],
            "last" => ["required"],
            "username" => ["required", "min:8", "max:25"],
            "email" => ["required", 'email:rfc,dns'],
            "password" => ["required", "min:8"],
            "confirm" => ["required"],
            "picture" => ['required', 'mimes:jpeg,bmp,png']

        ], $messages);

        $name_file = time() . "." . $request->file("picture")->extension();
        $request->file("picture")->move(public_path(), $name_file);

        echo "<img src='/$name_file'>" . "<br>";
        echo "First Name : " . $request->get("first") . "<br>";
        echo "Last Name : " . $request->get("last") . "<br>";
        echo "Username : " . $request->get("username") . "<br>";
        echo "Email : " . $request->get("email") . "<br>";
        echo "Password : " . $request->get("password") . "<br>";
        echo "Confirmasi Password : " . $request->get("confirm") . "<br>";
    }
}
