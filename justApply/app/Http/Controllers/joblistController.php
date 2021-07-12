<?php

namespace App\Http\Controllers;
use App\Models\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class joblistController extends Controller
{

    function index(){
        $id =  Auth::id();
        $jobs= jobs::where('user_id', $id)->paginate(10);
    
        return view('jobList',[
            "job"=>$jobs
        ]);
    }

    function search(Request $request){
        $id = Auth::id();

        $name = $request->input('search');
     
        $jobs= jobs::where('user_id', $id)->where('JobName', 'LIKE', '%' . $name . '%')->paginate(20);
     
        return view('jobList',[
            "job"=>$jobs
        ]);
    }

    function delete(Request $request){
        $id = $request->input('deleteId');

        $jobs = jobs::where('id', $id)->delete();
    
        return redirect('jobList');
    }
    
    //Get the page to update the specific job
    function update(Request $request){
        
        $id = $request->input('update');

    $jobs = jobs::where('id', $id)->get();
    
    return view('update',[
       "job"=>$jobs,
       'id'=>$id
    ]);
    }

    function updateList(Request $request){
        $id = $request->input('updateStatus');
    
    
        $data = $request->input('update');
    
       if($data === "waiting for reply" ){
           $status = 'waiting';
    
           $tableToUpdate = jobs::where('id', $id)->get();
           $getVal = $tableToUpdate[0]->status  = $status;
    
            jobs::where('id', $id)
            ->update(['status' => $getVal]);
            
            return redirect('/jobList');
    
       }else if($data ==="applied"){
           $status = 'applied';
    
           
           $tableToUpdate = jobs::where('id', $id)->get();
           $getVal = $tableToUpdate[0]->status  = $status;
    
            jobs::where('id', $id)
            ->update(['status' => $getVal]);
            
            return redirect('/jobList');
           
       }else if($data === "interview"){
            $status = 'interview';
    
            
           $tableToUpdate = jobs::where('id', $id)->get();
           $getVal = $tableToUpdate[0]->status  = $status;
    
            jobs::where('id', $id)
            ->update(['status' => $getVal]);
            
            return redirect('/jobList');
    
    
       }else if($data === "denied"){
            $status =  'denied';
    
            
           $tableToUpdate =jobs::where('id', $id)->get();
           $getVal = $tableToUpdate[0]->status  = $status;
    
            jobs::where('id', $id)
            ->update(['status' => $getVal]);
            
            return redirect('/jobList');
    
    
       }else if($data === "hired"){
            $status = 'hired';
    
            $tableToUpdate = jobs::where('id', $id)->get();
            $getVal = $tableToUpdate[0]->status  = $status;
     
             jobs::where('id', $id)
             ->update(['status' => $getVal]);
            
            return redirect('/jobList');
       }
    
    
       
        return view('update');
    }
}
