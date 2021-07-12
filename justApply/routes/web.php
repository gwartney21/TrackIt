<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\joblistController;
use Illuminate\Support\Facades\Auth;
use App\Models\jobs;
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



Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/', [jobsController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::post('/', [jobsController::class,'store']);

Route::get('/jobList',[joblistController::class,'index']);
  
Route::any('/search',[joblistController::class,'search']);

Route::delete('/delete',[joblistController::class,'delete']);

Route::get('/update',[joblistController::class,'update']);


Route::post('/updateStatus',[joblistController::class,'updateList']);



require __DIR__.'/auth.php';
