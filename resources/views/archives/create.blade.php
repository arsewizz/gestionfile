@extends('layouts.app')
@include('layouts._authbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 style="text-align:center;">Ajouter votre achive</h3>
                {!!Form::open(['action'=>'ArchivesController@store'])!!}

                    <div class="form-group">
                       {{Form::label('Nom archives') }}
                       {{Form::text('intitule_archive','',['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                       {{Form::label('Traitement') }}
                       {{Form::text('traitement','',['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                       {{Form::label('Fichier') }}
                       {{Form::text('fichier','',['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                       {{Form::label('Type') }}
                       {{Form::text('type','',['class'=>'form-control']) }}
                    </div>

                    <div class="button">
                        {{Form::submit('Enregistrer',['class'=>'btn btn-block btn-primary'])}}
                    </div>

                {!!Form::close()!!}
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