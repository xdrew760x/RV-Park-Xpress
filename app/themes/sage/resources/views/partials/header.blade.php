@if( class_exists('ACF') )
  <header class="header__master" role="banner" aria-label="Header">
    <div class="w-full mx-auto">
      @switch( get_field('header_component', 'options') )
        @case('header-a')
          @include('partials.headers.header-a')
        @break
        @case('header-b')
          @include('partials.headers.header-b')
        @break

      @endswitch
    </div>
  </header>
@endif
