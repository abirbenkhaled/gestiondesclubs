@extends('layouts.admin')
@section('main')
<h3><i class="fas fa-users"></i>detail about<strong>{{$event->recepteur}}</strong></h3>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Name event <strong>{{$event->recepteur}}</strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">details</h6>
    <p class="card-text"> Name dest <strong>{{$event->destinataire}}</strong></p>
    <p class="card-text">Date <strong> {{$event->date}}</strong></p>
    <p class="card-text">Sujet <strong> {{$event->sujet}}</strong></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
@endsection