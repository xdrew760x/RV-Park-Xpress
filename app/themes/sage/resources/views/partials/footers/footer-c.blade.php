@php

$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zipcode = get_field('zipcode', 'options');
$map_link = 'https://www.google.com/maps/place/' . $address;

$footer_content = get_field('footer_content', 'options');

@endphp

<footer class="footer-c pt-30 pb-60" role="contentinfo" aria-label="Footer">
  <div class="container">

    <div class="footer__column flex flex-row flex-wrap items-center justify-center pt-30">
      <div class="footer__social w-full md:w-1/2 text-center">
        <strong class="text-white">We're Social</strong>
        @if( App::siteSocialLinks() )
        <div class="social__media w-full flex justify-center">
          @foreach( App::siteSocialLinks() as $link )
          <a class="social-icon inline-flex items-center justify-center w-icon h-icon rounded text-primary-1" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
            <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
            {!! $link['svg'] !!}
          </a>
          @endforeach
        </div>
        @endif
      </div>
      <div class="footer__newsletter text-center w-full md:w-1/2">
        <strong class="text-white">Sign Up For Our Newsletter</strong>
        {!! do_shortcode('[gravityform id="2" title="false" description="false"]') !!}
      </div>
    </div>

    <hr>

    <div class="footer--location text-center text-white">
      @if($address)
      <a href="https://www.google.com/maps/dir/Current+Location/{!! $address !!}+{!! $city !!}+{!! $state !!}+{!! $zipcode !!}" class="text-white font-raleway-regular">
        <i class="fal fa-map-marker-alt"></i> {!! $address !!} {!! $city !!}, {!! $state !!} {!! $zipcode !!}
      </a>
      @endif

      <span class="font-raleway-regular px-4 text-white">|</span>

      @if( $phone )
      <a class="text-white font-raleway-regular" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">
        <i class="fal fa-phone-alt mr-2"></i> {{ $phone }}
      </a>
      @endif

      <span class="font-raleway-regular px-4 text-white">|</span>

      @if($email)
      <a itemprop="email" href="mailto:{!! $email !!}" class="text-white font-raleway-regular"><i class="fal fa-envelope mr-2"></i> {!! $email !!}</a>
      @endif
    </div>

    <hr>

    <nav class="mobile-none">
      @if (has_nav_menu('footer_navigation_c'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation_c', 'menu_class' => 'nav footer_nav', 'container' => '']) !!}
      @endif
    </nav>

    <div class="footer__column md:flex md:flex-row md:items-center md:justify-between mt-5">
      <div class="w-full mt-5 md:mt-0">
        <p class="copyright text-xs text-center">
          <span class="md:inline-block font-lato-bold text-primary-1">&copy; Copyright {{ date('Y') }} {{ App::siteName() }} </span>
          <a href="/ada-compliance/" class="font-lato-bold text-primary-4">| ADA Compliance</a>
          <a href="/privacy-policy/" class="font-lato-bold text-primary-4">| Privacy Policy</a>
          <span class="font-lato-bold text-primary-1">| WEBSITE BY <a href="https://www.bigrigmedia.com/outdoor-hospitality-website-development/" class="font-lato-bold text-primary-1">Big Rig Media LLC®</a></span>
        </p>
      </div>
    </div>
  </div>
</footer>

<a href="/book-now/" class="button button--primary button--sticky desktop-none">Book Now</a>
