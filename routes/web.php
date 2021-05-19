<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
require __DIR__.'/auth.php';

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
    return view('welcome');
});
//Route::resource('order','OrderController');

Route::post('order/mo',[OrderController::class,'myOrders']);//mo = My Orders
Route::get('order/mo/{contact}',[OrderController::class,'myOrdersDelReturn']);//This place to return after delete

Route::get('order/gmo',[OrderController::class,'getMyOrders']);//gmo = Get My Orders

Route::resource('order', OrderController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

