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
 

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="card updateCardBody p-5">
                              <div class="card-body">
                              <h1 class="text-white" text-align-center>Update Status</h1>
                                      <form class="changeData" method="POST" action="/updateStatus">
                                      @csrf
                                        <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="update" value="applied" id="defaultCheck1">
                                              <label class=" text-white form-check-label" for="defaultCheck1">
                                                applied
                                              </label>
                                        </div>

                                        <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="update" value="waiting for reply" id="defaultCheck1">
                                              <label class=" text-white form-check-label" for="defaultCheck1">
                                                  Waiting for Reply
                                              </label>
                                        </div>

                                        <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="update" value="interview" id="defaultCheck1">
                                              <label class=" text-white form-check-label" for="defaultCheck1">
                                                Interviewing
                                              </label>
                                        </div>

                                        
                                        <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="update" value="denied" id="defaultCheck1">
                                              <label class=" text-white form-check-label" for="defaultCheck1">
                                                Denied
                                              </label>
                                        </div>

                                        
                                        <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="update" value="hired" id="defaultCheck1">
                                              <label class=" text-white form-check-label" for="defaultCheck1">
                                                Hired
                                              </label>
                                        </div>
                                              <input name="updateStatus" value="{{$id}}" type="hidden" />
                                              <button class="btn btn-primary">Update Status</button>
                                          </form>
                                      </div>
                              </div>
                      </div>
              </div>
 






    <link rel="stylesheet" href="{{asset('css/index.css')}}">

  </body>
</html>