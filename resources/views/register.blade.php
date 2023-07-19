@extends('master')

@section('title','register')
@section('content')
<div class="main-register" ng-controller="">

    <div class="video">
        <video autoplay muted loop id="myVideo">
            <source src="./assets/img/loginbackground.mp4" type="video/mp4">
        </video>
    </div>
    <div class="box-header">
        <div data-aos="fade-left" data-aos-duration="2500">CARBREEZY</div><br>
    </div>

    <div class="login">
        <input type="text" placeholder="username" name="user" data-aos="fade-right" data-aos-duration="2900"><br>
        <input type="password" placeholder="password" name="password" data-aos="fade-right" data-aos-duration="2900"><br>
        <input type="button" value="Register" data-aos="fade-up" data-aos-duration="2900">
    </div>
    @endsection
