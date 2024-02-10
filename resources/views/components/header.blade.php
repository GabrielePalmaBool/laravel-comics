@php
    $navbar = [
        [
            "text" => "CHARACTERS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "COMICS",
            "href" => "#",
            "current" => true,
        ],
        [
            "text" => "MOVIES",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "TV",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "GAMES",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "COLLECTIBLES",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "VIDEOS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "FANS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "NEWS",
            "href" => "#",
            "current" => false,
        ],
        [
            "text" => "SHOP",
            "href" => "#",
            "current" => false,
        ], 
    ];
@endphp

<header>

    <div class="row justify-content-between">

        <div class="col-5">

            <img src="{{ Vite::asset('resources/imgs/dc-logo.png') }}" alt="logo">
        
        </div>

        <div class="col-7">

            <div class="row justify-content-center">

                <div class="col-10">

                    <ul>
                    @foreach ( $navbar as $link => $value)

                    <li><a href="{{$value['href']}}"><h4>{{$value['text']}}</h4></a></li>

                    @endforeach

                    </ul>

                </div>

                <div class="col-2 mt-3">

                    <input type="text"  name="fname" placeholder="Search">

                </div>

            </div>

        </div>

    </div>

</header>
