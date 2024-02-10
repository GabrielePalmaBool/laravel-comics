@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <ul>
        @foreach ( $comics as $comix => $value)

        <li>{{$value['title']}}</li>

        <li> 
            @foreach ( $value['artists'] as $artist => $value)

                    {{$value}}

            @endforeach
        </li><br>
       
    
        @endforeach
    </ul>
   
    
@endsection
