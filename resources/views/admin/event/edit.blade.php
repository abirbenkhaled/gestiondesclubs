@extends('layouts.admin')
@section('main')
<fieldset>
<legend>Edit Event <strong></strong>{{$event->recepteur}}</legend>
<form action="{{ route('events.update', ['event'=>$event->id])}}" method="post">
@method('PUT')
    @csrf
    <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="nomrecepteur">Nom recepteur</label>
    <input type="text" name="recepteur" id="nomrecepteur" class="form-control" placeholder="name goes here" value="{{$event->recepteur}}">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="nomdestinataire">Nom destinataire</label>
    <input type="text" name="destinataire" id="nomdestinataire" class="form-control" placeholder="name goes here" value="{{$event->destinataire}}">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="date">Date</label>
    <input type="text" name="date" id="date" class="form-control" placeholder="date goes here" value="{{$event->date}}">
    </div>
    </div>
    <div class="col"> <div class="form-group">
    <label for="sujet">Sujet</label>
    <input type="text" name="sujet" id="sujet" class="form-control" placeholder="sujet goes here" value="{{$event->sujet}}">
    </div></div>
    </div>
    
    
   
    <div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary">Save</button></div>
    
    <div class="col"><button type="rest" class="btn btn-block btn-outline-secondary">Cancel</button></div>
    </div>
</form>
</fieldset>
@endsection
