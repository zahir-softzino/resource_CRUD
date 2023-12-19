@extends('layout/app')
@section('content')

    <div class="container mt-4">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <b>{{session()->get('success')}}</b>
            </div>
        @endif
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-8">
                        <h3>student Table</h3>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('student.create')}}" class="btn btn-primary float-end">Add new student</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($students as $key => $student)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll}}</td>
                                <td>
                                    <a href="{{route('student.show',$student->id)}}" class="btn btn-primary">Show</a>
                                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-secondary">Edit</a>
                                    <!-- <a href="{{route('student.destroy',$student->id)}}" class="btn btn-danger">Delete</a> -->
                                    <form action="{{route('student.destroy',$student->id)}}" method="post" style="display: inline">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>


@endsection



<!-- data type, control flow, scope, closer,  -->