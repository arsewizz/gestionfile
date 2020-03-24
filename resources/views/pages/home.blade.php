@extends('layouts.app')
@section('title','welcome sur notre page')

@section('content')
    <div class="container">
        <div class="row">
            <h3>BIENVENUE SUR <strong>S.scillia</strong></h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('images/logo.jpg')}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection