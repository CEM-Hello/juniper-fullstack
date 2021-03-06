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
          <span>The Juniper Barrel Club</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Join our Barrel Club for exclusive Juniper Distillery releases and experiences</p>
      </div>
    </div>
  </div>
</section>
<section class="reservations-info">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 form-block">
        <form method="POST" action="/barrel-club">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputfname">First Name</label>
              <input id="inputfname" type="text" class="form-control input-field @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">

              @error('fname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputlname">Last Name</label>
              <input id="inputlname" type="text" class="form-control input-field @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Doe">

              @error('lname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputemail">Email address</label>
              <input id="inputemail" type="email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@youremail.com">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputphone">Phone #</label>
              <input id="inputphone" type="tel" class="form-control input-field @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="2345678990">

              @error('phone_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-send">Sign Me Up!</button>
        </form>
      </div>
      <div class="col-lg-6 events-text">
        <h2 class="top-h1-2">
          <span>Join The Fun</span>
        </h2>
        <div class="top-p">
          Juniper Distillery believes in community. We love connecting with people and enjoying our new friendships.
          Juniper Barrel Club ensures that our most loyal fans are part of our community and get to enjoy priority
          access to special releases, club-only parties, and a discount on bottle purchases and GINiology.
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-8 mx-auto fine-print">
        <h4><i class="fas fa-exclamation-circle"></i> THE NOT-SO-FINE PRINT</h4>
        <p>No initiation fee to join. Quarterly allocations are approximately $115-165, including all taxes, based upon
          your selections. Shipping is free.</p>
        <p>Email notification will be provided prior to any shipments, events, and credit card charges.
          A one-year minimum commitment is required and there will be a charge of $50 if membership is cancelled before
          your first anniversary in the club.</p>
        <p>Your privacy is important. We only use your information for shipping, billing, and direct communication with
          Juniper Distillery. We don???t sell or share your information.</p>
      </div>
    </div>
  </div>
</section>
<section class="events">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 events-text">
        <h2 class="top-h1-2">
          <span>Just For Club Members</span>
        </h2>
        <div class="top-p">
          <b>Four releases per year of SMALL batch spirits made just for our club members</b> A founding Barrel Club
          member, Mike Varden, notes ???Their special releases are liquid gold. I have not been disappointed one
          bit.???
        </div>
        <div class="top-p pt-5">
          <b>A tasting with Head Distiller, Kirby Hammond, with EACH release</b> Each release will feature a
          private tasting, food pairing and tour.
        </div>
        <div class="top-p pt-5">
          <b>A personalized welcome gift pack</b> including a 750 ML bottle of Waitsburg Bourbon and a gorgeous club
          certificate among and some fantastic Juniper swag
        </div>
        <div class="top-p pt-5">
          <b>Unlimited Tastings</b> For you at the Georgetown Bottleshop OR at Port 106 as well as five ???bring a friend???
          tasting passes
        </div>
      </div>
      <div class="col-lg-6">
        <span class="event-gallery-wrap">
          <img data-object-fit="true" src="/img/kirby.jpg" alt="" class="img-fluid events-img">
        </span>
      </div>
    </div>
  </div>
</section>

@endsection