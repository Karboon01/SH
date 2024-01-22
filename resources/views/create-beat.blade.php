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

            <div style="font-size: 34px;color: #fff;display: flex;justify-content: center;">
                <div style="width: 78%; margin-top: 40px;">
                    <div class="ab_txt _anim-items _anim-no-hide _active"
                        style="display: flex;  align-items: baseline; justify-content: space-between;">
                        <h1 style="margin: 0;">NEWS</h1>
                        <h3 style="margin: 0;">11.09.2003</h3>
                    </div>

                    <p class="ab_txt _anim-items _anim-no-hide _active">Lorem ipsum dolor sit amet consectuptatibus aliquam
                        ut facilis ea.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nemo soluta perferendis
                        quibusdam laboriosam voluptatibus aliquam ut</p>

                </div>
            </div>
        </div><span style="position: relative; z-index: 1;">

        </span>
        <div
            style="width: 100%; height: 100vh; background: rgba(153, 0, 255, 0.31); display: flex; justify-content: center; align-items: center; position: relative; z-index: 1;">

            <div class="login-box">
                <h2>EVENTS</h2>
                <form
                    style="display: flex; flex-wrap: wrap;
                    justify-content: space-evenly;
                flex-direction: row;
                ">
                    <div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Rap Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Name</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Surname</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="date" value="" id="start" name="" required=""
                                placeholder="Date of birth">
                            <label>Date of birth</label>
                        </div>

                        <div class="user-box">
                            <input type="rmail" name="" required="">
                            <label>E-mail</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Phone</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="text" name="" required="" class="dateselect">
                            <label>Address</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>City</label>
                        </div>
                    </div>
                    <div>
                        <div class="user-box">
                            <input type="datetime-local" id="start" name="trip-start" required="" placeholder="Date">
                            <label for="start">Date</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Zip</label>
                        </div>
                    </div>
                </form>
                <button class="button-send" type="submit">SEND</button>
            </div>

            {{--            <main> --}}
            {{--                <img class="img-0" src="../img/Kerfin7_NEA_2275 copy 1.png" alt="" style="transform: rotate(0.0001deg) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 13.77, 62.91, 0, 1);"> --}}
            {{--                <img class="img-1" src="" alt="" style="transform: rotate(0.0001deg) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 38.25, 174.75, 0, 1);"> --}}
            {{--                <img class="img-1" src="" alt="" style="transform: rotate(0.0001deg) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -119, 58.75, 0, 1);"> --}}
            {{--                <img class="img-2" src="" alt="" style="transform: rotate(0.0001deg) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 45.9, 209.7, 0, 1);"> --}}
            {{--                <img class="img-3" src="" alt="" style="transform: rotate(0.0001deg) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 53.55, 244.65, 0, 1);"> --}}
            {{--            </main> --}}


        </div><span style="position: relative; z-index: 1;">

        </span><canvas class="vanta-canvas" width="932" height="350"
            style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 1865px; height: 700px;"></canvas>
    </div>
@endsection
