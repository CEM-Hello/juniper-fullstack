@extends('layouts.main')
@section('title')
Barrel Club - {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead club-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Welcome</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Thank you for joining The Juniper Barrel Club!</p>
      </div>
    </div>
  </div>
</section>
<section class="reservations-info">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-8 events-text">
        <div class="top-p">
          Welcome to the most exclusive distilling club in Seattle! You will be receving an email in the next 48 hours with all the information about everything you are now able to get.
        </div>
        <a href="/contact" class="h-top-btn">Questions</a>
      </div>
    </div>
  </div>
</section>

@endsection