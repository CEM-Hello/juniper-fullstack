@extends('layouts.main')
@section('title')
The Juniper Shop - {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead products-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Bring Juniper Home</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>Stock your bar cart with Juniper Spirits! Our entire lineup of spirits can be added onto a take-out order for pick-up at the Tasting Room! Call us at 206-219-8652 to get started. (Fridays 5pm-8pm or Sunday 10am-12pm).
        </p>
      </div>
    </div>
  </div>
</section>
<section class="shop">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/tasting-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">Flagship Tasting Kit</h4>
              <p class="card-text">Enjoy the Juniper tasting experience at home! Kits come with 2 oz pours of our three
                flagship spirits. A tasting glass and a guide to help you on your journey.<br><br><span>$25.00</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/starter-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">Juniper Starter Kit</h4>
              <p class="card-text">Stock your bar cart with our flagship spirits! This bundle comes with one Juniper
                Vodka (750ml), one Sunday Gin (750ml), one American Whisky (750ml), and a Juniper canvas
                tote!<br><br><span>$115.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/summer-gin-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">Sunday Gin</h4>
              <p class="card-text">A modern take on American-style gin. Fresh citrus, familiar juniper and an elegant
                floral finish create an elevated, highly drinkable gin.<br><br><span>$22.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/vodka-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">Juniper Vodka</h4>
              <p class="card-text">Not your standard flavorless, odorless vodka. Floral notes give way to a creamy
                vanilla-like sweetness with subtle hints of apple and pear.<br><br><span>$22.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/tequila-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">Tequila Blanco</h4>
              <p class="card-text">Not your standard flavorless, odorless vodka. Floral notes give way to a creamy
                vanilla-like sweetness with subtle hints of apple and pear.<br><br><span>$22.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card product-card">
          <div class="card-horizontal justify-content-between align-items-center">
            <div class="img-square-wrapper">
              <img class="" src="/img/products/whisky-sm.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title">American Whiskey</h4>
              <p class="card-text">Not your standard flavorless, odorless vodka. Floral notes give way to a creamy
                vanilla-like sweetness with subtle hints of apple and pear.<br><br><span>$22.00</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection