

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/jobList">JobList</a>
        </li>
      </ul>
      <form action="/search" method="POST"  class="d-flex">
         {{ csrf_field() }}
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>
