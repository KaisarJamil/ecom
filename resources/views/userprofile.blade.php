@extends('layouts.frontend.app')

@section('title','Home')

@section('content')
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="{{ asset('assets/frontend/image/prlx.jpg') }}" alt="#"></div>
  <h1>My Profile</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="about-us.html">My Profile</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="wwd">
      <div class="col-sm-5"><img class="img-responsive" src="{{ asset('assets/frontend/image/user.png')}}" alt="#"></div>
      <div class="col-sm-7">
        <div class="column-inner ">
          <div class="wrapper">
            <h6 class="aboutus-title"> Name: {{ Auth::user()->name}} </h6>
            <h6 class="aboutus-title"> Email: {{ Auth::user()->email}} </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection()