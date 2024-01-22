@extends('layouts.app')
@section('content')
    @foreach ($banner as $item)
        <div
            style="background: url({{ Vite::asset('resources/media/images/') . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="font-weight: 900; text-shadow: 0 0 10px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach
    <div id="GB-hmeheadera">

        <div class="fs-vb"
            style="background: #00000000; color: #fff; display: flex; justify-content: space-evenly; align-items: center; flex-wrap: wrap;"
            id="menu">
            @foreach ($cards as $item)
                <a href="#card_{{ $item->id }}" style="text-decoration: none; color: #fff;">
                    <div style="display: flex; align-items: center; margin: 10px;">
                        <div
                            style="background: url({{ Vite::asset('resources/media/images/') . $item->icon }}); background-size: cover;width: 38px;height: 42px; margin: 10px;">
                        </div>
                        <h3 class="fs-m">{{ $item->headers }}</h3>
                    </div>
                </a>
            @endforeach

        </div>
        <section class="section-cards">
            <ul id="cards">
                @foreach ($cards as $item)
                <li class="cardd" id="card_{{ $item->id }}">
                    <div class="card__content">
                        <div>
                            <div style="display: flex; align-items: center; margin: 10px;">
                                <div
                                    style="background: url({{ Vite::asset('resources/media/images/') . $item->icon }}); background-size: cover;width: 38px;height: 42px; margin: 10px;">
                                </div> 
                                <h3>{{ $item->headers }}</h3>
                            </div>
                            <p class="p-card-min"> {{ $item->descr }}</p>
                            <p class="p-card-min">
                                {{ $item->prices }}
                            </p>
                            <p class="p-card-min"><a href="./Create_beat.html" class="btn btn--accent">BOOK NOW</a></p>
                        </div>
                        <figure style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ Vite::asset('resources/media/images/') . $item->image }}"
                                alt="Image description">
                        </figure>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>

        <div style="height: 52px;"></div>
    </div>
@endsection
