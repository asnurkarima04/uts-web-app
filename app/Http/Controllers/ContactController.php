<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function add()
    {
        return view("contact");
    }
    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute harus diisi :min karakter',
            'numeric' => ':attribute harus diisi angka atau nomor'
        ];

        $validasi = $request->validate([
            "name" => ["required"],
            "email" => ["required", 'email:rfc,dns'],
            "subject" => ["required"],
            "phone" => ["required", "numeric"],
            "message" => ["required", "min:10"],
        ], $messages);

        echo "Name : " . $request->get("name") . "<br>";
        echo "Email : " . $request->get("email") . "<br>";
        echo "Subject : " . $request->get("subject") . "<br>";
        echo "Phone : " . $request->get("phone") . "<br>";
        echo "Message : " . $request->get("message") . "<br>";
    }
}
