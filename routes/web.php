<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[PageController::class,'showHome']);
Route::get('/photo',[PageController::class,'showPhoto']);
Route::get('/studentform',[PageController::class,'showStudent']);
Route::view('store','studentform');

Route::post('store',[PageController::class,'store']);



Route::get('/contact',[PageController::class,'showContact']);
Route::get('/reg',[PageController::class,'showsign']);
Route::get('/login',[PageController::class,'showLog']);
// Route::get('/studentview',[PageController::class,'studentview']);


Route::get('/display', [PageController::class,'showList']);
Route::get('/studentView/{viewid}', [PageController::class,'showStudentView']);
Route::get('/studentEdit/{editid}', [PageController::class,'showStudentEdit']);

Route::get('/studentEdit', [PageController::class, 'showStudentEdit']);
Route::get('/studentDelete', [PageController::class, 'showStudentDelete']);
Route::get('/studentform', [PageController::class,'district']);
Route::post('/Thana', [PageController::class,'getThana']);
Route::put('/updateStudent/{editid}',[PageController::class,'update']);


