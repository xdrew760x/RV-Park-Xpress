<footer class="py-10 bg-primary-3 text-white" role="contentinfo" aria-label="Footer">
  <div class="w-full max-w-10xl mx-auto px-buffer">

    <div class="footer-a">

      <div class="footer__column footer__top md:flex md:flex-row md:items-center md:justify-between">

        <a href="{{ home_url('/') }}" class="footer_branding">
          @if( $branding )
          <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
          @else
          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
          @endif
        </a>

        <nav>
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav footer_nav', 'container' => '']) !!}
          @endif
        </nav>

      </div>

      <div class="footer__column footer__bottom md:flex md:flex-row md:items-center md:justify-between mt-5 pt-5 border-t border-solid border-primary-5">

        @if( App::siteSocialLinks() )
        <div class="social_icons w-full md:w-1/3">
          @foreach( App::siteSocialLinks() as $link )
          <a class="social-icon inline-flex items-center justify-center rounded" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
            <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
            {!! $link['svg'] !!}
          </a>
          @endforeach
        </div>
        @endif

        <div class="w-full md:w-2/3 mt-5 md:mt-0">
          <p class="copyright text-xs text-white">
            <span class="md:inline-block">&copy; {{ date('Y') }} {{ App::siteName() }}</span>
            <a href="/ada-compliance/"> | ADA Compliance</a> &#124;
            <a href="/privacy-policy/">Privacy Policy</a>
            <span>| WEBSITE BY <a href="https://www.bigrigmedia.com/outdoor-hospitality-website-development/">BIG RIG MEDIA LLC ®</a></span>
          </p>
        </div>

      </div>
    </div>
  </div>
</footer>
