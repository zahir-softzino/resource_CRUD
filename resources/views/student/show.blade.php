@extends('layout/app')
@section('content')

    <div class="container mt-4">
        <div class="card-header">
            <h3>Student Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">Name: </div>
                <div class="col-md-10">{{$student->name}}</div>
            </div>
            <div class="row">
                <div class="col-md-2">Roll: </div>
                <div class="col-md-10">{{$student->roll}}</div>
            </div>
        </div>
    </div>

@endsection