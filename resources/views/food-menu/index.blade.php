@extends('layouts.main')
@section('title')
The Farmhouse @ {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead restaurant-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Restaurant</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Since 2015 we have served delicious American cuisine locally sourced from area farmers, ranchers and food
          artisans. Delectable and creative dishes prepared by our award-winning Chef Aaron are enjoyed in our
          intimate dining room and award-winning patio.</p>
      </div>
    </div>
  </div>
</section>
<section class="h-intro">
  <div class="container">
    <div class="home-p-products">
      <h2 class="top-h1-2">
        <span class="text-center">Our Menu</span>
      </h2>
    </div>
  </div>
</section>
<section class="menu-categories">
  <div class="container">
    <div class="row justify-content-center text-center">
      @foreach ($categories as $category)
      <div class="col-12 col-md-6 col-lg-2">
        <div class="food-cat-item">
          <a href="/food-menu/{{$category->title}}">
            <img src="{{$category->image_url}}" alt="" class="img-fluid food-cat-img">
            <h3>{{$category->title}}</h3>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="hand-crafted">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <div class="home-p1">
          <h2 class="top-h1-2">
            <span>Our Space</span>
          </h2>
          <div class="top-p">
            Our space has been brought back to life by uncovering our brick wall and original high windows that were
            covered sometime in the early 20th century. We love the warmth and light those elements brought to our funky
            modern space. Our balcony level can accommodate large groups in any number up to 55 guests.
          </div>
          <div class="top-p pt-3">
            We love Seattle, mostly because its cool without trying too hard. We wanted to capture that essence in our
            restaurant. We want you to feel like you are enjoying something special, but you don’t have to get dressed
            up or be fancy to do so (unless you want to, and that’s cool too. We aren’t afraid of a little black dress).
            <div class="fancy-text">
              That is Seattle.<br>
              That is Juniper.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative">
          <div class="row card-gutters">
            <div class="col-sm-6 offset-sm-1 mb-2">
              <img class="img-fluid w-100" src="/img/offset2/1.jpg" alt="">
            </div>
            <div class="col-sm-5 align-self-end mb-2">
              <img class="img-fluid w-100" src="/img/offset2/3.jpg" alt="">
            </div>
            <div class="col-sm-5 mb-2">
              <span class="restaurant-gallery-wrap-3">
                <img class="img-fluid w-100" src="/img/offset2/4.jpg" alt="">
              </span>
            </div>
            <div class="col-sm-6 mb-2">
              <img class="img-fluid w-100" src="/img/offset2/2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="h-intro">
  <div class="container">
    <div class="home-p-products">
      <h2 class="top-h1-2">
        <span class="text-center">Our Team</span>
      </h2>
      <div class="top-p">
        We offer the best ingredients for you<br>
        Form the best in the business<br>
      </div>
    </div>
  </div>
</section>
<section class="section" id="chefs">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <img src="/img/mark.jpg" alt="Chef #1">
          </div>
          <div class="down-content">
            <h4>Mark Aaron</h4>
            <span>Head Chef</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <img src="/img/dave.jpg" alt="Chef #2">
          </div>
          <div class="down-content">
            <h4>David Martin</h4>
            <span>Sous Chef</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <img src="/img/chris.jpg" alt="Chef #3">
          </div>
          <div class="down-content">
            <h4>Chris Glenn</h4>
            <span>Sauté Chef</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <img src="/img/anne.jpg" alt="Chef #3">
          </div>
          <div class="down-content">
            <h4>Anne Perkson</h4>
            <span>Pastry Chef</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="h-intro">
  <div class="container">
    <div class="home-p-products">
      <h2 class="top-h1-2">
        <span class="text-center">Our Hours</span>
      </h2>
      <div class="top-p">
        For TO-GO orders call 206-219-8652<br>
        We are open Monday through Saturday 11am to midnight.<br>
        Brunch every Sunday 8am to 1:30pm.
      </div>
    </div>
  </div>
</section>
<section class="open-hours">
  <div class="container">
    <div class="hours-block">
      <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 col-lg-4">
          <h3 class="text-center">SERVING LUNCH 11-3<br>
            & <br>
            TO-GO 11-9</h3>
          <p>We welcome you to walk in Mon-Sun starting at 11:00am to enjoy favorites like our grilled cheese, the
            classic
            Kale & Eggs or a hearty burger. Check out our Pub Food and To-Go <a href="/food-menu/pub%20food"
              class="hours-block-btn">menu</a> for all your options.</p>
        </div>
        <div class="col-sm-12 col-lg-8">
          <img src="/img/lunch-hours.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="hours-block">
      <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 col-lg-8 order-switch">
          <img src="/img/dinner-hours.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-sm-12 col-lg-4">
          <h3 class="text-center">SERVING DINNER<br>
            4:30-10:00</h3>
          <p>We've designed our new menu to highlight and support local farms, winemakers & purveyors . Nothing is more
            important to us than this community and we will continue to do everything we can to see that it thrives.
            Check out our dinner <a href="/food-menu/entrees" class="hours-block-btn">menu</a> or make a <a href="/reservations"
              class="hours-block-btn">reservation</a>. Patio seating first come, first serve.</p>
        </div>
      </div>
    </div>
    <div class="hours-block">
      <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 col-lg-4">
          <h3 class="text-center">BAR & PATIO SNACKS<br>
            4:30-CLOSE</h3>
          <p>Come enjoy our new small plates served daily at our bar and patio. The perfect snack for people watching
            under our umbrellas or getting cozy at the bar, these small bites are made with local ingredients and are a
            perfect pairing for a summer cocktail or glass of wine.<br>
            <a href="/food-menu/starters" class="hours-block-btn">See Menu</a></p>
        </div>
        <div class="col-sm-12 col-lg-8">
          <img src="/img/patio-hours.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <div class="quote-block">
    <div class="quote-text">
      <p>“…Juniper is like one great love story about Seattle that never gets tired of being told…”</p>
      <b>-Seattle Times</b>
    </div>
  </div>
</section>

@endsection