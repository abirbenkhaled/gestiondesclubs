@extends('layouts.admin')
@section('main')
<fieldset>
<legend>Add new event</legend>
<form action="{{ route('events.store')}}" method="post">
    @csrf
    <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="nomrecepteur">Nom recepteur</label>
    <input type="text" name="nomrecepteur" id="nomrecepteur" class="form-control" placeholder="name goes here">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="nomdestinataire">Nom destinataire</label>
    <input type="text" name="nomdestinataire" id="nomdestinataire" class="form-control" placeholder="name goes here">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col">
    <div class="form-group">
    <label for="date">Date</label>
    <input type="text" name="date" id="date" class="form-control" placeholder="date goes here">
    </div>
    </div>
    <div class="col"> <div class="form-group">
    <label for="sujet">Sujet</label>
    <input type="text" name="sujet" id="sujet" class="form-control" placeholder="sujet goes here">
    </div></div>
    </div>
    
    
   
    <div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary">Save</button></div>
    
    <div class="col"><button type="rest" class="btn btn-block btn-outline-secondary">Cancel</button></div>
    </div>
</form>
</fieldset>
@endsection
