{{--
  Title: All Property Listings
  Description: Display all listings with various display controls.
  Category: rv_blocks
  Icon: star-filled
  Keywords: all-listings
  Mode: preview
  Align: full
  --}}

@php
  // Background Color State
  $background_color_state = get_field('all_bg_color');
@endphp

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section property__listings" role="region" aria-label="All Property Listings">
    <div class="container">
      @include('partials.property.property-listings')
    </div>
  </section>
  @endif
