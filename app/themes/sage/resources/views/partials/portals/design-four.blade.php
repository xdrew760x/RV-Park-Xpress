<div class="portal--outer relative">
  <a href="{!! $portal_link !!}" class="portal--bg">
    <div class="bg-image absolute bg-cover bg-center w-full h-full" style="background-image: url({{ $image }});"></div>
  </a>
  @if( $title )
  <a href="{!! $portal_link !!}" class="button button--white">{{ $title }}</a>
  @endif
</div>
