@extends('layouts.app')
@section('content')
    @foreach ($banner_1 as $item)
        <div class="ban-ban" style="background: url({{ Vite::asset('resources/media/images/') . $item->background }});">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="font-weight: 900; text-shadow: 0 0 10px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach
    <div id="GB-hmeheadera">
        <div
            style="width: 100%; height: 100vh; background-color: #6634b600; display: flex; justify-content: center; align-items: center;">
            <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; ">
                <div class="group" style="z-index: 9; ">
                    @foreach ($cards as $item)
                        <div class="item"
                            style="background-image: url({{ Vite::asset('resources/media/images/') . $item->image }}); width: 15vw; ">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div
            style="display: flex; justify-content: center; align-items: center; background: #00000000; flex-direction: column; text-align: center; padding-bottom: 60px;">
            <h1 class="fs-vs" style="color: #fff; ">FULL LIST</h1>
            <h3 class="fs-vs" style="color: #fff; ">
                @foreach ($list as $item)
                    {{ $item->text }} <br>
                @endforeach
            </h3>
        </div>
        @foreach ($banner_2 as $item)
            <div
                style="background: url({{ Vite::asset('resources/media/images/') . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
                <h4 class="intro_text_h4 _anim-items"
                    style="font-weight: 900; font-size: 80px; text-shadow: 0 0 10px #fff;">{{ $item->heading }}</h4>
            </div>
        @endforeach
        <section class="flex-slider">
            @foreach ($person as $item)
                <div class="flex-slider-item active" 
                {{-- style="background:linear-gradient(to right, rgba(0, 0, 0,0.4), rgba(0, 0, 0,0.3)), url({{ $item->image }});" --}}
                >
                    <span class="flex-slider-item-text">Lorem ipsum dolor</span>
                </div>
            @endforeach
        </section>
    </div>
@endsection
