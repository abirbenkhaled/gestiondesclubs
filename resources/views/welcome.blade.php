@extends('layouts.app')

@section('content')

    
        <h1 class="my-4" >Gestion des Clubs</h1>
        
    
    <div class="col-lg-15">
        <div class="carousel slide my-6" id="carouselExampleIndicators" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox"  style="margin-left: 85px; margin-top: 27px;margin-bottom: 61px;">
                <div class="carousel-item active"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="First slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Second slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            @foreach ($clubs as $club)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                       
                        <div class="card-body">
                            <a href="#!"><img class="card-img-top" src="{{ $club->picture }}" alt="..." /></a>
                            <h4 class="card-title"><a href="#!">{{ $club->club_name }}</a></h4>
                            <h5>{{ $club->categorie }}</h5>
                            <p class="card-text">{{$club->chair_name }}</p>
                        </div>
                        <div class="card-footer"><small class="text-muted">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Joindre</a></div>
                            
                        </small></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
