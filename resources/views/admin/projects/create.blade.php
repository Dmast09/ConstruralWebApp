@extends('layouts.layout')

@section('content')

    <div class="container-md">
        
        <form action="/admin/projects/create" method="POST">
            @csrf
            <div class="container">
                <div class="row"><h4>Create Project</h4></div>
            </div>
                <div class="form-group">
                    <label for="ProjectName">Project Name</label>
                    <input id="Project_Name" name="Project_Name" type="text" placeholder="Project Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Date">Project Date</label>
                    <input id="Project_Date" name="Project_Date" type="Date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Project_Chief">Project Chief</label>
                    <input id="Project_Chief" name="Project_Chief" type="text" placeholder="Project Chief" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea name="Project_Description" id="Project_Description" cols="" rows="5" placeholder="Project Description" class="form-control"></textarea>
                    
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="/admin/projects/index" class="btn btn-secondary">Go back</a>
                </div>
            
         </form>
        
    </div>

@endsection