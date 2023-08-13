<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Models\User;
use App\Http\Controllers\Frontend\IndexController;
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



Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

//Route pour se conecter a la base de données Admin
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function() {
        return view('admin.index');
    })->name('admin.dashboard');

//Toutes les autres routes de la partir admin
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileSore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');




//User All Routes
//Route Pour se connecter à la base données client
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function() {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('dashboard', compact('user'));
    })->name('dashboard');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');
Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');

