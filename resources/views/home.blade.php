@extends('layouts.layout')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" width="620" height="480">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/house.jpg" alt="First slide" width="620" height="480">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/casa3.jpg" alt="Second slide" width="620" height="480">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <br>
            <br>

            <div class="container">
                <div >
                    <div class="d-flex justify-content-between" >
                        <h3 class="text-center">Recent Works</h3>  
                        
                        <a href="/admin/projects/index">
                            <h3>List of Projects</h3>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Aqui estan los tres card deck que estan en el home page -->
            <div class="container">
                <div class="row">
                @foreach($project as $pro)
                    <div class="col-md-4">
                        <div class="card-deck">
                            <div class="card">
                                <img src="images/house.jpg" alt="" class="card-image-top" width="100%" heigh="100%">
                                <div class="card-body">
                                    <h5>{{$pro -> Project_name}}</h5>
                                    <p>{{$pro -> Description}}</p>
                                    <button type="button" class="btn btn-secondary">Project Information</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="container">
                <br>
                <br>
                <!-- Aqui esta el codigo del card sobre quienes somos,  -->
                    <div class="row">
                        <h3>Who we are</h3>
                    </div>
                    <br>
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img class="card-img" src="images/faces/face5.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p><b><h4>Nombre del aquitecto principal</h4></b></p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora eaque dolorum minus fuga! Dolores rerum provident cupiditate accusamus praesentium nostrum voluptas molestiae animi ullam ab, totam odio repellat at vitae?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
