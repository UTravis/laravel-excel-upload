<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

    $users = User::all();

    return view('upload', compact('users'));
});


Route::post('/import', [UserController::class, 'import'])->name('students.upload');
Route::get('/export', [UserController::class, 'export'])->name('students.export');
