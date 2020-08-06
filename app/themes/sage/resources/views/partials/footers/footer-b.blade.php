@php
$footer_background_color = get_field('footer_background_color', 'options');

$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip = get_field('zipcode', 'options');

@endphp


<footer class="py-10 @if($footer_background_color) text-white @endif" role="contentinfo" aria-label="Footer"
style="background-color: {!! $footer_background_color !!};"
>
<div class="w-full max-w-10xl mx-auto px-buffer">

  @php
  $address = get_field('address1', 'options');
  $city = get_field('city', 'options');
  $state = get_field('state', 'options');
  $zip = get_field('zipcode', 'options');
  $contact_hours = get_field('contact_hours', 'options');
  $phone = get_field('phone_number', 'options');
  $email = get_field('email', 'options');
  $contact_hours = get_field('contact_hours', 'options');
  @endphp

  <div class="footer-b">
    <div class="footer__column footer__top md:flex md:flex-row md:items-start md:justify-between">

      <a href="{{ home_url('/') }}" class="footer_branding">
        @if( $branding )
        <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
        @else
        <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
        @endif
      </a>

      <div class="column">
        <h5>Quick Links</h5>

        <nav>
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav footer_nav', 'container' => '']) !!}
          @endif
        </nav>
      </div>

      <div class="column">
        <h5>Contact Us</h5>
        <div itemscope itemtype="http://schema.org/LocalBusiness" class="contact--inner">
          <p itemprop="name" class="site__title mb-0">{!! get_bloginfo() !!}</p>
          <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">{!! $address !!}</span>
            <span itemprop="addressLocality">{!! $city !!}</span>,
            <span itemprop="addressRegion">{!! $state !!}</span>
            <span itemprop="postalCode">{!! $zip !!}</span>
            @if( $address )
            <span><a class="block text-sm" href="https://www.google.com/maps/place+{!! $address !!}+{!! $city !!}"><span class="mobile-none text-white">Get Directions</span></a></span>
            @endif
          </address>
          <p class="contact-info--tel mt-15 mb-0">
            <a itemprop="telephone" href="tel:{!! preg_replace('/[^0-9]/', '', $phone) !!}">{!! $phone !!}</a>
          </p>
          @if($email)
          <p class="contact-info--email">
            <a itemprop="email" href="mailto:{!! $email !!}">{!! $email !!}</a>
          </p>
          @endif
        </div>
      </div>

      @if($contact_hours)
      <div class="column">
        {!! $contact_hours !!}
      </div>
      @endif

      @if( App::siteSocialLinks() )
      <div class="column">
        <a href="#" class="button button--secondary">Book Now</a>

        <div class="social--footer block mt-15">
          @foreach( App::siteSocialLinks() as $link )
          <a class="social-icon inline-flex items-center justify-center w-icon h-icon rounded" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
            <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
            {!! $link['svg'] !!}
          </a>
          @endforeach
        </div>
      </div>
      @endif
    </div>

    <div class="footer__bottom md:flex md:flex-row md:items-end md:justify-between mt-5 pt-5 border-t border-solid border-primary-1">

      <p class="copyright text-xs">
        <span class="md:inline-block">&copy; {{ date('Y') }} {{ App::siteName() }}</span>
        <a href="/ada-compliance/"> | ADA Compliance</a> &#124;
        <a href="/privacy-policy/">Privacy Policy</a>
        <span>| WEBSITE BY <a href="https://www.bigrigmedia.com/outdoor-hospitality-website-development/">BIG RIG MEDIA LLC ®</a></span>
      </p>
    </div>
  </div>
</div>
</footer>
