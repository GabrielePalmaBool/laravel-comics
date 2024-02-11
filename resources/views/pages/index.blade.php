@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <div class="Back_black">

        <div class="container">

            <!-- Comix in pagina -->
            <div class="row row-cols-6">

            @foreach ( $comics as $comix => $value)

            <div class="col p-1"> 
                    
                <img src="{{$value['thumb']}}" class="comix_img"alt="immagine comix"> 

                <p>{{$value['title']}}</p>

            </div>

            @endforeach

            </div>

        </div> 

    </div>
    

    <div class="Blue_black">

        <div class="container">

            <!-- Comix in pagina -->
            <div class="row row-cols-5">

                <div class="col p-1"> 
                        
                <img src="{{ Vite::asset('resources/imgs/buy-comics-digital-comics.png') }}" alt="buyLogo">

                <p>DIGITAL COMICS</p>

                </div>

                <div class="col p-1"> 
                        
                <img src="{{ Vite::asset('resources/imgs/buy-comics-merchandise.png') }}" alt="T-ShirtLogo">

                <p>DC MERCHANDISE</p>

                </div>

                <div class="col p-1"> 
                        
                <img src="{{ Vite::asset('resources/imgs/buy-comics-shop-locator.png') }}" class="locator" alt="LocatorLogo">

                <p>SUBSCRIPTION</p>

                </div>

                <div class="col p-1"> 
                        
                <img src="{{ Vite::asset('resources/imgs/buy-comics-subscriptions.png') }}" alt="SubLogo">

                <p>COMIC SHOP LOCATOR</p>

                </div>

                <div class="col p-1 last"> 
                        
                <img src="{{ Vite::asset('resources/imgs/buy-dc-power-visa.svg') }}" class="visa" alt="Visalogo"> 

                <p>DC POWER VISA</p>

                </div>

            </div>

        </div> 

    </div>
   
    
@endsection
