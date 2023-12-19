@extends('layout/app')
@section('content')

    <div class="container mt-4">
        <div class="card-header">
            <h3>Update Student Info</h3>
        </div>
        <div class="card-body">
            <form action="{{route('student.update', $student->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="exampleInput" aria-describedby="Help" name= "name" value="{{$student->name}}">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Roll</label>
                    <input type="number" class="form-control" name="roll" value="{{$student->roll}}">
                </div>
                

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        
    </div>

@endsection