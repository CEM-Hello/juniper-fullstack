@extends('layouts.main')
@section('title')
{{$settings["general"]->site_title}} Seattle's Destination Distillery
@endsection
@section('content')
<section class="jumbotron h-mastehead px-0">
<div class="h-masthead-inner">
  <h1>Welcome to Seattle's First Destination Distillery</h1>
  <p>Located in the heart of Queen Anne, Juniper Distilling Co. is a 7,300 sq foot, full production distillery,
    tasting room, restaurant and event space</p>
  <a href="#" class="h-top-btn">Read More</a>
</div>
<div class="scroll">
  <div class="scroll-line"></div>
  <div class="scroll-caption">SCROLL</div>
</div>
</section>
<section class="h-intro">
<div class="container-fluid">
  <div class="home-p-products">
    <h2 class="top-h1-2">
      ADVENTURE THROUGH CRAFT
      <span class="text-center">Our Story</span>
    </h2>
    <div class="top-p">
      We believe happiness is a mouthwatering meal and a delicious cocktail with family and friends. At Juniper, we
      have combined the best ingredients, both edible and drinkable, to create a menu and cocktail list that will
      satisfy all Seattle locals, our neighbors, and guests.
    </div>
    <a href="#" class="h-top-btn"><u>Learn More</u></a>
  </div>
</div>
</section>
<section class="hand-crafted">
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-5">
      <div class="home-p1">
        <h2 class="top-h1-2">
          THE COCKTAIL MENU
          <span>Hand Crafted Cocktails</span>
        </h2>
        <div class="top-p">
          The cocktail menu at Juniper Distilling Co. was brought to life with a desire to feature original creations
          while also paying homage to some timeless classics and always highlighting the spirits that we produce in
          house.
        </div>
        <a href="#" class="h-top-btn">Learn More</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="position-relative">
        <div class="row card-gutters">
          <div class="col-sm-6 offset-sm-1 mb-2">
            <img class="img-fluid w-100" src="/img/offset/1.jpg" alt="">
          </div>
          <div class="col-sm-5 align-self-end mb-2">
            <img class="img-fluid w-100" src="/img/offset/3.jpg" alt="">
          </div>
          <div class="col-sm-5 mb-2">
            <span class="restaurant-gallery-wrap-2">
              <img class="img-fluid w-100" src="/img/offset/4.jpg" alt="">
            </span>
          </div>
          <div class="col-sm-6 mb-2">
            <img class="img-fluid w-100" src="/img/offset/2.jpg" alt="">
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
      CRAFT DISTILLED
      <span class="text-center">Our Products</span>
    </h2>
    <div class="top-p">
      Distilling high quality craft spirits is our passion, and we believe you can see this in every product we
      release. Learn about our spirits below.
    </div>
    <a href="#" class="h-top-btn"><u>Learn More</u></a>
  </div>
</div>
<a href="#">
  <img src="/img/h-products.jpg" alt="" class="h-products-bottles">
</a>
</section>
<section class="tasting-room">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-5 tasting-room-gallery order-switch">
      <span class="tasting-room-gallery-wrap">
        <img data-object-fit=true src="/img/h-tasting-room.jpg" alt="" class="img-fluid room-img">
      </span>
    </div>
    <div class="col-lg-6">
      <h2 class="top-h1-2">
        OUR SPACE
        <span>Tasting Room & Event Space</span>
      </h2>
      <div class="top-p">
        Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated imbibing
        experience. Stop by for a cocktail, enjoy a tasting filght or book an event with us. We can accommodate groups
        of up to 85 guests.
      </div>
      <a href="#" class="h-top-btn"><u>Learn More</u></a>
      <div class="tony-text">
        <p>“I had an amazing time at Juniper. The staff were amazing, and they catered to our group with grace, style,
          and
          booooze”</p>
        <b>-Toni T</b>
      </div>
    </div>
  </div>
</div>
</section>
<section class="h-restaurant">
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 restaurant-text">
      <h2 class="top-h1-2">
        FARM TO TABLE
        <span>The Farmhouse</span>
      </h2>
      <div class="top-p">
        We believe in ingredients. Throughout our menu you will find local eggs, non-GMO, organic ingredients, cage
        free chicken and grass-fed beef. We work closely with our local farmers, growers, and purveyors to source
        products with integrity, flavor, and soul.
      </div>
      <div class="top-p pt-3">
        Junipers Wine and Tap Beer list focuses on our incredible winemakers and local brewers and bring you gems you
        may not find anywhere else. The result is Washington food and drink that is honest, straightforward, and pays
        homage to the region we are so lucky to call home.
      </div>
      <a href="#" class="h-top-btn"><u>Learn More</u></a>
    </div>
    <div class="col-lg-5">
      <span class="restaurant-gallery-wrap">
        <img data-object-fit=true src="/img/h-restaurant.jpg" alt="" class="img-fluid restaurant-img">
      </span>
    </div>
  </div>
</div>
</section>
<section class="h-mission">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-5 order-switch">
      <span class="event-room-gallery-wrap">
        <img data-object-fit=true src="/img/h-group.jpg" alt="" class="img-fluid mission-img">
      </span>
    </div>
    <div class="col-lg-6 mission-text">
      <h2 class="top-h1-2">
        OUR MISSON
        <span>It’s about bringing people together.</span>
      </h2>
      <div class="top-p">
        Launched in March of 2013 after almost three years of planning, Juniper Distilling Co. is a full
        production distillery, tasting room, restaurant and event space, complete with a world-class cocktail program
        highlighting
        our current spirits offerings.
      </div>
      <div class="top-p pt-3">
        Salvaged wood, whitewashed brick, exposed concrete, push velvet, denim linen, copper and marble accents come
        together to create a fresh, unique and insta-worthy atmosphere.
      </div>
      <a href="#" class="h-top-btn"><u>Learn More</u></a>
    </div>
  </div>
</div>
</section>

@endsection
