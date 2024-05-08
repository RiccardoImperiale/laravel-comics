@extends('layouts.app')

@section('content')
    <section id="products">
        <div class="container">
            <div class="title_box">ALL COMICS</div>
            <div class="comics">
                @foreach ($comics as $index => $comic)
                    <a href="{{ route('comics.show', ['id' => $index]) }}">
                        <div class="comic">
                            <div class="comic_image">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="comic_text">
                                <div>
                                    <h2 class="comic_title">{{ $comic['title'] }}</h2>
                                    <p>{{ $comic['description'] }}</p>
                                </div>
                                <div class="bottom_text">
                                    <h4>{{ $comic['price'] }}</h4>
                                    <small>{{ $comic['sale_date'] }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="btn">LOAD MORE</div>
        </div>
    </section>
@endsection
