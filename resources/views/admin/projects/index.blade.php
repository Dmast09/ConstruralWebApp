@extends('layouts.layout')

@section('content')


<div class="card-header">
    <h4>
        List of Projects
    </h4>
</div>
 <div class="card-body">
    <div class="d-flex flex-column">

        <!-- <a href="/admin/projects/create" class="p-2">Create Project</a> -->

        <div class="container-md">
        <div class="conatiner">
            <div class="row">
                <div class="col-sm-6">
                 
                    <a class="btn btn-secondary" href="/admin/projects/create" class="" >Create new project</a>
                   
                </div>
            </div>
        </div>

        <br>
        <div class="container-md">
        <table class="table table-striped">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Chief</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> <?php $no=1; ?>
                @foreach($projects as $pro)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$pro -> Project_name}}</td>
                    <td>{{$pro -> Date}}</td>
                    <td>{{$pro -> Chief}}</td> 
                    <td>{{$pro -> Description}}</td> 
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                <a href="/admin/projects/edit/{{$pro -> _id}}" class="btn btn-warning btn-sm">Edit</a>
                                </div>
                                <div class="col-sm-4">
                                <a href="/admin/projects/delete/{{$pro -> _id}}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                                <div class="col-sm-4">
                                <a href="/admin/projects/details/{{$pro -> _id }}" class="btn btn-secondary btn-sm">Details</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </td>
                </tr>
                <?php $no++; ?>
               @endforeach
            </tbody>
        </table>
        </div>
    </div>
 </div>
@endsection
