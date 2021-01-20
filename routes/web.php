<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Student;
use App\Http\Controllers\StudentController;
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


Route::get('/student', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'create']);
Route::get('/dashboard/{id}', [StudentController::class, 'destroy']);

Route::get('/dashboard', function (Request $request) {

    $students = Student::all();

    return view('dashboard', ['students'=>$students] );



})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
