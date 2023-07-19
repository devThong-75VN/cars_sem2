@extends('master')

@section('title','product')
@section('content')
<div class="main-gallery" ng-controller="GalleryController">

  <div class="row">
    <p class="title_gallery"><span>GALLERY </span></p>
  </div>
  <div id="gallery">
    <div ng-repeat="image in gallery track by $index">
      <img src="{{url('/img/')}}" >
    </div>
  </div>
</div>
@endsection