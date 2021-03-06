<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\UserContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

// admin => get order edit
Route::get('/edit-order', [IndexController::class, 'getEditOrder'])->middleware(['auth'])->name('edit-o');
Route::post('/edit-order', [IndexController::class, 'postEditOrder'])->middleware(['auth'])->name('edit-o');

// get selling
Route::get("/selling",[IndexController::class,'getselling'])->middleware(['auth']);

// cancel order
Route::get("/cancelorder", [IndexController::class, 'cancelOrder'])->middleware(['auth'])->name('cancel');

// cancel selling
Route::get('/cancelsell', [IndexController::class, 'cancelsell'])->middleware(['auth'])->name('cancelsell');
Route::get('/cancelselladmin', [IndexController::class, 'cancelselladmin'])->middleware(['auth'])->name('cancelselladmin');
//buying
Route::get('/buying', [IndexController::class, 'getbuying'])->middleware(['auth']);

// saving buy data
Route::get('/buynow', [IndexController::class, 'saveBuyData'])->middleware(['auth']);


//how to buy
Route::get('/howtobuy', [IndexController::class, 'gethowtobuy'])->middleware(['auth']);

Route::get('/lol', function(Request $request) {
    echo Route::getFacadeRoot()->current()->uri();
})->name('hunter');

/**
 * private route
 *
 */

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

