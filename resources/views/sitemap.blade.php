@extends('master')

@section('title','sitemap')
@section('content')
<div class="main-sitemap" ng-controller="SitemapController">
  <div class="row text-sitemap"><strong><a href="/">CARBREEZY SITE MAP</a></strong></div>
  <div class="row">
    <div class="sitemap">
      <ul class="first">
        <li>
          <a id="home-sitemap" href="/">
            <p><i class="fa-solid fa-house"></i> Home</p>
          </a>
          <ul class="second">
            <li>
              <a href="#!product"><i class="fa-solid fa-box"></i> Products</a>
              <ul class="third">
                <li><a href="detail.html?id=1">Details</a></li>
              </ul>
            </li>
            <li>
              <a href="#!galery"><i class="fa-solid fa-image"></i>
                Gallery</a>
            </li>
            <li>
              <a href="#!sitemap"><i class="fa-solid fa-sitemap"></i> Site
                map</a>
            </li>
            <li>
              <a href="#!contact"><i class="fa-solid fa-id-card"></i>
                Contact</a>
            </li>
            <li>
              <a href="#!about"><i class="fa-solid fa-user-group"></i>
                About</a>
            </li>
            <!-- <li><a href="#">Contact</a></li> -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection