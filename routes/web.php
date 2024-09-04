<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/login",[LoginController::class, "showLogin"])->name('login');
Route::post("/actionlogin",[LoginController::class, "actionLogin"])->name('actionLogin');
Route::get("/logout",[LoginController::class, "actionLogout"])->name('actionLogout');

Route::middleware('auth')->group(function () {
    Route::get("/", [DashboardController::class, "index"]);
    //jenis
    Route::get('/jenis', [JenisController::class,'index'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/jenis/tambah', [JenisController::class,'create'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/jenis/simpan', [JenisController::class,'store'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/jenis/{jenis}/edit', [JenisController::class,'edit'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/jenis/{jenis}/simpan', [JenisController::class,'update'])->middleware(RoleMiddleware::class . ':admin');

    //barang
    Route::get('/barang', [BarangController::class, 'index'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/barang/tambah', [BarangController::class, 'create'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/barang/simpan', [BarangController::class,'store'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/barang/{barang}/edit', [BarangController::class,'edit'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/barang/{barang}/update', [BarangController::class,'update'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/barang/{barang}/hapus', [BarangController::class,'destroy'])->middleware(RoleMiddleware::class . ':admin');

    //user
    Route::get('/user', [UserController::class,'index'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/user/tambah', [UserController::class,'create'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/user/simpan', [UserController::class,'store'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/user/{user}/edit', [UserController::class,'edit'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/user/{user}/update', [UserController::class,'update'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/user/{user}/hapus', [UserController::class,'destroy'])->middleware(RoleMiddleware::class . ':admin');

    //supplier
    Route::get('/supplier', [SupplierController::class,'index'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/supplier/tambah', [SupplierController::class,'create'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/supplier/simpan', [SupplierController::class,'store'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/supplier/{supplier}/edit', [SupplierController::class,'edit'])->middleware(RoleMiddleware::class . ':admin');
    Route::post('/supplier/{supplier}/update', [SupplierController::class,'update'])->middleware(RoleMiddleware::class . ':admin');
    Route::get('/supplier/{supplier}/hapus', [SupplierController::class,'destroy'])->middleware(RoleMiddleware::class . ':admin');

    //barangmasuk
    Route::get('/barangmasuk', [BarangMasukController::class,'index']);
    Route::get('/barangmasuk/tambah', [BarangMasukController::class,'create']);
    Route::post('/barangmasuk/simpan', [BarangMasukController::class,'store']);
    Route::get('/barangmasuk/{barangmasuk}/edit', [BarangMasukController::class,'edit']);
    Route::post('/barangmasuk/{barangmasuk}/update', [BarangMasukController::class,'update']);
    Route::get('/barangmasuk/{barangmasuk}/show', [BarangMasukController::class,'show']);
    Route::get('/barangmasuk/{barangmasuk}/hapus', [BarangMasukController::class,'destroy']);

    //barangkeluar
    Route::get('/barangkeluar', [BarangKeluarController::class,'index']);
    Route::get('/barangkeluar/tambah', [BarangKeluarController::class,'create']);
    Route::post('/barangkeluar/simpan', [BarangKeluarController::class,'store']);
    Route::get('/barangkeluar/{barangkeluar}/edit', [BarangKeluarController::class,'edit']);
    Route::get('/barangkeluar/{barangkeluar}/show', [BarangKeluarController::class,'show']);
    Route::post('/barangkeluar/{barangkeluar}/update', [BarangKeluarController::class,'update']);
    Route::get('/barangkeluar/{barangkeluar}/hapus', [BarangKeluarController::class,'destroy']);
});
