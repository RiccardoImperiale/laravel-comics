@extends('layouts.app')
@section('content')
    {{-- @dd($comics) --}}
    <section id="homepage">
        <div class="container">
            <div class="title_box">CURRENT SERIES</div>
            <div class="comics">
                @foreach ($comics as $comic)
                    <div class="comic">
                        <div class="comic_image">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="comic_title">{{ $comic['series'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="btn">LOAD MORE</div>
        </div>
    </section>
    <div class="banner">
        <div class="container">
            <div class="link">
                <img height="40" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                    alt="buy-comics-digital-comics">
                <div class="text">DIGITAL COMICS</div>
            </div>
            <div class="link">
                <img height="40" src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                    alt="buy-comics-merchandise">
                <div class="text">DC MERCHANDISE</div>
            </div>
            <div class="link">
                <img height="40" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}"
                    alt="buy-comics-shop-locator">
                <div class="text">SUBSCRIPTION</div>
            </div>
            <div class="link">
                <img height="40" src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                    alt="buy-comics-subscriptions">
                <div class="text">COMIC SHOP LOCATOR</div>
            </div>
            <div class="link">
                <img height="30" src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}"
                    alt="buy-dc-power-visa">
                <div class="text">DC POWER VISA</div>
            </div>
        </div>
    </div>
@endsection
