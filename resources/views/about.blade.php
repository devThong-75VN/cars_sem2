@extends('master')

@section('title','about')
@section('content')
<div class="main">

    <div class="ouragent" style="background-color: #F9B701;">
        <div class="ouragent-intro">
            <h2> <span style="color:#3c5bfc";>OUR </span> TEAM PROJECT</h2>
            <p>Meet out small team that make those great products.</p>
        </div>
        <div class="ouragent-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" id="agent-detail" >
                        <img data-aos="fade-left" data-aos-duration="800" src="./assets/img/student_Linh.jpg" alt="" width="100%" height="120%">
                        <p data-aos="fade-up" data-aos-duration="800"><b>NGUYỄN THỊ DIỆU LINH</b></p>
                        <p data-aos="fade-up" data-aos-duration="800">Student</p>
                    </div>
                    <div class="col-md-4" id="agent-detail">
                        <img data-aos="fade-left" data-aos-duration="800" src="./assets/img/student_Thong.jpg" alt="" width="50%" height="50%">
                        <p data-aos="fade-up" data-aos-duration="800"><b>NGUYỄN MINH THÔNG</b></p>
                        <p data-aos="fade-up" data-aos-duration="800">Student</p>
                    </div>
                    <div class="col-md-4" id="agent-detail" data-aos="fade-right" data-aos-duration="2500">
                        <img src="./assets/img/leader.png" alt="" width="100%">
                        <p data-aos="fade-up" data-aos-duration="2500"><b>TRẦN THANH BÌNH</b></p>
                        <p data-aos="fade-up" data-aos-duration="2500">Instructor</p>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
    <div class="whychoose">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="./assets/img/car-4.jpg" alt="" width="100%">
                </div>
                <div class="col-md-9">
                    <ul>
                        <li>
                            <h4>WHY CHOOSE US?</h4>
                        </li>
                        <li>
                            <p>Honesty and integrity</p>
                            <SPAN>We apply international industry standards like ISO 27001:2013, ISO 9001:2015, CMMi Level 3 in operation and management to ensure the highest quality of service and exceed customers’ expectations. These are firm proofs of our ceaseless effort to enhance our performance and ensure the best service quality to our partners..</SPAN>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="counters">
        <div class="row">
            <div class="col-md-3" id="counters-detail">
                <ul>
                    <li>
                        <i class="far fa-car"></i>
                    </li>
                    <li>
                        <h4>500</h4>
                        <p>OLDER CAR</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3" id="counters-detail">
                <ul>
                    <li>
                        <i class="far fa-car"></i>
                    </li>
                    <li>
                        <h4>500</h4>
                        <p>MEMBER</p>
                    </li>
                </ul>

            </div>
            <div class="col-md-3" id="counters-detail">
                <ul>
                    <li>
                        <i class="far fa-car"></i>
                    </li>
                    <li>
                        <h4>500</h4>
                        <p>BEST CAR</p>
                    </li>
                </ul>

            </div>
            <div class="col-md-3" id="counters-detail">
                <ul>
                    <li>
                        <i class="far fa-car"></i>
                    </li>
                    <li>
                        <h4>500</h4>
                        <p>CONECTION</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection