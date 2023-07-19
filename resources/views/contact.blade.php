@extends('master')

@section('title','product')
@section('content')
<div class="main-contact" ng-controller="ContactController">
        <div class="container">
            <div class="main-title-contact">
                <h1><SPAN class="text-contact">CONTACT</SPAN> US</h1>
                <p>Please contact us folow information bellow</p>
            </div>
            <div class="contact-info">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-left" data-aos-duration="2500">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="detail-contact">OFFICE ADDRESS</p>
                        <p>Số 2 Lê Lợi</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-left" data-aos-duration="2500">
                        <i class="fa-solid fa-phone"></i>
                        <p class="detail-contact">PHONE NUMBER</p>
                        <p>(+84)12345678</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-left" data-aos-duration="2500">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <p class="detail-contact">EMAIL ADDRESS</p>
                        <p>car-team@hue.cit.vn</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-left" data-aos-duration="2500">
                        <i class="fa-solid fa-fax"></i>
                        <p class="detail-contact">FAX NUMBER</p>
                        <p>(+84)12345678</p>
                    </div>
                </div>
            </div>
            <form action="" method="get" class="send-mess">
                <div class="row">
                    <div class="col-md-6" >
                        <div class="text-name">
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="text-email">
                            <input type="email" placeholder="Email"class="form-control">
                        </div>
                        <div class="text-subject">
                            <input type="text" placeholder="Subject"class="form-control">
                        </div>
                        <div class="text-number">
                            <input type="text" placeholder="Number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-message">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="btn" >
                        <button type="submit">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.328104328338!2d107.57920051536372!3d16.458915833247215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a149e050b84b%3A0xb17d381011b09e63!2zVHJ1bmcgVMOibSBDw7RuZyBOZ2jhu4cgVGjDtG5nIFRpbiBU4buJbmggVGjhu6thIFRoacOqbiBIdeG6vw!5e0!3m2!1svi!2s!4v1679934429660!5m2!1svi!2s" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="end">
                <div class="row"></div>
            </div>
        </div>
    </div>
@endsection