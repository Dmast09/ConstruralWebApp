@extends('layouts.layout')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-5">
                <img class="img-fluid rounded mx-auto d-block" src="/images/faces/face9.jpg" alt="" width="195" height="292">
                <span style="margin:auto; display:table;"><h3>Nombre del arqui</h3></span>
            </div>
            <div class="col-lg-7">
                <p class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem numquam at voluptate ipsum a praesentium reiciendis incidunt sed ratione. Odit debitis distinctio vero, quod ex aspernatur consequatur cum. Eos, quos?</p>
            </div>
            <div class="col-lg-4"></div>
            
        </div>
        <hr style="margin-bottom:5px !important; margin-top:5px !important; ">
        <div class="container">
            <div class="row">
                <p class="text-center"><h3 >Know our team</h3></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href="/admin/workers/list" class="btn btn-secondary">Workers List</a>
                
            </div>
            <br>
            <div class="row">
            <?php $n=1;?>
            @foreach($workers as $worker)
                <div class="col-md-3">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="/images/faces/face{{$n}}.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$worker -> Name}}</h5>
                                    <p class="card-text">Profession: {{$worker -> Profession}}<br>Experience: {{$worker -> Experience}} years<br>{{$worker -> Description}}.</p>
                                    <a href="#" class="btn btn-secondary">Go to profile</a>
                                    <a href="#" class="btn btn-secondary">Contact me</a>
                                </div>
                            </div>
                        </div>
                </div>
                <?php $n++;?>
            @endforeach
            </div>
        </div>
    </div>

@endsection