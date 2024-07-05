<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;

use App\Http\Controllers\LoginOrganisasi;
use App\Http\Controllers\LoginUser;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganisasiProfileController;
use App\Http\Controllers\OrganisasiJobController;


use App\Http\Controllers\DashboardUSerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileViewController;

use App\Http\Controllers\Pagejob;
use App\Http\Controllers\Pagetraining;
use App\Http\Controllers\Pageeknowledge;
use App\Http\Controllers\Pagevideo;

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







Route::get('/organisasi/login', [LoginOrganisasi::class, 'index'])->name('organisasi.login');
Route::post('/organisasi/actionlogin', [LoginOrganisasi::class, 'actionlogin'])->name('organisasi.actionlogin');
Route::get('/organisasi/daftar', [LoginOrganisasi::class, 'daftar'])->name('organisasi.daftar');
Route::post('/organisasi/actionregister', [LoginOrganisasi::class, 'postRegister'])->name('organisasi.register');

Route::prefix('/organisasi')->group(function ($route) {

   $route->get('/dashboard', [DashboardController::class, 'index'])->name('organisasi.dashboard');
   $route->get('/profile', [OrganisasiProfileController::class, 'index'])->name('organisasi.profile');

});


Route::get('/', [Homepage::class, 'index'])->name('/');




Route::get('/login', [LoginUser::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginUser::class, 'postLogin'])->name('user.actionlogin');
Route::get('/daftar', [LoginUser::class, 'daftar'])->name('user.daftar');
Route::post('/actionregister', [LoginUser::class, 'postRegister'])->name('user.register');
Route::get('/logout', [LoginUser::class, 'postLogout'])->name('user.logout');



Route::group(['prefix' => '/','middleware' => ['user','auth']], function($route) {



    $route->get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    $route->get('/profile', [ProfileController::class, 'index'])->name('user.profile');


    $route->get('/job', [Pagejob::class, 'index'])->name('job.index');
	   $route->get('/job/posting', [Pagejob::class, 'create'])->name('job.create');
    $route->get('/job/detail/{id}', [Pagejob::class, 'show'])->name('job.show');

    $route->get('/training', [Pagetraining::class, 'index'])->name('training.index');
	$route->get('/training/posting', [Pagetraining::class, 'create'])->name('training.create');
    $route->get('/training/detail/{name}', [Pagetraining::class, 'show'])->name('training.detail');

    $route->get('/e-knowledge', [Pageeknowledge::class, 'index'])->name('eknowledge.index');
    $route->get('/e-knowledge/posting', [Pageeknowledge::class, 'create'])->name('eknowledge.create');
    $route->get('/e-knowledge/detail/{id}', [Pageeknowledge::class, 'show'])->name('eknowledge.show');

    $route->get('/video', [Pagevideo::class, 'index'])->name('video.index');
});


Route::get('/{tipe}/{username}', [ProfileViewController::class, 'index'])->name('profile_view');
