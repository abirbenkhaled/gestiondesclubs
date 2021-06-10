@extends('layouts.admin')
@section('main')
<a href="{{route('events.create')}}" class="btn btn-outline-primary btn-lg float-right">Add new event</a>
<h3>Liste des evenements</h3>

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
              <a href="{{route('events.show' , ['event'=>$event->id])}}" class="btn btn-info" title="show details about{{$event->recepteur}}">Show</a>
              <a href="" class="btn btn-warning" title="edit event{{$event->recepteur}}">Edit</a>
              <a href="" class="btn btn-danger" title="delete event">Delete</a>

            </td>            
        </tr>
        @endforeach
      
    </tbody>
    
</table>
{{$events->links() }}
    
@endsection