@extends('layouts.main')
@section('title')
{{$cocktailItem}} - {{$settings['general']->site_title}}
@endsection
@section('content')
<section class="jumbotron p-mastehead food-menu-banner px-0">
</section>
<section class="page-header">
  <div class="container">
    <div class="page-box head-page-box page-text">
      <div class="page-box__head">
        <h1 class="top-h1-2 subtitle-h1">
          <span>{{$cocktailItem}} Menu</span>
        </h1>
      </div>
      <div class="page-box__body">
        <p>The opportunity to meet and serve you is one we don’t take lightly. Not for the past six years at least. Come
          spend an evening. Our favorite thing in the world is taking care of others, and few places can do it quite
          like we can.</p>
      </div>
    </div>
  </div>
</section>
<section class="menu-single">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h3>{{$cocktailItem}}</h3>
        </div>
        <div class="row">
          @foreach ($cocktailItems as $item)
          <div class="col-sm-6">
            <div class="item">
              <h4>{{$item->title}}</h4>
              <span></span>
              <span>${{$item->price}}</span>
              <p>{{$item->description}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>


@endsection