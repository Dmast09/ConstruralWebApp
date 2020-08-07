@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($projects as $project)
                        <a class="dropdown-item" value="{{$project -> Project_name}}" href="#">{{$project -> Project_name}}</a>
                    @endforeach    
                    </div>

                    <div class="container">
                        <div class="row">
                        @foreach($workers as $worker)
                            <label for="">{{$worker -> Name}}</label>
                        @endforeach
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>

@endsection
