@if( App::siteSocialLinks() )
<section class="py-15 md:py-30 section--social bg-primary-4">
  <div class="container">
    <div class="social__media w-full flex justify-center">
      @foreach( App::siteSocialLinks() as $link )
      <a class="social-icon inline-flex items-center justify-center w-icon h-icon rounded text-primary-1" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
        <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
        {!! $link['svg'] !!}
      </a>
      @endforeach
    </div>
  </div>
</section>
@endif
