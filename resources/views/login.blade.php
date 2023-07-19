@extends('master')

@section('title','login')
@section('content')
<div>
        <video autoplay muted loop id="myVideo">
            <source src="./assets/img/loginbackground.mp4" type="video/mp4">
        </video>
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="">
                    <label>Password</label>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </a>
            </form>
        </div>
        
    </div>

@endsection