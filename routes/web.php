<?php
use App\Http\Controllers\TodoTaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//     return view('basic');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [TodoTaskController::class, 'index'])->name('basic');

Route::post('/', [TodoTaskController::class, 'tambah']);

Route::delete('/{task}', [TodoTaskController::class, 'destroy']);
    
