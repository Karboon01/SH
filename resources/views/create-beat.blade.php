@extends('layouts.app')
@section('content')
    @foreach ($banner as $item)
        <div
            style="background: url({{ Vite::asset('resources/media/images/') . $item->background }}); background-size: cover; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center;">
            <h4 class="intro_text_h4 _anim-items fs-vb" style="font-weight: 900; text-shadow: 0 0 10px #fff;">
                {{ $item->heading }}</h4>
        </div>
    @endforeach

    <div id="GB-hmeheadera" style="position: relative;"><span style="position: relative; z-index: 1;">

        </span>
        <div
            style="width: 100%; height: 150vh; background: rgba(153, 0, 255, 0.31); display: flex; justify-content: center; align-items: center; flex-direction: column; position: relative; z-index: 1;">
            <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                {{-- @foreach ($news_1 as $item)
                    <div class="imggi wt-b margiinend"
                        style="background: url({{ Vite::asset('resources/media/images/') . $item->image }});">
                        <div style="padding: 0 30px; width: 100%;">

                            <div class="ab_txt _anim-items _anim-no-hide _active"
                                style="display: flex;  align-items: baseline; justify-content: space-between;">
                                <h1 style="margin: 0;">{{ $item->heading }}</h1>
                                <h3 style="margin: 0;">{{ $item->data }}</h3>
                            </div>

                            <p class="ab_txt _anim-items _anim-no-hide _active">{{ $item->descr }}</p>

                        </div>
                    </div>
                @endforeach --}}
                <div style="display: flex; flex-direction: column;">
                    @foreach ($news_2 as $item)
                        <div class="imggi wt-m margiinend"
                            style="background: url({{ Vite::asset('resources/media/images/') . $item->image }});">
                            <div style="padding: 0 30px; width: 100%;">
                                <div class="ab_txt _anim-items _anim-no-hide _active"
                                    style="display: flex;  align-items: baseline; justify-content: space-between;">
                                    <h1 style="margin: 0;">NEWS</h1>
                                    <h3 style="margin: 0;">11.09.2003</h3>
                                </div>

                                <p class="ab_txt _anim-items _anim-no-hide _active">Lorem ipsum dolor sit amet busdam
                                    labofacilis ea.</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div><span style="position: relative; z-index: 1;">

        </span>
        <div
            style="width: 100%; height: 100vh; background: rgba(153, 0, 255, 0.31); display: flex; justify-content: center; align-items: center; position: relative; z-index: 1;">

            <div class="login-box">
                <h2>EVENTS</h2>
                <form action="/admin_users_requests_create" method="post"
                    style="display: flex; flex-wrap: wrap;
                    justify-content: space-evenly;
                    flex-direction: row;">
                    @csrf
                    <div>
                        <div class="user-box">
                            <input type="text" name="rap_name" id="rap_name" required>
                            <label>Rap Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="name" id="name" required>
                            <label>Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="surname" id="surname" required>
                            <label>Surname</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="date" value="" id="start" name="date_of_birth" id="date_of_birth"
                                required placeholder="Date of birth">
                            <label>Date of birth</label>
                        </div>

                        <div class="user-box">
                            <input type="email" name="email" id="email" required>
                            <label>E-mail</label>
                        </div>
                        <div class="user-box">
                            <input type="tel" name="phone" id="phone" required>
                            <label>Phone</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="text" name="address" id="address" required class="dateselect">
                            <label>Address</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="city" id="city" required>
                            <label>City</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="datetime-local" id="start" name="date" id="date" required
                                placeholder="Date">
                            <label for="start">Date</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="zip" id="zip" required="">
                            <label>Zip</label>
                        </div>
                    </div>

                    <button class="button-send" type="submit">SEND</button>
                </form>

            </div>

        </div><span style="position: relative; z-index: 1;">

        </span><canvas class="vanta-canvas" width="932" height="350"
            style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 1865px; height: 700px;"></canvas>
    </div>
@endsection
