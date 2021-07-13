

    <h1 class="text-center text-white">Apply!</h2>
    <h2 class="text-center text-white">Add jobs to apply to</h2>
      <form action="/" method="POST" >

        @csrf
        
        <div class="form-group row formInput">
         
          <input type="text" class="mb-2 form-control" id="exampleFormControlInput1" name="JobName" >
        
          <input type="text" class="mb-2 form-control" id="exampleFormControlInput2" name="JobRole" placeholder="Job Role">
      
          <input type="text" class="mb-2 form-control" id="exampleFormControlInput3" name="JobLink" placeholder="Job Link">
    
          <textarea class="mb-2 form-control" id="exampleFormControlTextarea1" rows="10"   name="JobInfo"style="resize: none;"></textarea>
     
         <button type="submit" value="Submit" class="btn btn-primary btn-lg">Submit</button>

         </div>
      </form>





