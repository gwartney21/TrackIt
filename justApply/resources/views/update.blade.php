<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    

    
  <x-navbar/>


<div class="container">

  <div class="row">

  <div class="col">
    <div class="card">
            <div class="card-body">
              <form class="changeData" method="POST" action="/updateStatus">
              @csrf
                <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="update" value="applied" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         applied
                      </label>
                </div>

                <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="update" value="waiting for reply" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                          Waiting for Reply
                      </label>
                </div>

                <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="update" value="interview" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Interviewing
                      </label>
                 </div>

                 
                <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="update" value="denied" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Denied
                      </label>
                 </div>

                 
                <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="update" value="hired" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                         Hired
                      </label>
                 </div>
                      <input name="updateStatus" value="{{$id}}" type="hidden" />
                      <button class="btn btn-primary">Update Status</button>
                  </form>
              </div>
    </div>
  </div>


    <div class="col">

        @foreach($job as $jobs)
          <div class="card">
            <div class="card-body">
             
              <div class="row">
                <div class="col">
                    <h5>{{$jobs->JobName}}</h5>
                </div>
                <div class="col status">
                    <h5>{{$jobs->status}}</h5>
                </div>
              </div>
              <h4>{{$jobs->jobRole}}</h4>
              <a href="{{$jobs->jobLink}}">{{$jobs->jobLink}}</a>
              <p>{{$jobs->jobInfo}}</p>
            @endforeach
         
    </div>

    </div>



  </div>

</div>





    <link rel="stylesheet" href="{{asset('css/update.css')}}">

  </body>
</html>