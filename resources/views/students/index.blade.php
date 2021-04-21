@extends('students.layout')
@section('content')

<div class ="pull-left text-center">
    <h2>Student Name and Fee Entry In A Institute</h2>

</div>

<hr>

<div class ="row">
    <div class ="col-lg-12 margin-tb">
        <div class ="pull-right text-center">
            <a class ="btn btn-success" href="{{route('students.create') }}">Add New Student</a>
        </div>

    </div>
    
</div>

<div class="navbar navbar-light bg-light text-center">
  <form class="form-inline" type="get" action ="{{url('/search')}}">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
<hr>
<br>

@if($message = Session::get('success'))

<div class ="alert alert-success">
    <p>
        {{$message}}
    </p>
</div>

@endif

<!-- 
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>

    </div>
@endif -->


<table class ="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th width ="300px">Action</th>
    </tr>

    @foreach ($students as $student)

    <tr>
        <td> {{$student->id}}</td>
        <td> {{$student->studname}}</td>
        <td> {{$student->course}}</td>
        <td> {{$student->fee}}</td>

        <td>
            <form action="{{route('students.destroy',$student->id)}}" method ="POST">
                <a class="btn btn-info" href="{{route('students.show',$student->id)}}"> Show</a>
                <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}"> Edit</a>
                @csrf
                @method('DELETE')

                <button type= 'submit' class =" btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>


    @endforeach

    
</table>

<div class ="text-center">
    {{$students->links()}}
</div>



@endsection