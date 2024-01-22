@extends('layouts.app')
@section('content')
    <div id="GB-hmeheadera" class="pt-[50px]">
        <div style="width: 100%; height: 100%; padding-top: 100px;  background: #00000000; display: flex;">
            <div
                style="display: flex; flex-direction: column; height: 100%; width: 15%; justify-content: flex-start; align-items: center; font-size: 20px; z-index: 3;">
                <a href="/profile" style="margin: 10px; color: #fff; text-decoration: none;">My account</a>

                <a href="./events" style="margin: 10px; color: #fff; text-decoration: none;">Events apply History</a>
                <hr style="width: 50%; margin: 0; border: 1px solid #fff; border-radius: 15px;">

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="margin: 10px; color: #fff; text-decoration: none; opacity: .5;">Log
                        out</button>
                </form>

            </div>
            <div>
                <hr style="margin-top: -35px;  height: 100%; border: 1px solid #fff;">
            </div>
            <div style="width: 85%;">
                <div class="wrapper">
                    <h1 style="font-size: 34px;">Events apply History</h1>
                    <div class="main-slider-section">
                        <div class="main-slider swiper-container swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transition-duration: 0ms;transform: translate3d(-480.667px, 0px, 0px);">
                                <a class="swiper-slide swiper-slide-prev" style="width: 465.667px; margin-right: 15px;">
                                    <div class="block-slider sliderr swiper-container swiper-container-horizontal">


                                        <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>


                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </a>
                                <a class="swiper-slide swiper-slide-active" style="width: 465.667px; margin-right: 15px;">
                                    <div class="block-slider swiper-container swiper-container-horizontal">

                                        <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>


                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <a class="swiper-slide swiper-slide-next" style="width: 465.667px;margin-right: 15px;">
                                    <div class="block-slider swiper-container swiper-container-horizontal">

                                        <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }});width: 40%;height: 90%;background-position: center;background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>


                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <a class="swiper-slide" style="width: 465.667px; margin-right: 15px;">
                                    <div class="block-slider swiper-container swiper-container-horizontal">

                                        <div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>


                                            <div
                                                style="display: flex; justify-content: center; flex-direction: column; align-items: center; width: 100%; height: 100%; ">
                                                <div
                                                    style="width: 80%; height: 90%; border: 2px solid #000000; border-radius: 15px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <div
                                                        style="background: url({{ Vite::asset('resources/media/images/1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png') }}); background-position: center; background-size: cover; width: 90%; height: 60%; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                                                        <div
                                                            style="background-image: url({{ Vite::asset('resources/media/images/logo/SHREE.svg') }}); width: 40%; height: 90%; background-position: center; background-size: cover;">
                                                        </div>
                                                    </div>

                                                    <div style="font-size: 20px; text-align: center;">
                                                        <p>19.02.23 - 19:00</p>
                                                        <p>Studio was rented</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <b style="font-size: 24px;">0.00$</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-button-prev uploaded-in-prev"
                                style="background-image: url({{ Vite::asset('resources/media/images/Vector_6.svg') }});">
                            </div>
                            <div class="swiper-button-next uploaded-in-next swiper-button-disabled"
                                style="background-image: url({{ Vite::asset('resources/media/images/Vector_7.svg') }});">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
