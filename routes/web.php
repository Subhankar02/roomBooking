<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SystemController::Class, 'indexView']);
Route::get('/booked/rooms', [SystemController::Class, 'bookedRoomsView']);
Route::post('/add/data', [SystemController::Class, 'bookRoom']);
