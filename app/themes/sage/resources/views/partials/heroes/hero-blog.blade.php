@php

$max_height = get_field('hero_height', 'options');
$hero_image = get_field('hero_image', 'options');
$content = get_field('hero_content', 'options');
$display_search_form = get_field('display_search_form', 'options');
@endphp

<section class="w-full brm-hero" role="region" aria-label="Hero">
  <div class="section-brm--hero flex flex-col flex-wrap justify-center items-center bg-no-repeat" style="background-image:url({!! $hero_image !!}); min-height: {!! $max_height !!}px;" >
    <div class="hero_content text-white mx-auto block w-full" style="min-height: {!! $max_height !!}px;">
      <div class="hero_content--container container text-center">
      </div>
    </div>
  </div>
</section>

@if($content)
<section class="py-45 pb-0 md:pt-60 md:pb-30">
  <div class="container">
    {!! $content !!}
  </div>
</section>
@endif
