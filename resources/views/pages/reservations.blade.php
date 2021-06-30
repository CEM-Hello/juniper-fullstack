@extends('layouts.main')
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
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fname">First Name</label>
              <input type="text" class="form-control input-field" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control input-field" placeholder="Last name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control input-field" placeholder="you@email.com">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control input-field" placeholder="206-555-5555">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="date">Date</label>
              <input type="date" class="form-control input-field" placeholder="mm/dd/yyyy">
            </div>
            <div class="form-group col-md-6">
              <label for="time">Time</label>
              <input type="text" class="form-control input-field" placeholder="Time">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="guests">Party Size</label>
              <select id="inputState" class="form-control input-field">
                <option selected>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="seating">Seating</label>
              <select id="inputState" class="form-control input-field">
                <option selected>Choose...</option>
                <option>Patio</option>
                <option>Dining Room</option>
              </select>
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