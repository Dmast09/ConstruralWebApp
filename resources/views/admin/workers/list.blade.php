@extends('layouts.layout')

@section('content')

<div class="container-md">
        <table class="table table-striped">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Profession</th>
                    <th>Experience</th>
                    <th>Description</th>
                    <th style="text-align: center;" >Action</th>
                </tr>
            </thead>
            <tbody> <?php $no=1; ?>
                @foreach($workers as $worker)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$worker -> Name}}</td>
                    <td>{{$worker -> Last_name}}</td>
                    <td>{{$worker -> Profession}}</td> 
                    <td>{{$worker -> Experience}} years</td> 
                    <td>{{$worker -> Description}}</td> 
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                </div>
                                <div class="col-sm-3">
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                                <div class="col-sm-3">
                                <a href="#" class="btn btn-secondary btn-sm">Details</a>
                                </div>
                                <div class="col-sm-3">
                                <a href="#" class="btn btn-secondary btn-sm">Profile</a>
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
@endsection