@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <div class="container mt-5">

        <!-- Comix in pagina -->
        <div class="row">
            <div class="col-7">
                <h2>{{$comic['title']}}</h2>
            </div>
            <div class="col-5">
                <img src="{{$comic['thumb']}}" alt="logo">
            </div>
            
        </div>

    </div> 

@endsection
