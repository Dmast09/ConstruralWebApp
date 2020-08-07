@extends('layouts.layout')

@section('content')
    <div class="container">
    <h3><b>{{$project -> Project_name}} details</b></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card-img">
                    <img  alt="{{$project -> Project_name}} / {{$project -> Date}}" class="img-fluid" src="/images/house.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form">
                    <div class="form-group">
                        <label for="Project_Name">Project Name:</label>
                        <input disabled value="{{$project -> Project_name}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Project_Chief">Project Chief:</label>
                        <input disabled value="{{$project -> Chief}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Project_Description">Project Description:</label>
                        <input disabled value="{{$project -> Description}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Project_Date">Project Date:</label>
                        <input disabled value="{{$project -> Date}}" type="text" class="form-control">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/admin/projects/edit" class="btn btn-secondary">Edit Project</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{route ('projectdelete',['id' => $project -> _id])}}" class="btn btn-danger">Delete Project</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/admin/projects/index" class="btn btn-secondary">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection