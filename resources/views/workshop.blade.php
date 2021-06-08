@extends('layouts.app')

@section('content')
<div class="row">
    <div >
        <h1 >Gestion des Clubs</h1>
    
    </div>
    
        <div class="row">
            @foreach ($workshops as $workshop)
            <section id="scroll">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="card-img-top" src=# alt="..." /></div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <h4 class="display-4">{{ $workshop->workshops_name }}</h4>
                                <h2 class="display-8">Chair name: {{$workshop->formateur_name }}</h2>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content section 2-->
            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="p-5"><img class="card-img-top" src=# alt="..." /></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                            <h4 class="display-4">{{ $workshop->workshops_name }}</h4>
                                <h2 class="display-8">Chair name:  {{$workshop->formateur_name }}</h2>
                            
                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
    </div>
</div>
@endsection