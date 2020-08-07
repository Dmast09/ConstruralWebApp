@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <h3>Delete Project</h3>
                </p>
            </div>
        </div>
        <div class="container">
            <form action="{{action ('ProjectController@remove', ['id' => $project -> _id])}}" method="POST">
            @csrf
            @method("Delete")
                <input type="hidden" name="Project_id" value="{{$project -> _id}}">

                <div class="form-group">
                    <label for="Project_Name">Project Name:</label>
                    <input type="text" class="form-control" id="Project_Name" name="Project_Name" disabled value="{{$project -> Project_name}}">
                </div>
                <div class="form-group">
                    <label for="Project_Chief">Project Chief:</label>
                    <input type="text" class="form-control" id="Project_Chief" name="Project_Chief" disabled value="{{$project -> Chief}}">
                </div>
                <div class="form-group">
                    <label for="Project_Date">Date:</label>
                    <input type="text" class="form-control" id="Project_Date" name="Project_Date" disabled value="{{$project -> Date}}">
                </div>
                <div class="form-group">
                    <label for="Project_Description">Description:</label>
                    <input type="text" class="form-control" id="Project_Description" name="Project_Description" disabled value="{{$project -> Description}}">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2">
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <button onclick="location.href='/admin/projects/edit'" class="btn btn-warning" type="button">Edit</button>
                                <input onclick="location.href='/admin/projects/index'" type="button" class="btn btn-secondary" value="Go back">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection