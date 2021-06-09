@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>Ajouter un nouvel adhérent</legend>
        <form action="{{route('adhrents.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name"> Prénom </label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="introduire le prénom ici" >
                <label for="last_name"> Nom </label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="introduire le nom ici" >
                <label for="n°_cin"> Numero de cin </label>
                <input type="text" name="n°_cin" id="first_name" class="form-control" placeholder="introduire le numero de cin ici" >
                <label for="adresse_courriel"> Email </label>
                <input type="text" name="adresse_courriel" id="first_name" class="form-control" placeholder="introduire l'adresse email ici" >    
            </div>
        </form>
    </fieldset> 
@endsection