@extends('layouts.admin')
@section('main')
<a href="{{route('adhrents.create')}}" class="btn btn-outline-primary  float-right">Ajouter un nouvel adhérent</a>
<h3>liste des adhérents</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Nom & Prénom</th>
        <th scope="col">Email</th>
        <th scope="col">Opérations</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($adhrents as $key => $adhrent)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$adhrent->first_name.' '.$adhrent->last_name}}</td>
            <td>{{$adhrent->adresse_courriel}}</td>
            <td>
              <a href="{{route('adhrents.show' , ['adhrent'=>$adhrent->id])}}" class="btn btn-info" title="show details about {{$adhrent->first_name.' '.$adhrent->last_name}}">Show</a>
              <a href="{{route('adhrents.edit' , ['adhrent'=>$adhrent->id])}}" class="btn btn-warning" title="edit details about  {{$adhrent->first_name.' '.$adhrent->last_name}}">Edit</a>
              <a href="" class="btn btn-danger" title="delete  {{$adhrent->first_name.' '.$adhrent->last_name}}"
                onclick="event.preventDefault(); document.querySelector('#delete-adhrent-form').submit()">Delete</a>
              <form action="{{route('adhrents.destroy' , ['adhrent'=>$adhrent->id])}}" method="post" id="delete-adhrent-form">@csrf @method('DELETE')</form>
            </td>            
        </tr>
        @endforeach
      
    </tbody>
    
</table>
{{$adhrents->links()}}
    
@endsection