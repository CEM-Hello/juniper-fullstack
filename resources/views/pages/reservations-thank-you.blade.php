@extends('layouts.main')
@section('title')
Farmhouse Reservations - {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead reservations-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Reservations</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Reserve a table here or by calling 206-219-8652</p>
      </div>
    </div>
  </div>
</section>
<section class="reservations-info">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-8 events-text">
        <div class="top-p">
          <h1>Your table has been booked</h1>
          We look forward to seeing you!
        </div>
        <a href="/contact" class="h-top-btn">Questions</a>
      </div>
    </div>
  </div>
</section>

@endsection