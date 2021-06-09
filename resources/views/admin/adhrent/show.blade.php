@extends('layouts.admin')
@section('main')
<h3>détails de l'adhérent: <strong> {{$adhrent->first_name.' '.$adhrent->last_name}}</strong></h3>
<div class="card" style="width: 38rem;">
  <div class="card-body">
    <h5 class="card-title">nom et prénom: <strong>{{$adhrent->first_name.' '.$adhrent->last_name}}</strong></h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Details :</li>
      <li class="list-group-item">Email:<strong> {{$adhrent->adresse_courriel}}</strong></li>
      <li class="list-group-item">numero de cin:<strong> {{$adhrent->n°_cin}}</strong></li>
      <li class="list-group-item">
        <a href="" class="btn btn-warning" title="edit details about  {{$adhrent->first_name.' '.$adhrent->last_name}}">Edit</a>
        <a href="" class="btn btn-danger" title="delete  {{$adhrent->first_name.' '.$adhrent->last_name}}">Delete</a>
      </li>   
    </ul>
   
  </div>
</div>

    
@endsection