@extends('layouts.admin')
@section('main')
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
              <a href="" class="btn btn-warning" title="edit details about  {{$adhrent->first_name.' '.$adhrent->last_name}}">Edit</a>
              <a href="" class="btn btn-danger" title="delete  {{$adhrent->first_name.' '.$adhrent->last_name}}">Delete</a>
            </td>            
        </tr>
        @endforeach
      
    </tbody>
    
</table>
{{$adhrents->links()}}
    
@endsection