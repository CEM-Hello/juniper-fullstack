<div class="mobile-header"></div>
<a href="/">
  <div class="mobile-logo"></div>
</a>
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
  <div class="spinner diagonal part-1"></div>
  <div class="spinner horizontal"></div>
  <div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu">
  <ul class="sidebarMenuInner">
    <li><a href="/">Home</a></li>
    <li><a href="/tasting-room">Tasting Room</a></li>
    <li><a href="/restaurant">Restaurant</a></li>
    <li><a href="/reservations">Reservations</a></li>
    <li><a href="/events">Events</a></li>
    <li><a href="/barrel-club">Barrel Club</a></li>
    <li><a href="/barrel-news">Barrel News</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
</div>

<header>
  <div class="header-position">
    <a href="/">
      <div class="logo"></div>
    </a>
    <nav class="site-nav">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/tasting-room">Tasting Room</a></li>
        <li><a href="/restaurant">Restaurant</a></li>
        <li><a href="/reservations">Reservations</a></li>
        <li><a href="/events">Events</a></li>
        <li><a href="/barrel-club">Barrel Club</a></li>
        <li><a href="/barrel-news">Barrel News</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
    <div class="social-icons">
      <a href="{{$settings["social"]->facebook_url}}" target="new"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
      <a href="{{$settings["social"]->instagram_url}}" target="new"><i class="fab fa-instagram" aria-hidden="true"></i></a>
      <a href="{{$settings["social"]->yelp_url}}" target="new"><i class="fab fa-yelp" aria-hidden="true"></i></a>
    </div>
    <div class="location">
      <div class="address">
       {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
      {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
      </div>
      <div class="phone-number">
        <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
      </div>
    </div>
  </div>
</header>