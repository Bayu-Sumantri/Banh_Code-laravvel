<?php

use App\Http\Controllers\CetakResiController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PotoController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\TugasController;
use App\Models\Kelas;
use App\Models\Pembelian;
use App\Models\Pengajar;
use App\Models\Transaksi;
use App\Models\Tugas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/plans', function () {
    $kelas = Kelas::orderBy('namakelas', 'asc')->simplePaginate(3);
    
    return view('banhcode/plans', compact('kelas'));
})->name('plans');
Route::get('/dashboard', function () {
    $total_user = User::count();
    $total_kelas = Kelas::count();
    $total_pengajar = Pengajar::count();
    return view('admin.index', compact('total_user','total_kelas','total_pengajar'));
})->middleware(['auth', 'verified'])->name('dashboard');





Route::resource('items', 'ItemController');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


//user create
Route::resource('User', 'App\Http\Controllers\UserController');
Route::get('/user_list', function () {
    $user = User::orderBy('name', 'asc')->simplePaginate(10);
    
    return view('admin/admin_sup/user_crud/list_user', compact('user'));
})->name('user_list');
Route::get('/user_create', [UserController::class, 'index'])->name('user_create');
Route::patch('/user_update/{id}', [UserController::class, 'update'])->name('user_update');
Route::delete('/delete/{id}', [UserController::class,"destroy"])->name('delate.destroy');
Route::get('/edit_user/{id}', function (string $id) {
    $user=User::findOrFail($id);
    // return $user;
    return view('admin.admin_sup.user_crud.admin_edit_user', compact('user'));
})->name('edit_user');





// create kelas
Route::resource('Kelas', 'App\Http\Controllers\KelasController');
Route::get('/kelas_create', function () {
    // $pengajar = Pengajar::findOrFail($id);
    $allpengajar = Pengajar::all();
    // return $episode;
    return view('admin.admin_sup.create_kelas', compact('allpengajar'));
})->name('kelas_create');
Route::get('/kelas', [KelasController::class,"create"])->name('kelas'); // halaman create menu saja
Route::patch('/kelas_store', [KelasController::class,"store"])->name('kelas_store'); // halaman create store saja





// create pengajar
Route::resource('Pengajar', 'App\Http\Controllers\PengajarController');
Route::get('/pengajar_create', [PengajarController::class,"create"])->name('pengajar_create'); // halaman create menu saja



//myprofile user.admin.staff
Route::get('/profil', function () {
    return view('admin/user_sup/user_edit');
})->name('profil');
Route::resource('Poto', 'App\Http\Controllers\PotoController')->parameters(['Poto'  => 'user']);
Route::get('/profil_edit', function () {
    return view('admin/user_sup/user_edit');
})->name('admin.user.Myprofile');
Route::patch('/profile_update', [PotoController::class,"update"])->name('profile_update'); // halaman create menu saja



// create transaksi
Route::resource('Transaksi', 'App\Http\Controllers\TransaksiController');
Route::get('/Transaksi_menu', [TransaksiController::class,"index"])->name('Transaksi_menu'); // halaman create menu saja
Route::get('/Transaksi_kelas/{kelasID}', function (string $kelasID) {
    $kelas = Kelas::findOrFail($kelasID);
    $transaksi = Transaksi::all();
    // return $episode;
    return view('banhcode.transaksi_form', compact('kelas','transaksi'));
})->name('Transaksi_kelas');
Route::patch('/BuyKelas', [TransaksiController::class,"store"])->name('BuyKelas'); // halaman create Transaksi saja


// show pembelian
Route::resource('Pembelian', 'App\Http\Controllers\PembelianController');
Route::get('/pembelian_show', function () {
    // $pembelian = Pembelian::orderBy('userID', 'asc')->simplePaginate(10);
    $alltransaksi = Transaksi::all();
    // return $episode;
    return view('admin.user_sup.pembelian', compact('alltransaksi'));
})->name('pembelian_show');

Route::delete('/delete/{transaksiID}', [PembelianController::class,"destroy"])->name('delate_destroy');

//cetak ressi
Route::patch('/cetak_resi', [CetakResiController::class,"cetak_pdf"])->name('cetak_resi'); // halaman cetak Transaksi saja
Route::get('/resi_pembelian/{transaksiID}', function (string $transaksiID) {
    $transaksi = Transaksi::findOrFail($transaksiID);
    // $transaksi = Transaksi::all();
    // return $episode;
    return view('admin.user_sup.resi_pembelian', compact('transaksi'));
})->name('resi_pembelian');



// staff create tugas
Route::resource('Tugas', 'App\Http\Controllers\TugasController');
Route::get('/tugas_user', function () {
    // $pembelian = Pembelian::orderBy('userID', 'asc')->simplePaginate(10);
    $tugas = Tugas::all();
    // return $episode;
    return view('admin.user_sup.tugas', compact('tugas'));
})->name('tugas_user');

Route::get('/create_tugas', function () {
    // $pembelian = Pembelian::orderBy('userID', 'asc')->simplePaginate(10);
    $allpengajar = Pengajar::all();
    $alluser     = User::all();
    $allkelas    = Kelas::all();
    // return $episode;
    return view('admin.staff_sup.create_tugas', compact('allpengajar', 'alluser', 'allkelas'));
})->name('create_tugas');
Route::get('/tugas_create', [TugasController::class,"create"])->name('tugas_create'); // halaman create menu saja













require __DIR__.'/auth.php';