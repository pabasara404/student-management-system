<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <!-- <br>
    <h1>Student Management System</h1>
    <br>
    <hr> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

  @include("navbar")

  @if($layout == 'index')
    <div class="container-fluid mt-4">
        <section class="col">
            @include("studentslist")
        </section>
        <section class="col-md-5"></section>
    </div>
  @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <form action="{{url('/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE : </label>
                            <input name="cne" type="text" class="form-control"  id="Enter the CNE">
                        </div><br>
                        <div class="form-group">
                            <label>First Name : </label>
                            <input name="firstName" type="text" class="form-control"  id="Enter the first name">
                        </div><br>
                        <div class="form-group">
                            <label>Second Name : </label>
                            <input name="secondName" type="text" class="form-control  id="Enter the second name">
                        </div><br>
                        <div class="form-group">
                            <label>Age : </label>
                            <input name="age" type="text" class="form-control"  id="Enter the Age">
                        </div><br>
                        <div class="form-group">
                            <label>Speciality : </label>
                            <input name="speciality" type="text" class="form-control"  id="Enter the Speciality">
                        </div><br>
                        <input type="submit" value="Save" class="btn btn-info">
                        <input type="reset" value="Reset" class="btn btn-warning">
                    </form>
                </section>
            </div>
        </div>
  @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
  @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                <form action="{{url('/update/'.$student->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE : </label>
                            <input value="{{$student->cne}}" name="cne" type="text" class="form-control"  id="Enter the CNE">
                        </div><br>
                        <div class="form-group">
                            <label>First Name : </label>
                            <input name="firstName" value="{{$student->firstName}}" type="text" class="form-control"  id="Enter the first name">
                        </div><br>
                        <div class="form-group">
                            <label>Second Name : </label>
                            <input name="secondName" value="{{$student->secondName}}" type="text" class="form-control  id="Enter the second name">
                        </div><br>
                        <div class="form-group">
                            <label>Age : </label>
                            <input name="age" value="{{$student->age}}" type="text" class="form-control"  id="Enter the Age">
                        </div><br>
                        <div class="form-group">
                            <label>Speciality : </label>
                            <input name="speciality" value="{{$student->speciality}}" type="text" class="form-control"  id="Enter the Speciality">
                        </div><br>
                        <input type="submit" value="Update" class="btn btn-info">
                        <input type="reset" value="Reset" class="btn btn-warning">
                    </form>
                </section>
            </div>
        </div>
  @endif
  
  </html>
