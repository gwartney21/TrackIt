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


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($job as $jobs)
        <div class="col-md-4">
          <div class="card mt-3 mb-3 shadow-sm">
  
            <div class="card-body updateCardBody">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="text-white card-text">{{$jobs->JobName}}</h5>
                <p class="bg-light text-dark card-text">{{$jobs->status}}</p>
              </div>
              <h4 class="text-white">{{$jobs->jobRole}}</h4>
              <a href="{{$jobs->jobLink}}">{{$jobs->jobLink}}</a>
              <p class="text-white">{{$jobs->jobInfo}}</p>
              <div class="d-flex justify-content-between align-items-center">
                
                <div class="btn-group">
                    <form class="changeData" action="/update">
                                  @csrf
                                  @method('PUT')
                        <input name="update" value="{{$jobs->id}}" type="hidden" />
                        <button class="btn btn-primary " type="submit">Update</button>
                    </form>  

                    <form class="changeData" method="POST" action="/delete">
                              @csrf
                              @method('delete')
                              <input name="deleteId" value="{{$jobs->id}}" type="hidden" />
                              <button class="btn btn-primary " type="submit">delete</button>
                           </form>
                           
                </div>
              </div>
            </div>
          </div>
        </div>

      @endforeach
    </div>
  </div>



  <div class="container">

      {{$job->links()}}
  </div>

</div>





    <link rel="stylesheet" href="{{asset('css/jobList.css')}}">


  </body>
</html>