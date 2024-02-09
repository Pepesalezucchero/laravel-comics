@extends('layouts.main-layout')
<!-- title -->
@section('head')
    <title>Laravel comics</title>
@endsection
@section('content')
</main>
    <!-- comics section -->
    <section id="main_backgound">
        <div class="my_container_general my_main_container">
            <h1 class="main-title-page">CURRENT SERIES</h1>

            <ul class="comics_list">
                @foreach ($comics as $comic)
                    <li class="comic">
                        <img class="comic_img" src='{{ $comic['thumb'] }}' alt='{{ $comic['title'] }}'>
                        <span>{{ $comic['title'] }}</span>
                    </li>
                @endforeach
            </ul>

            <div class="btn">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <!-- buying section -->
    <section id="buy_section_backgound">
        <div class="my_container_general my_buy_container">
            <ul>
                <li>
                    <a href="#">
                       <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""> 
                       <span>DIGITAL COMICS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""> 
                       <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""> 
                       <span>SUBSCRIPTION</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""> 
                       <span>COMIC SHOP LOCATOR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""> 
                       <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
<main>

@endsection
