@extends('layouts.main')
@section('title')
Barrel News - {{$settings["general"]->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead cocktail-menu-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>Craft Cocktails & Food From Our Family To Yours!</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>The cocktail and food menu at Juniper Distilling Co. was brought to life with a desire to feature original
          creations while also paying homage to some timeless classics and always highlighting the spirits and food that
          we
          produce in-house. Below is a list of some of our classics so you can try them at home!</p>
      </div>
    </div>
  </div>
</section>
<section class="blog-container">
  <div class="container">
    <div class="press-list">
      <div class="press-list__item">
        <div class="press-list__thumb">
          <img width="640" height="355" src="/img/blog/blog-img.jpg" alt="">
        </div>
        <div class="press-list__content">
          <h3>Canta-Keep Us Down</h3>
          <p></p>
          <p>Add all ingredients to a shaker without ice. Shake very well until egg white becomes frothy. Add ice and
            shake…</p>
          <p></p>
          <a href="#" class="h-top-btn">Read More</a>
        </div>
      </div>
      <div class="press-list__item">
        <div class="press-list__thumb">
          <img width="640" height="355" src="/img/blog/blog-img.jpg" alt="">
        </div>
        <div class="press-list__content">
          <h3>Canta-Keep Us Down</h3>
          <p></p>
          <p>Add all ingredients to a shaker without ice. Shake very well until egg white becomes frothy. Add ice and
            shake…</p>
          <p></p>
          <a href="#" class="h-top-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection