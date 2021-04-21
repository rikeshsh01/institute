@extends('students.layout')

@section('content')

<hr>
<br>

<div class ="pull-left text-center">
    <h2>Student Singlepage</h2>

</div>

<div class ="pull-right">
    {{-- {{route('students.index')}} --}}
    <a class ="btn btn-primary" href="/students">Back</a>
</div>

<hr>
<br>

<table class ="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        
    </tr>

 

    <tr>
        <td> {{$student->id}}</td>
        <td> {{$student->studname}}</td>
        <td> {{$student->course}}</td>
        <td> {{$student->fee}}</td>
    </tr>



    
</table>


@endsection