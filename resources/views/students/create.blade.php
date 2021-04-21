@extends('students.layout')
@section('content')

<div class ="row">
    <div class= "col-lg-12 margin-tb">
        <div class ="pull-left text-center">
            <h2>Add New Student</h2>
        </div>
        
        <div class ="pull-right">
            <a class ="btn btn-primary" href="/students">Back</a>
        </div>
        <hr>
        <br>
        <br>

    </div>
    </div>
@if($errors->any())

<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with ypur input <br><br>

    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    </ul>
</div>

@endif
<form action="/students" method ="POST">
@csrf

<div class ="row">
    <div class ="col-xs-12-sm-12 col-md-12">
        <div class="form-group">
            <strong>StudentName:</strong>
            <input type="text" name="studname" class="form-control" placeholder ="studname">
        </div>
    </div>



    <div class ="col-xs-12-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course:</strong>
            <input type="text" name="course" class="form-control" placeholder ="course">
        </div>
    </div>

    <div class ="col-xs-12-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee:</strong>
            <input type="text" name="fee" class="form-control" placeholder ="fee">
        </div>
    </div>



    <div class ="col-xs-12-sm-12 col-md-12 text-center">

        <button type="submit" class ="btn btn-primary">Submit</button>
    </div>

</div>
</form>

@endsection
