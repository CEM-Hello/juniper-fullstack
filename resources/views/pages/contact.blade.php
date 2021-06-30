@extends('layouts.main')
@section('content')
<section class="jumbotron p-mastehead contact-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Get In Touch</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>We love hearing from you! If you have any questions, hit us up.</p>
      </div>
    </div>
  </div>
</section>
<section id="contact1" class="contact contact-1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
              <div class="row mb-30">
                <div class="col-sm-12 col-lg-6">
                  <div class="contact--info">
                    <h3>Address</h3>
                    <p>945 Elliott Ave W,</p>
                    <p>Seattle Wa, 98119</p>
                    <a class="link--styled" href="#">Get Directions</a>
                  </div>
                </div>
                <!-- .col-md-6 end -->
                <div class="col-sm-12 col-lg-6">
                  <div class="contact--info">
                    <h3>Phone</h3>
                    <p>Front of House: 206-219-8652</p>
                    <p>Events: 206-219-8653</p>
                    <a class="link--styled" href="#">Call Us</a>
                  </div>
                </div>
                <!-- .col-md-6 end -->
              </div>
              <!-- .row end -->
              <div class="row">
                <div class="col-12">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.939509897533!2d-122.37195158406925!3d47.62730709453997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015663804bad7%3A0xd388a628225463a!2s945%20Elliott%20Ave%20W%2C%20Seattle%2C%20WA%2098119!5e0!3m2!1sen!2sus!4v1617046604209!5m2!1sen!2sus"
                    width="100%" height="350" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                </div>
                <!-- .col-md-6 end -->
              </div>
              <!-- .row end -->
            </div>
            <!-- .col-md-3 end -->

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div class="contact-form form-block">
                <form>
                  <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control input-field" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control input-field" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control input-field" placeholder="206-555-5555">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control input-field" placeholder="Subject">
                  </div>
                  <label for="message">Message</label>
                  <textarea class="form-control form-control-lg input-field message-field" rows="10"
                    placeholder="Dear Juniper..."></textarea>
                  <button type="submit" class="btn btn-send mt-4">Send</button>
                </form>
              </div>
            </div>
            <!-- .col-md-6 end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection