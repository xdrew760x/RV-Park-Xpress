{{--
  Title: Newsletter
  Description: Produces a column containing a news letter form
  Category: general_blocks
  Icon: format-quote
  Keywords: news letter
  Mode: preview
  Align: full
  --}}

@php
$nl_bg_c = get_field('nl_bg_c');
$nl_bg_img = get_field('nl_bg_img');
$nl_blurb = get_field('news_blurb');

@endphp

<div class="block_preview hidden w-full">
  <img src="/app/themes/sage/resources/assets/images/block-previews/news-letter.png" class="w-full" alt="{{ $block['keywords'][0] }}">
</div>


<section class="preview-none section__newsletter px-15 py-30 md:py-0 bg-cover bg-center {!! $nl_bg_c !!}"
  style="
  background-image: url({!! $nl_bg_img !!});
  ">
  <div class="container px-15 py-30 md:py-75 md:flex md:justify-between md:items-center">
    <div class="md:w-1/2 text-center md:text-left md:flex md:justify-center md:items-center">
      {!! $nl_blurb !!}

      {!! do_shortcode('[gravityform id="13" title="false" description="false"]') !!}
    </div>


    @if( App::siteSocialLinks() )
    <div class="social__media md:w-1/2 flex justify-center md:justify-end">
      @foreach( App::siteSocialLinks() as $link )
      <a class="social-icon inline-flex items-center justify-center w-icon h-icon rounded" href="{{ $link['url'] }}" aria-labelledby="{{ strtolower($link['title']) }}">
        <span id="{{ strtolower($link['title']) }}" hidden>{{ $link['title'] }}</span>
        {!! $link['svg'] !!}
      </a>
      @endforeach
    </div>
    @endif
  </div>
</section>
