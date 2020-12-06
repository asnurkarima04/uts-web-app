<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", [UtsController::class, "home"])->name("home");
Route::get("/about", [UtsController::class, "about"])->name("about");
Route::get("/course", [UtsController::class, "course"])->name("course");
Route::get("/instructor", [UtsController::class, "instructor"])->name("instructor");

Route::get("/contact/add", [ContactController::class, "add"])->name("contact_add");
Route::post("/contact/proses", [ContactController::class, "proses"])->name("contact_proses");

Route::get("/masuk/add", [MasukController::class, "add"])->name("masuk_add");
Route::post("/masuk/proses", [MasukController::class, "proses"])->name("masuk_proses");

Route::get("/daftar/add", [DaftarController::class, "add"])->name("daftar_add");
Route::post("/daftar/proses", [DaftarController::class, "proses"])->name("daftar_proses");
