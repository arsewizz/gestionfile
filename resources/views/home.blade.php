@extends('layouts.app')
@section('title','')
@include('layouts._authbar')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!!Form::open(['action'=>'SearchController@search'])!!}
                <div class="search-form-control form-group">
                    {{Form::text('search_query','',['class'=>'form-control string required', 'name'=>'search_query', 'id'=>'search_query'])}}
                    {{Form::submit('Recherche',['class'=>"btn btn-flat"])}}
                </div>
            {!!Form::close()!!}
        </div>
    </div>

    <div class="row">
            @forelse ($archives as $archive)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <p>
                                <a href="/file_detail/{{$archive->id}}">{{$archive->intitule_archive}} : Ajouté ({{$archive->created_at}})</a>
                            </p>
                        </div>
                        <div class="card-content">

                        </div>
                        <div class="card-footer">
                    {{Form::open(['action'=>['ArchivesController@destroy',$archive->id]])}}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Supprimer',['class'=>'btn btn-danger'])}}
                    {{Form::close()}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h3 class="text-center">
                            Pas de fichier disponible
                        </h3>
                    </div>
                </div>
            @endforelse
    </div>
</div>
@endsection
