<div class="card mb-3">
    <!-- <img src="/home/pabasara/Videos/TUTORIALS/Practicals/sms/resources/css/1.jpg" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">List of Students</h5>
        <p class="card-text">You can find here all the information about students in the system.</p>
    </div> -->


<table class="table table-striped table-hover">
    <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a> -->
       </td>      
    </tr>
    @endforeach
    </table>
    </div>