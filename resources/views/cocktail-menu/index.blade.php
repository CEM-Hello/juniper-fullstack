@extends('layouts.main')
@section('content')
<section class="jumbotron p-mastehead tasting-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Tasting Room</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Juniper Distillery produces small, hand-crafted batches of Gins, Vodkas, Whiskeys. This is the real
          deal—spirits made with a sense of place and a connection to the people who grew the raw ingredients and the
          man who coaxed them into their more spirited forms—gins in which you can taste the botanicals, distinctive
          vodkas, and whiskeys that are flavorful and smooth.</p>
      </div>
    </div>
  </div>
</section>
<section class="h-intro">
  <div class="container">
    <div class="home-p-products">
      <h2 class="top-h1-2">
        <span class="text-center">Cocktail Menu</span>
      </h2>
    </div>
  </div>
</section>
<section class="menu-categories">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-md-6 col-lg-2">
        <div class="food-cat-item">
          <a href="#">
            <img src="/img/gin.jpg" alt="" class="img-fluid food-cat-img">
            <h3>Gin</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-2">
        <div class="food-cat-item">
          <a href="#">
            <img src="/img/tequila.jpg" alt="" class="img-fluid food-cat-img">
            <h3>Tequila</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-2">
        <div class="food-cat-item">
          <a href="#">
            <img src="/img/vodka.jpg" alt="" class="img-fluid food-cat-img">
            <h3>Vodka</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-2">
        <div class="food-cat-item">
          <a href="#">
            <img src="/img/whiskey.jpg" alt="" class="img-fluid food-cat-img">
            <h3>Whiskey</h3>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="hand-crafted mb-5">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <div class="home-p1">
          <h2 class="top-h1-2">
            <span>Our Spirit</span>
          </h2>
          <div class="top-p">
            At Juniper, we want to awaken your palette and inspire you to pause, reflect and ultimately savor the things
            that make life meaningful. Namely: Good friends. Deep relationships. Art in its many forms. People have been
            transforming humble grains into noble spirits since the third century, and we proudly join this long line of
            adventurers, fools and alchemists.
          </div>
          <div class="top-p pt-3">
            Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated
            imbibing experience. Stop by for a cocktail, enjoy a tasting flight or book an event with us. We can
            accommodate groups of up to 85 guests.
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative">
          <div class="row card-gutters">
            <div class="col-sm-6 offset-sm-1 mb-2">
              <img class="img-fluid w-100" src="/img/offset3/1.jpg" alt="">
            </div>
            <div class="col-sm-5 align-self-end mb-2">
              <img class="img-fluid w-100" src="/img/offset3/3.jpg" alt="">
            </div>
            <div class="col-sm-5 mb-2">
              <span class="restaurant-gallery-wrap-2">
                <img class="img-fluid w-100" src="/img/offset3/4.jpg" alt="">
              </span>
            </div>
            <div class="col-sm-6 mb-2">
              <img class="img-fluid w-100" src="/img/offset3/2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="quote-block">
    <div class="quote-text">
      <p>“Distilling is like alchemy. Infusions can be artistic and create something new. Each day I walk into Juniper,
        I aim to reach what I call the zone of genius rather than the place we all often find ourselves, the zone of
        competence.”</p>
      <b>-Mark</b>
    </div>
  </div>
</section>


@endsection