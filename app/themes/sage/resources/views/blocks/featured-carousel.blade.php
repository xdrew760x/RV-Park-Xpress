{{--
  Title: Featured Carousel Slider
  Description: Display a specified number of featured listings within a carousel Slider.
  Category: rv_blocks
  Icon: star-filled
  Keywords: featured-carousel-slider
  Mode: preview
  Align: full
  --}}

@php
  // Background Color State
  $background_color_state = get_field('featured_bg_color');
@endphp

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section featured--carousel" role="region" aria-label="Featured Listings">
    <div class="container">
      @include('partials.property.featured-listings-carousel')
    </div>
  </section>
  @endif
