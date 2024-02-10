@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <!-- Comix in pagina -->
    <div class="row row-cols-6">

        @foreach ( $comics as $comix => $value)

        <div class="col p-1"> 
                
             <img src="{{$value['thumb']}}" class="comix_img"alt="immagine comix"> 

             <p>{{$value['title']}}</p>

        </div>

        @endforeach

    </div>
   
    
@endsection
