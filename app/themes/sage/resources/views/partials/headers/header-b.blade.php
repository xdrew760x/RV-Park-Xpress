<!---
Header B
----->

@php
$header_cta = get_field('header_cta', 'options');
$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip = get_field('zipcode', 'options');
@endphp

<div class="header-b">
  <div class="header__top">
    <div class="container md:flex md:flex-row md:items-center md:justify-between md:-mb-5">
      <div class="col--left">

        @if( $phone )
        <a class="md:inline-block text-sm md:pr-30 small-style mobile-none text-white" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">
          <i class="fal fa-phone-alt"></i> <span class="mobile-none font-raleway-regular text-white">{{ $phone }}</span>
        </a>
        @endif

        @if($address)
        <a href="https://www.google.com/maps/dir/Current+Location/{!! $address !!}+{!! $city !!}+{!! $state !!}+{!! $zipcode !!}" class="hidden md:inline-block small-style text-white uppercase">
          <i class="fal fa-map-marker-alt"></i> Get Directions
        </a>
        @endif

      </div>

      <div class="col--right items-center">

        <a class="button button--secondary ml-30 mobile-none" href="/book-now/">Book now</a>

        <button class="w-hamburger h-hamburger md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
          <span id="toggle-navigation" hidden>Toggle Navigation</span>
          <span class="block relative w-full h-hamburger"></span>
        </button>


      </div>
    </div>
  </div>

  <div class="header__bottom">
    <div class="container md:flex md:flex-row md:items-start md:justify-between md:flex-wrap md:-mb-5">

      <div class="mobile--contact table mx-auto mr-0">
        @if( $phone )
        <a class="ml-auto desktop-none text-primary-1" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" aria-labelledby="call">
          <i class="fal fa-phone-alt"></i>
        </a>
        @endif

        @if($address)
        <a href="https://www.google.com/maps/place/{!! $address !!}+{!! $city !!}+{!! $state !!}+{!! $zip !!}" class="text-primary-1 ml-15 desktop-none"><i class="fal fa-map-marker-alt"></i></a>
        @endif
      </div>

      <nav class="mobile-open">


        @if (has_nav_menu('primary_type_b_left'))
        {!! wp_nav_menu(['theme_location' => 'primary_type_b_left', 'menu_class' => 'nav nav--left', 'container' => '']) !!}
        @endif

        <a class="header__branding" href="{{ home_url('/') }}">
          @if( $branding )
          <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
          @else
          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
          @endif
        </a>

        @if (has_nav_menu('primary_type_b_right'))
        {!! wp_nav_menu(['theme_location' => 'primary_type_b_right', 'menu_class' => 'nav nav--right', 'container' => '']) !!}
        @endif

        <div class="col--right mt-15">
          @if( $phone )
          <a class="mobile--tele ml-auto desktop-none text-primary-1 font-raleway-regular" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" aria-labelledby="call">
            <i class="fal fa-phone-alt"></i> {{ $phone }}
          </a>
          @endif

          @if($address)
          <a href="https://www.google.com/maps/place/{!! $address !!}+{!! $city !!}+{!! $state !!}+{!! $zip !!}" class="mobile--tele ml-15 desktop-none text-primary-1 font-raleway-regular"><i class="fal fa-map-marker-alt"></i> <span class="hidden md:ml-15 text-primary-1 font-raleway-regular">Get Directions</span></a>
          @endif

          <a class="button button--primary mt-2 hidden" href="/book-now/">Book now</a>

        </div>


      </nav>

    </div>
  </div>


</div>
