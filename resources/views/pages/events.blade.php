@extends('layouts.main')
@section('title')
Events - {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead events-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Events</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated imbibing
          experience. Stop by for a cocktail, enjoy a tasting flight or book an event with us. We can accommodate groups
          of up to 85 guests.</p>
      </div>
    </div>
  </div>
</section>
<section class="events">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 events-text">
        <h2 class="top-h1-2">
          <span>Tours & Cocktail Classes</span>
        </h2>
        <div class="top-p">
          <b>Distillery Tours</b> are currently available for private groups of 4-10 guests. Tours run Wednesday -
          Friday at 5pm and Saturday at 5pm & 6pm, and include a 45-minute educational experience and guided tasting of
          our current offerings.
        </div>
        <a href="https://www.eventbrite.com/" target="_blank" class="h-top-btn">Book a Tour</a>
        <div class="top-p pt-5">
          <b>Cocktail Classes</b> can be booked for private groups of 10 guests and are held in our Tasting Room.
          Virtual classes are also available - reach out to us at <a href="#">cheers@juniperdistillingco.com</a> for
          more details!
        </div>
        <a href="https://www.eventbrite.com/" target="_blank" class="h-top-btn"><u>Cocktail Class Tickets</u></a>
      </div>
      <div class="col-lg-6">
        <span class="event-gallery-wrap">
          <img data-object-fit="true" src="/img/cocktailclass.jpg" alt="" class="img-fluid events-img">
        </span>
      </div>
    </div>
  </div>
</section>
<section class="events">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 order-switch">
        <span class="tours-gallery-wrap">
          <img data-object-fit="true" src="/img/events1.jpg" alt="" class="img-fluid tours-img">
        </span>
      </div>
      <div class="col-lg-6 tours-text">
        <h2 class="top-h1-2">
          <span>Private Tours & Cocktail Classes</span>
        </h2>
        <div class="top-p">
          <b>Private Tour & Tasting.</b> Looking for a personal tour & tasting? Book a private 45 minute educational
          experience, finished with a tasting of our current spirit offerings.
        </div>
        <a href="#inquire" class="h-top-btn">Inquire Here</a>
        <div class="top-p pt-5">
          <b>Private Cocktail Class.</b> Our private classes are available for groups ranging from 6-40 guests. These
          hour-long experiences are ideal for birthdays, bachelorette parties, or even a fun night out with friends!
        </div>
        <a href="#inquire" class="h-top-btn"><u>Inquire Here</u></a>
      </div>
    </div>
  </div>
</section>
<section class="events">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 private-text">
        <h2 class="top-h1-2">
          <span>Private Events</span>
        </h2>
        <div class="top-p">
          Reserve our bright, airy space and talented bar team exclusively for you & your guests. Our venue is perfect
          for bridal and baby showers, bachelorette parties, intimate wedding receptions, and company parties. We can
          even create custom experiences and drinks for your special event! Click below to inquire for package & pricing
          details.
        </div>
        <a href="#inquire" class="h-top-btn">Inquire Here</a>
      </div>
      <div class="col-lg-6">
        <span class="event-gallery-wrap">
          <img data-object-fit="true" src="/img/events2.jpg" alt="" class="img-fluid private-img">
        </span>
      </div>
    </div>
  </div>
</section>
<section class="events">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 form-block order-switch">
        <form name="eventForm">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fname">Name</label>
              <input type="text" name="fullName" class="form-control input-field" placeholder="Full Name">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control input-field" placeholder="you@email.com">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phone">Phone Number</label>
              <input type="tel" name="phone" class="form-control input-field" placeholder="206-555-5555">
            </div>
            <div class="form-group col-md-6">
              <label for="guest count">Number of Guests</label>
              <input type="text" name="count" class="form-control input-field" placeholder="Guest Count">
            </div>
          </div>
          <label for="message">Message or Questions</label>
          <textarea class="form-control form-control-lg input-field message-field" name="message" rows="10"
            placeholder="I want to have my next event at Juniper!"></textarea>
          <button type="submit" class="btn btn-send mt-4">Send</button>
        </form>
      </div>
      <div class="col-lg-6 tours-text">
        <h2 class="top-h1-2">
          <span id="inquire">Book Your Next Event With Juniper</span>
        </h2>
        <div class="top-p">
          Drop us a note and let’s work together to make your perfect event happen. We can tailor every event to your
          needs and budget - hope to talk with you soon!
        </div>
      </div>
    </div>
  </div>
</section>
@endsection