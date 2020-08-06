@php

$header_cta = get_field('header_cta', 'options');
$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip = get_field('zipcode', 'options');
$header_booking = get_field('book_now_url', 'options');

@endphp

<div class="header-a">

  @if($phone || $header_booking || $header_cta)
  <div class="header__top bg-primary-1 text-white">
    <div class="container">
      @if($header_cta)
      <h6 class="mobile-none">{!! $header_cta !!}</h6>
      @endif

      <div class="header__contact flex justify-start items-center">
        @if( $phone )
        <a class="inline-block text-sm" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"><img src="/app/themes/sage/resources/assets/images/tele-right.svg" class="inline-block"><span class="mobile-none text-white">{{ $phone }}</span></a>
        @endif

        @if( $address )
        <a class="inline-block text-sm" href="https://www.google.com/maps/place+{!! $address !!}+{!! $city !!}"><i class="fas fa-map-marker-alt"></i> <span class="mobile-none text-white">Get Directions</span></a>
        @endif
      </div>

      @if($header_booking)
      <a class="button button--secondary" href="{!! $header_booking !!}">Book Now</a>
      @endif

      <button class="w-hamburger h-hamburger md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
        <span id="toggle-navigation" hidden>Toggle Navigation</span>
        <span class="block relative w-full h-hamburger"></span>
      </button>

    </div>
  </div>
  @endif

  <div class="header__bottom">
    <div class="container flex items-center justify-center md:justify-between">
      <a class="header__branding w-full max-w-brand md:w-auto md:max-w-initial md:mx-0" href="{{ home_url('/') }}">
        @if( $branding )
        <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
        @else
        <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
        @endif
      </a>
      <nav>
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav-a w-full md:w-auto nav', 'container' => '']) !!}
        @endif

        @if( $phone )
        <a class="block desktop-none mt-15" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"><img src="/app/themes/sage/resources/assets/images/tele-right.svg" class="inline-block"><span class="text-white">{{ $phone }}</span></a>
        @endif

        @if( $address )
        <a class="block text-sm mt-15 desktop-none" href="https://www.google.com/maps/place+{!! $address !!}+{!! $city !!}"><i class="fas fa-map-marker-alt"></i> <span class="text-white">Get Directions</span></a>
        @endif

        @if($header_booking)
        <a class="button button--secondary mt-15 desktop-none" href="{!! $header_booking !!}">Book Now</a>
        @endif
      </nav>
    </div>
  </div>

</div>
