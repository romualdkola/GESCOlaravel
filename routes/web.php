<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    return redirect()->route('home');;
});

Route::get('/', [App\Http\Controllers\ConnectController::class, 'index'])->name('home');
Route::post('/login', [App\Http\Controllers\ConnectController::class, 'Login'])->name('login.users');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'Register'])->name('register.users');
Route::get('/view-register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/Admin', [App\Http\Controllers\VerificationController::class,'index'])->name('Admin.index');
    Route::get('/profil_utilisateurs', [App\Http\Controllers\VerificationController::class,'profilsUsers'])->name('Admin.profilsUsers');
    Route::get('/permissions_utilisateurs', [App\Http\Controllers\VerificationController::class,'permissionsUsers'])->name('Admin.permissionsUsers');
    Route::get('/Utilisateurs', [App\Http\Controllers\VerificationController::class,'usersView'])->name('Admin.usersView');
    Route::get('/Admin/users/{id}/status', [App\Http\Controllers\ConnectController::class, 'ActiveDesactive'])->name('Active.Desactive');
    Route::get('/Admin/users/{id}/show', [App\Http\Controllers\VerificationController::class,'show'])->name('Admin.profilsUsersView');


    /**Enseignant routes**/
    Route::get('/Enseignant/index', [App\Http\Controllers\EnseignantController::class,'index'])->name('Enseigne.index');
    //Route::get('/rolesView/{id}/profilUsers', [App\Http\Controllers\VerificationController::class,'profilsUsersView'])->name('Admin.profilsUsersView');

    /**Enseignant routes**/
    Route::get('/Elèves/index', [App\Http\Controllers\EleveController::class,'index'])->name('Eleve.index');

    Route::get('/logout', [App\Http\Controllers\ConnectController::class, 'logout'])->name('logout');


});
