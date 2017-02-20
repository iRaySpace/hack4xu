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
              <a class="nav-link" href="{{ url('/students') }}">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/students/new') }}">Add Students <span class="sr-only">(current)</span></a>
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
          <h1><img src="{{ asset('img/add-users.png') }}" style="margin-right:10px;" width="90">Add Student</a></h1>
          <form method="POST" action="/students">

          {{ csrf_field() }}

  <div class="form-group">
    <label for="firstname1">First Name</label>
    <input type="text" class="form-control" id="firstname1" aria-describedby="firstName" placeholder="Enter Your First Name" name="fName">
    <h4 style="color:#fff;margin:none;font-size:5px;">[Separator]</h4>
    <label for="lastname1">Last Name</label>
    <input type="text" class="form-control" id="lastname1" aria-describedby="lastName" placeholder="Enter Your Last Name" name="lName">
    <small id="emailHelp" class="form-text text-muted">We'll be using this info to for all our SMS blast services.</small>
  </div>
  <div class="form-group">
    <label for="phonenumber1">Contact Number</label>
    <input type="text" class="form-control" id="phonenumber1" aria-describedby="phoneNumber" placeholder="Enter Your Phone Number" name="contNumber">
    <small id="emailHelp" class="form-text text-muted">Phone numbers should follow this format: <strong>09123456789</strong></small>
  </div>
  <div class="form-group">
    <label for="courseyear1">College</label>
    <select class="form-control" id="exampleSelect1" name="college">
      <option value="College of Computer Studies">College of Computer Studies</option>
      <option value="College of Engineering">College of Engineering</option>
      <option value="School of Business and Management">School of Business and Management</option>
      <option value="School of Education">School of Education</option>
      <option value="College of Agriculture">College of Agriculture</option>
      <option value="College of Arts and Sciences">College of Arts and Sciences</option>
    </select>
    <h4 style="color:#fff;margin:none;font-size:5px;">[Separator]</h4>
    <label for="courseandyear1">Course</label>
    <input type="text" class="form-control" id="courseandyear1" aria-describedby="courseYear" placeholder="Enter Your Course" name="course">
    <small id="emailHelp" class="form-text text-muted">Course input should follow this format: <strong>BSCS</strong></small>
  </div>
  <button type="submit" style="margin-bottom:20px;" class="btn btn-primary">Add Student</button>
</form>
        </main>
      </div>
    </div>