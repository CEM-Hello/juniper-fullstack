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
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 form-block">
        <form method="POST" action="/reservations">
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
              <label for="inputemail">Email</label>
                <input id="inputemail" type="email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@mail.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputphonenumber">Phone Number</label>
                <input id="inputphonenumber" type="tel" class="form-control input-field @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="2065789090">

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputdate">Date</label>
              <input id="inputdate" type="date" class="form-control input-field @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus placeholder="mm/dd/yyyy">

              @error('date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputtime">Time</label>
              <input id="inputtime" type="time" class="form-control input-field @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus placeholder="Time">

              @error('time')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="guestsinput">Number of Guests</label>
              <select name="guests_total" class="form-control input-field @error('guests_total') is-invalid @enderror" id="guestsinput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
              @error('guests_total')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="inputseating">Seating</label>
              <select id="inputseating" class="form-control input-field @error('seating') is-invalid @enderror"  name="seating">
                <option value="Indoor">Dining Room</option>
                <option value="Outdoor">Patio</option>
              </select>
              @error('seating')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-send">Make Reservation</button>
        </form>
      </div>
      <div class="col-lg-6 events-text">
        <div class="top-p">
          When booking your table, you always have a choice: You may reserve via the online tool, or by phoning our
          Guest Services Ambassador. We highly recommend contacting us directly for assistance with larger parties,
          special requests, and any questions about our menu and hours of operation. Plus we always prefer to connect
          with guests personally. After all, that’s why we’re here. We look forward to hearing from you.
        </div>
        <a href="#" class="h-top-btn">Questions</a>
      </div>
    </div>
  </div>
</section>

@endsection