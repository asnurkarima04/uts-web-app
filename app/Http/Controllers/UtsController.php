<?php

namespace App\Http\Controllers;

class UtsController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function course()
    {
        return view("course");
    }

    public function instructor()
    {
        return view("instructor");
    }
}
