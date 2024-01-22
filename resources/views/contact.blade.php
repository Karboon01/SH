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

        <div style="display: flex; justify-content: space-evenly; align-items: center; padding-top: 40px;">
            @foreach ($contacts as $item)
                <div style="display: flex; flex-direction: column;">
                    <p>Phone</p>
                    <h4>{{ $item->phone }}</h4>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <p>Email</p>
                    <h4>{{ $item->email }}</h4>
                </div>
            @endforeach
            <div style="display: flex; flex-direction: column; ">
                <p>Social Media</p>
                <div class="" style="display: flex; flex-direction: column;">
                    <ul class="social-icons">
                        @foreach ($social as $item)
                            <li>
                                <a class="{{ $item->name }}" href="#"
                                    style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;">
                                    {!! $item->icon !!}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <form action="">
            <h1>FEEDBACK</h1>
            <div style="display: flex; justify-content: space-evenly; align-items: center; ">
                <div style="display: flex; flex-direction: column;">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>First Name</label>
                        </div>
                    </div>

                </div>
                <div style="display: flex; flex-direction: column;">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>Last Name</label>
                        </div>
                    </div>

                </div>
                <div style="display: flex; flex-direction: column; ">

                    <div class="login-box-log">
                        <div class="user-box">
                            <input type="name" name="" required="">
                            <label>E-mail</label>
                        </div>
                    </div>

                </div>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; padding:  50px;">

                <div class="login-box-log-l">
                    <div class="user-box">
                        <input type="name" name="" required="">
                        <label>Message</label>
                    </div>
                </div>
                <button class="but-log">SEND</button>

            </div>
        </form>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; padding: 90px;">
            <div>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.075952259417!2d13.412759577035914!3d52.55014973399642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85206601ab613%3A0x67777008a16243f4!2zV2ljaGVydHN0cmHDn2UgNCwgMTA0MzkgQmVybGluLCDQk9C10YDQvNCw0L3QuNGP!5e0!3m2!1sru!2sru!4v1696162641037!5m2!1sru!2sru"
                    width="600" height="450" style="border-radius: 30px;border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <h2 style="font-size: 48px;">Address</h2>
                @foreach ($contacts as $item)
                    <p style="font-size: 24px;">{{ $item->address }}</p>
                @endforeach
            </div>
        </div>

    </div>
@endsection
