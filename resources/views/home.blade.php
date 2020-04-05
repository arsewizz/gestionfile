@extends('layouts.app')
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
                    <p>
                        {{$archive->intitule_archive}}
                    </p>
                </div>
            @empty
                
            @endforelse
    </div>
</div>
@endsection
