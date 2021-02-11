@php

$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip = get_field('zipcode', 'options');
$map_link = 'https://www.google.com/maps?ll=48.010702,-117.003822&z=13&t=m&hl=en&gl=US&mapclient=embed&cid=8378134758439306205';

$header_booking = get_field('book_now_url', 'options');

$phone = get_field('phone_number', 'options');
$sec_phone = get_field('sec_number', 'options');

$park_map = get_field('park_map', 'options');

$covid = get_field('covid_message_link', 'options');
@endphp

<div class="header-a bg-primary-2 py-15 md:pb-0 md:pt-15">
  <div class="header__top md:py-1">
    <div class="container md:flex md:flex-row md:items-center md:justify-end hidden md:inline-block">

      @if( $phone )
      <a class="text-primary-4 font-sourcesanspro-regular " href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"> <i class="fas fa-phone"></i>{{ $phone }}</a>
      @endif

      @if($address)
      <a href="{!! $map_link !!}" class="md:ml-30 text-primary-4 font-sourcesanspro-regular"><i class="fas fa-map-marker-alt"></i> Get Directions</a>
      @endif

      <a href="https://www.reserveamerica.com/explore/natures-campsites/PRCG/1071450/overview" class="button button--primary ml-0 md:ml-30">Book Now</a>
    </div>
  </div>


  <div class="header__bottom">
    <div class="container md:pt-2 flex items-center justify-between md:justify-end relative">
      <button class="w-hamburger h-hamburger md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
        <span id="toggle-navigation" hidden>Toggle Navigation</span>
        <span class="block relative w-full h-hamburger"></span>
      </button>

      <a class="header__branding w-full max-w-brand md:w-auto md:max-w-initial md:mx-0" href="{{ home_url('/') }}">
        @if( $branding )
        <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
        @else
        <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
        @endif
      </a>

      <div class="mobile--contact desktop--none">
        @if( $phone )
        <a class="text-primary-4 desktop-none" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"> <i class="fas fa-phone"></i></a>
        @endif

        @if($address)
        <a href="{!! $map_link !!}" class="ml-2 text-primary-4 desktop-none"><i class="fas fa-map-marker-alt"></i></a>
        @endif
      </div>




      <nav class="flex items-start md:items-center">

        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav-a nav md:flex md:justify-end', 'container' => '']) !!}
        @endif

        <div class="mobile__meta mt-15">
          @if( $phone )
          <a class="block md:hidden py-3" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"><i class="fas fa-phone"></i> {{ $phone }}</a>
          @endif

          @if($address)
          <a href="{!! $map_link !!}" class="block md:hidden py-3"><i class="fas fa-map-marker-alt"></i> Get Directions</a>
          @endif

          @if( $park_map )
          <a class="block md:hidden py-3" href="{!! $park_map !!}"><i class="fas fa-map"></i> Park Map</a>
          @endif

          <a href="https://www.reserveamerica.com/explore/natures-campsites/PRCG/1071450/overview" class="button button--secondary mt-15 desktop-none">Book Now</a>
        </div>
      </nav>
    </div>
  </div>
</div>
