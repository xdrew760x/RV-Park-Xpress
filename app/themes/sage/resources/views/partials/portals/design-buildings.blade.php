<div class="buildings--outer  relative">
  <a href="{!! $portal_link !!}" class="buildings--bg">
    <div class="bg-image absolute bg-cover bg-center w-full h-full" style="background-image: url({{ $image }});"></div>
  </a>
  <div class="content--inner bg-white px-30">
    @if( $title )
    <strong>{{ $title }}</strong>
    @endif

    <div class="col--details">
    {!! $detail !!}
  </div>
  </div>
</div>
