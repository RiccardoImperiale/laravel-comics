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
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="comic_title">{{ $comic['series'] }}</div>
                    </div>
                @endforeach

            </div>
            <div class="btn">LOAD MORE</div>
        </div>
    </section>
    <div class="banner container">

    </div>
@endsection
