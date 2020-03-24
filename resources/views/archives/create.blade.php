@extends('layouts.app')
@include('layouts._authbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Ajouter votre achive</h3>
            </div>
            {{--
                <h2>Ajouter votre archives</h2>
                    <form action="/archives" method="post">
                        @csrf
                        <input type="text" name="intitule_archive" id="intitule_archive"> <br>
                        <input type="text" name="traitement" id="traitement"><br>
                        <input type="text" name="fichier" id="fichier"><br>
                        <input type="text" name="type" id="type">
                        <button type="submit">Enregidtrer</button>
                    </form>
                --}}
        </div>
    </div>
@endsection