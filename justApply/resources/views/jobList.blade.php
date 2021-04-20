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


    <form  action="/search" method="POST" class="form-inline">
    {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>




      <div class="card-deck">
        @foreach($job as $jobs)
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col">
                    <h5>{{$jobs->JobName}}</h5>
                </div>
                <div class="col">
                    <h5>{{$jobs->status}}</h5>
                </div>
              </div>
              <h4>{{$jobs->jobRole}}</h4>
              <a>{{$jobs->jobLink}}</a>
              <p>{{$jobs->jobInfo}}</p>
                    
                <div class="col">
                
                <form class="changeData" method="POST" action="/update">
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
      @endforeach
  </div>

  <div class="container">

      {{$job->links()}}
  </div>

</div>





    <link rel="stylesheet" href="{{asset('css/jobList.css')}}">


  </body>
</html>