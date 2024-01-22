@extends('layouts.app')
@section('content')
    <div class="intro slider">
        <div class="intro__item">
            @foreach ($banner as $item)
                <div class="intro__fon">
                    <video class="intro__v-fon" src="{{ Vite::asset('resources/media/images/') . $item->background }}"
                        autoplay muted loop></video>
                </div>
                <div class="intro__content">
                    <h1 class="intro_text_h1 _anim-items fs-vb"
                        style=" text-shadow: 0 0 10px #fff; font-weight: bold; letter-spacing: 0px;">{{ $item->heading }}
                    </h1>
                </div>
            @endforeach
        </div>
    </div>

    <div id="GB-hmeheadera" style="height: 100%;">

        <div
            style="display: flex; justify-content: center; align-items: center; background: #00000000; flex-direction: column; text-align: center; ">
            @foreach ($header as $item)
                <div style="margin: 160px ;">
                    <h1 class="ab_txt _anim-items _anim-no-hide">{{ $item->text }}</h1>
                </div>
            @endforeach
            @foreach ($cards as $item)
                @if ($item->id % 2 == 1)
                    <div style="display: flex; align-items: center; justify-content: center; margin: 120px 60px;">
                        <div>
                            @if ($item->image && Str::contains($item->image, '.mp4'))
                                <video class="video photo-vh"
                                    src="{{ Vite::asset('resources/media/images/') . $item->image }}" autoplay muted
                                    loop></video>
                            @else
                                <div class="photo-vh"
                                    style="display: flex; flex-direction: column; justify-content: center; background: url({{ Vite::asset('resources/media/images/') . $item->image }}); background-size: cover; background-position: center; color: #fff; ">
                                </div>
                            @endif
                        </div>
                        <div style="margin-left: -80px;">
                            <div class="ab_txt _anim-items _anim-no-hide"
                                style="text-align: start; margin: 25px; font-size: 55px;">LABEL</div>
                            <div class="ab_txt _anim-items _anim-no-hide w-con-min fs-m text-balance"
                                style="text-align: start; margin: 25px;">{{ $item->descr }}</div>

                        </div>
                    </div>
                @else
                    <div style="display: flex; align-items: center; justify-content: center; margin: 120px 60px;">
                        <div style="margin-right: -80px; z-index: 4;">
                            <div class="ab_txt _anim-items _anim-no-hide"
                                style="text-align: end; margin: 25px; font-size: 55px;">
                                LABEL</div>
                            <div class="ab_txt _anim-items _anim-no-hide w-con-min fs-m text-balance"
                                style="text-align: end; margin: 25px;">
                                {{ $item->descr }}
                            </div>

                        </div>
                        <div>
                            @if ($item->image && Str::contains($item->image, '.mp4'))
                                <video class="video photo-vh"
                                    src="{{ Vite::asset('resources/media/images/') . $item->image }}" autoplay muted
                                    loop></video>
                            @else
                                <div class="photo-vh"
                                    style="display: flex; flex-direction: column; justify-content: center; background: url({{ Vite::asset('resources/media/images/') . $item->image }}); background-size: cover; background-position: center; color: #fff; ">
                                </div>
                            @endif

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <div style="height: 80px; margin-bottom: 0px;"></div>
    </div>
@endsection
