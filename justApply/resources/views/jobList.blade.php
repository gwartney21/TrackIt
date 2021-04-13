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
      @foreach($job as $jobs)
     
        <ul>
        <div class="col">
          <li>
            <h3>{{$jobs->JobName}}</h3>
            <h3>{{$jobs->jobRole}}</h3>
            <h3>{{$jobs->jobLink}}</h3>
            <h3>{{$jobs->jobInfo}}</h3>
          </li>
          </div>
        </ul>
  
      
      @endforeach

  </div>



    </div>





    <link rel="stylesheet" href="{{asset('css/index.css')}}">


  </body>
</html>