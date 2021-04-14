<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobsController;
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



Route::get('/dashboard', function(){
    return view('dashboard');
});


Route::get('/', [jobsController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::post('/', [jobsController::class,'store']);

Route::get('/jobList',function(){
     //Get list of jobs display on page pass to route   
   // $jobs = DB::table('jobs')->get();
    $id = Auth::id();
    $jobs= DB::table('jobs')->where('user_id', $id)->paginate(20);

    return view('jobList',[
        "job"=>$jobs
    ]);
});

Route::any('/search',function(Request $request){

   //$jobs= DB::table('jobs')->where('user_id', $id)->paginate(20);
   
   $name = $request->input('search');

   dd($name);

   return view('jobList');
});

require __DIR__.'/auth.php';
