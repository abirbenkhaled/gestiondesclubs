@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>Ajouter un nouvel adhérent</legend>
        <form action="{{route('adhrents.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="first_name"> Prénom </label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="introduire le prénom ici" value="{{old('first_name')}}">
                        @error('first_name')
                           <div class="text-danger">{{message}}</div> 
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="last_name"> Nom </label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="introduire le nom ici" value="{{old('last_name')}}">
                        @error('last_name')
                           <div class="text-danger">{{message}}</div> 
                        @enderror
                    </div>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="n°_cin"> Numero de cin </label>
                <input type="text" name="n°_cin" id="n°_cin" class="form-control" placeholder="introduire le numero de cin ici" value="{{old('n°_cin')}}">
                @error('n°_cin')
                           <div class="text-danger">{{message}}</div> 
                @enderror
            </div>
            <div class="form-group">
                <label for="adresse_courriel"> Email </label>
                <input type="email" name="adresse_courriel" id="first_name" class="form-control" placeholder="introduire l'adresse email ici" value="{{old('adresse_courriel')}}">    
                @error('adresse_courriel')
                           <div class="text-danger">{{message}}</div> 
                @enderror
            </div>
            <div class="form-group">
                <label for="club_id"> club_id </label>
                <input type="text" name="club_id" id="club_id" class="form-control"  value="{{old('club_id')}}">
                @error('club_id')
                           <div class="text-danger">{{message}}</div> 
                @enderror
            </div>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-info">Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-danger">Cancel</button></div>
            </div>
            

        </form>
    </fieldset> 
@endsection