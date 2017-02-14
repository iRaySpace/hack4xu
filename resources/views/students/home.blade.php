@extends('layouts.sample')

@section('content')
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" style="margin-top:-5px;margin-right:5px;" width="50"/>SMS Blaster</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search SMS Blaster">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/students') }}">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/students/new') }}">Add Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://10.0.1.135/hackforxu/sms-blaster/blast.php">Start Blasting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Update List</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Status</a>
            </li>
          </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1><img src="/img/dash.png" style="margin-right:10px;" width="90"/>Overview</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <a href="#"><img src="/img/send.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><strong>Blast</strong></h4>
              <div class="text-muted">Start SMS blast to the student list</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
                <a href="#"><img src="/img/list.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><strong>View</strong></h4>
              <span class="text-muted">Check the current student list</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
                <a href="#"><img src="/img/status.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><strong>Status</strong></h4>
              <span class="text-muted">Check the current SMS blast status</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
                <a href="#"><img src="/img/add-users.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"></a>
              <h4><strong>Add</strong></h4>
              <span class="text-muted">Add a new student into the list.</span>
            </div>
          </section>

          <h2><strong>Student List</strong></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Student No.</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Course and Year</th>
                  <th>Contact No.</th>
                </tr>
              </thead>
              <tbody>
              @foreach($students as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->lname }}</td>
                  <td>{{ $student->fname }}</td>
                  <td>{{ $student->course }}</td>
                  <td>{{ $student->cont_number }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
