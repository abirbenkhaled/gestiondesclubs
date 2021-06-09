@extends('layouts.admin')
@section('main')
<h3>liste des adhérents</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Nom & Prénom</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($adhrents as $key => $adhrent)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$adhrent->first_name.' '.$adhrent->last_name}}</td>
            <td>{{$adhrent->adresse_courriel}}</td>
            
        </tr>
        @endforeach
      
    </tbody>
</table>
    
@endsection