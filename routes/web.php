<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\UserContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'getIndex'])->name('home');

//buying
Route::get('/buying', [IndexController::class, 'getbuying']);

//how to buy
Route::get('/howtobuy', [IndexController::class, 'gethowtobuy']);

// private route

Route::get('/allUserBuying', [IndexController::class, 'getallUserBuying'])->middleware(['auth']);
Route::get('/allUserSelling', [IndexController::class, 'getallUserSelling'])->middleware(['auth']);

//Pending Orders
Route::get('/pendingOrders', [IndexController::class, 'getpendingOrders'])->middleware(['auth']);
//Admin
Route::get('/admin', [IndexController::class, 'getadmin'])->middleware(['auth']);

// get and edit profile
Route::get("/editProfile",[UserController::class,'getEditProfile'])->middleware(['auth']);
Route::post("/editProfile",[UserController::class,"postEditProfile"])->middleware(['auth'])->name('edit');
// POST get and edit
Route::get("/post",[PostController::class,'getPost'])->middleware(['auth']);
Route::post('/post', [PostController::class, 'postPost'])->middleware(['auth'])->name('post');

Route::get("/selling",[IndexController::class,'getselling']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

