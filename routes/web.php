<?php

use App\Models\Pendonor;
use App\Models\Informasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\PesanpmiController;
use App\Http\Controllers\AdminhomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PendonorhomeController;
use App\Http\Controllers\PesandariPmiController;
use App\Http\Controllers\StokdarahPmiController;
use App\Http\Controllers\PesanpendonorController;
use App\Http\Controllers\PendonorprofileController;
use App\Http\Controllers\PesandariPendonorController;

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

// Route::get('/', function () {
//     return view('login.login');
// });
Route::middleware(['redirectIfAuthenticated'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'prosesLogin']);
});
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:web,pendonor', 'redirectIfPendonor', 'cekrole:admin,super admin'])->group(function () {
    Route::get('/home', [AdminhomeController::class, 'home'])->name('home');
    Route::resource('/pendonor', PendonorController::class);
    Route::resource('/profile', ProfileController::class);
    Route::put('/profile_update/{user:id}', [ProfileController::class, 'update_foto']);
    Route::put('/update_password/{user:id}', [ProfileController::class, 'update_password']);
    Route::get('/password/{user:id}', [ProfileController::class, 'password']);
    Route::resource('/pasien', PasienController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/stokdarahpmi', StokdarahPmiController::class);
    Route::resource('/admin_informasi', InformasiController::class);
    Route::get('/pesanan_pmi', [PesanpmiController::class, 'index']);
});
Route::middleware(['auth:web,pendonor', 'redirectIfAdmin', 'cekrole:pendonor'])->group(function () {
    Route::resource('/profile_pendonor', PendonorprofileController::class);
    Route::put('/profilependonor_update/{pendonor:id}', [PendonorprofileController::class, 'update_foto']);
    Route::get('/passwordpendonor/{pendonor:id}', [PendonorprofileController::class, 'password']);
    Route::put('/update_passwordpendonor/{pendonor:id}', [PendonorprofileController::class, 'update_password']);
    Route::get('/pendonor_home', [PendonorhomeController::class, 'pendonor_home'])->name('pendonor_home');
    Route::get('/pesanan_pendonor', [PesanpendonorController::class, 'index']);
});
Route::get('/', [GuestController::class, 'index']);
Route::get('/detail_informasi/{informasi:id}', [GuestController::class, 'detail_informasi']);
// Route::get('/guest_informasi', [GuestController::class, 'guest_infomasi']);
Route::resource('/pesan_pmi', PesandariPmiController::class);
Route::resource('/pesan_pendonor', PesandariPendonorController::class);
