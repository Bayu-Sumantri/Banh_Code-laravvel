<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengajarController;

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
    return view('admin.index');
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




// create pengajar
Route::resource('Pengajar', 'App\Http\Controllers\PengajarController');
Route::get('/pengajar_create', [PengajarController::class,"create"])->name('pengajar_create'); // halaman create menu saja







require __DIR__.'/auth.php';