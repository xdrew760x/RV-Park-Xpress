{{--
  Title: All Property Listings
  Description: Display all listings with various display controls.
  Category: property_blocks
  Icon: star-filled
  Keywords: all-listings
  Mode: preview
  Align: full
  --}}

  @if(is_front_page())
  @php
  //// Post Query and Args
  //
  $all_listing = new WP_Query([
  'post_type'       =>  array('properties'),
  'posts_per_page'  => -1,
  'paged'           => (get_query_var('paged')) ? get_query_var('paged') : 1,
  'orderby'  => 'date',
  'order'	=> 'DESC',
  ]);
  @endphp
  @else
  @php
  //// Post Query and Args
  //
  $all_listing = new WP_Query([
  'post_type'       =>  array('properties'),
  'posts_per_page'  => 15,
  'paged'           => (get_query_var('paged')) ? get_query_var('paged') : 1,
  'orderby'  => 'date',
  'order'	=> 'DESC',
  ]);
  @endphp
  @endif

  @php
  $terms = get_terms( array(
  'taxonomy' => 'property_type',
  'hide_empty' => false,
  ) );

  $listing_blurb = get_field('block_blurb');
  $background_color = get_field('background_color');
  $block_image = get_field('block_image');
  $background_state = !empty(get_field('block_image')) ? 'js-background' : null;
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/margin-col.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section property__listings preview-none {!! $background_state !!} {!! $background_color !!}" role="region" aria-label="All Property Listings">
    <div class="container">

      @if($listing_blurb)
      {!! $listing_blurb !!}
      @endif

      @include('partials.property.property-listings')
</div>
</section>
@endif
