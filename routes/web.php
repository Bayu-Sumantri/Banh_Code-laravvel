<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PotoController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengajarController;
use App\Models\Kelas;
use App\Models\Pengajar;

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
    return view('banhcode/plans');
});
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
Route::delete('/delete/{id}', [UserController::class,"destroy"])->name('delate.destroy');
Route::get('/edit_user/{id}', function (string $id) {
    $user=User::findOrFail($id);
    // return $user;
    return view('admin_master.side_admin.user_edit', compact('user'));
})->name('user.edit');




// create kelas
Route::resource('Kelas', 'App\Http\Controllers\KelasController');
Route::get('/kelas_create', function () {
    // $pengajar = Pengajar::findOrFail($id);
    $allpengajar = Pengajar::all();
    // return $episode;
    return view('admin.admin_sup.create_kelas', compact('allpengajar'));
})->name('kelas_create');
Route::get('/kelas', [KelasController::class,"create"])->name('kelas'); // halaman create menu saja





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








require __DIR__.'/auth.php';