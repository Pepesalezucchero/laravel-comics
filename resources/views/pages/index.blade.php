@extends('layouts.main-layout')
@section('head')
    <title>Laravel comics</title>
@endsection
@section('content')
</main>
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
<main>

@endsection
