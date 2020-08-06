{{--
  Title: Featured listing
  Description: Display featured listing with a carousel.
  Category: rv_blocks
  Icon: star-filled
  Keywords: featured-listing
  Mode: preview
  Align: full
  --}}

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section section--carousel" role="region" aria-label="Featured Listings" style="background-color:<?= get_field('featured_bg_color'); ?>">
    <div class="container">
      @include('partials.property.featured-listings')
    </div>
  </section>
  @endif
