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

    $id = Auth::id();
    $jobs= DB::table('jobs')->where('user_id', $id)->paginate(10);

    return view('jobList',[
        "job"=>$jobs
    ]);
});

Route::any('/search',function(Request $request){

    $id = Auth::id();

   $name = $request->input('search');

   $jobs= DB::table('jobs')->where('user_id', $id)->where('JobName', 'LIKE', '%' . $name . '%')->paginate(20);

   return view('jobList',[
       "job"=>$jobs
   ]);
});

Route::delete('/delete/',function(Request $request){

    $id = $request->input('deleteId');

    $jobs = DB::table('jobs')->where('id', $id)->delete();

    return redirect('jobList');
});

Route::put('/update',function(Request $request){

    $id = $request->input('update');

    $jobs = DB::table('jobs')->where('id', $id)->get();
    
    return view('update',[
       "job"=>$jobs,
       'id'=>$id
    ]);
});

Route::post('/updateStatus',function(Request $request){
    
    $id = $request->input('updateStatus');
    
    
    $data = $request->input('update');

   if($data === "waiting for reply" ){
       $status = 'waiting';

       $tableToUpdate = DB::table('jobs')->where('id', $id)->get();
       $getVal = $tableToUpdate[0]->status  = $status;

        DB::table('jobs')->where('id', $id)
        ->update(['status' => $getVal]);
        
        return redirect('/jobList');

   }else if($data ==="applied"){
       $status = 'applied';

       
       $tableToUpdate = DB::table('jobs')->where('id', $id)->get();
       $getVal = $tableToUpdate[0]->status  = $status;

        DB::table('jobs')->where('id', $id)
        ->update(['status' => $getVal]);
        
        return redirect('/jobList');
       
   }else if($data === "interview"){
        $status = $checkbox['interview'];

        
       $tableToUpdate = DB::table('jobs')->where('id', $id)->get();
       $getVal = $tableToUpdate[0]->status  = $status;

        DB::table('jobs')->where('id', $id)
        ->update(['status' => $getVal]);
        
        return redirect('/jobList');


   }else if($checkbox === "denied"){
        $status = $checkbox['denied'];

        
       $tableToUpdate = DB::table('jobs')->where('id', $id)->get();
       $getVal = $tableToUpdate[0]->status  = $status;

        DB::table('jobs')->where('id', $id)
        ->update(['status' => $getVal]);
        
        return redirect('/jobList');


   }else if($data === "hired"){
        $status = $checkbox['hired'];

        
       $tableToUpdate = DB::table('jobs')->where('id', $id)->get();
       $getVal = $tableToUpdate[0]->status  = $status;

        DB::table('jobs')->where('id', $id)
        ->update(['status' => $getVal]);
        
        return redirect('/jobList');
   }


   
    return view('update');
});



require __DIR__.'/auth.php';
