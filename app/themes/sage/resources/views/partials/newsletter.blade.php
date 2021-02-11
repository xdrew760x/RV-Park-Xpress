@php
$nl_bg_c = get_field('nl_bg_c');
$nl_bg_img = get_field('nl_bg_img');
$nl_blurb = get_field('news_blurb');

@endphp

<div class="block_preview hidden w-full">
  <img src="/app/themes/sage/resources/assets/images/block-previews/news-letter.png" class="w-full" alt="{{ $block['keywords'][0] }}">
</div>


<section class="preview-none section__newsletter px-15 bg-primary-4">
  <div class="container px-15 py-45 md:flex md:justify-between md:items-center">
    <div class="md:w-1/2 border-right md:pr-30">
      <p><strong>Sign up for Our Newsletter for Special Offers and Announcements</strong></p>

      {!! do_shortcode('[gravityform id="1" title="false" description="false"]') !!}
    </div>


    @if( App::siteSocialLinks() )
    <div class="social__media md:w-1/2">
      <p class="text-center"><strong>Follow Us</strong></p>
      <div class="flex justify-center md:justify-center">
        @foreach( App::siteSocialLinks() as $link )
        <a class="social-icon inline-flex items-center justify-center rounded" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
          <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
          {!! $link['svg'] !!}
        </a>
        @endforeach
      </div>
    </div>
    @endif
  </div>
</section>
