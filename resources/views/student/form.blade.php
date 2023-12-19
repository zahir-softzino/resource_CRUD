@extends('layout/app')
@section('content')

    <div class="container mt-4">
                
        <div class="card-header">
            <h3>Student Create Form</h3>
        </div>
        <div class="card-body">
            <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="exampleInput" aria-describedby="Help" name= "name">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Roll</label>
                    <input type="number" class="form-control" name="roll">
                </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>



@endsection