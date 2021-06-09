@extends('layouts.admin')
@section('main')
<h1>Liste des evenements</h1>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> recepteur</th>
        <th scope="col">destinataire</th>
        <th scope="col"> date</th>
        <th scope="col">sujet</th>
        <th scope="col">Opérations</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($events as $key => $event) 
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$event->recepteur}}</td>
            <td>{{$event->destinataire}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->sujet}}</td>
            <td>
              <a href="" class="btn btn-info">Show</a>
              <a href="" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
            </td>            
        </tr>
        @endforeach
      
    </tbody>
    {{$events->links() }}
</table>
    
@endsection