
<div class="container">

   
  <div class="row">
    <div class="col">
    <h1 id="DashboardHeaderMain">Apply!</h2>

      <form action="/" method="POST" >

        @csrf
        <h2 id= dashboardHeader>Add jobs to apply to</h2>
        <div class="mb-3">
         
          <input type="text" class="form-control" id="exampleFormControlInput1" name="JobName" >
        
          <input type="text" class="form-control" id="exampleFormControlInput2" name="JobRole" placeholder="Job Role">
      
          <input type="text" class="form-control" id="exampleFormControlInput3" name="JobLink" placeholder="Job Link">
    
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"   name="JobInfo"style="resize: none;"></textarea>
     
         <button type="submit" value="Submit" class="btn btn-primary btn-lg">Submit</button>

         </div>
      </form>
   </div>

   
   
</div>

 
</div>





