@extends('layouts.layout')

@section('content')
<div class="container">
    <h3><b>Edit {{$project -> Project_name}}</b></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card-img">
                    <img  alt="{{$project -> Project_name}} / {{$project -> Date}}" class="img-fluid" src="/images/house.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{action ('ProjectController@update', ['id'=> $project -> _id])}}" method="POST">
                @csrf
                
                    <div class="form">
                        <div class="form-group">
                        <input type="hidden" id="projectid" name="projectid" value="{{$project -> _id}}">
                            <label for="Project_Name">Project Name:</label>
                            <input value="{{$project -> Project_name}}" type="text" class="form-control" id="Project_Name" name="Project_Name">
                        </div>
                        <div class="form-group">
                            <label for="Project_Chief">Project Chief:</label>
                            <input value="{{$project -> Chief}}" type="text" class="form-control" id="Project_Chief" name="Project_Chief">
                        </div>
                        <div class="form-group">
                            <label for="Project_Description">Project Description:</label>
                            <input value="{{$project -> Description}}" type="text" class="form-control" id="Project_Description" name="Project_Description">
                        </div>
                        <div class="form-group">
                            <label for="Project_Date">Project Date:</label>
                            <input value="{{$project -> Date}}" type="text" class="form-control" id="Project_Date" name="Project_Date">
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-secondary">Edit</button>
                            
                        </div>
                        <div class="col-sm-4">
                            <a href="{{route ('projectdelete',['id' => $project -> _id])}}" class="btn btn-danger">Delete Project</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/admin/projects/index" class="btn btn-secondary">Go back</a>
                        </div>
                    </div>
                </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection