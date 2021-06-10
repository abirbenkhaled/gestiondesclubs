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
        <a href="{{route('adhrents.edit' , ['adhrent'=>$adhrent->id])}}" class="btn btn-warning" title="edit details about  {{$adhrent->first_name.' '.$adhrent->last_name}}">Edit</a>
        <a class="btn btn-danger " href="{{route('adhrents.destroy' , ['adhrent'=>$adhrent->id])}}" onclick="event.preventDefault();
          document.getElementById('delete-form').submit();"><i class="fa fa-window-close"></i> Delete </a>
          <form id="delete-form"  action="{{route('adhrents.destroy' , ['adhrent'=>$adhrent->id])}}" method="POST">
      @csrf
      @method('DELETE')
      </form>      </li>   
    </ul>
   
  </div>
</div>

    
@endsection