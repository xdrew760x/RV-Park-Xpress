{{--
  Title: Property Sale by Owner
  Description: Display properties for Sale by Owner.
  Category: property_blocks
  Icon: star-filled
  Keywords: all-listings
  Mode: preview
  Align: full
  --}}

  @php

  //// Post Query and Args
  //
  $all_listing = new WP_Query([
  'post_type'       =>  array('properties'),
  'paged'           => get_query_var('paged') ? get_query_var('paged') : 1,
  'posts_per_page'  => 15,
  'orderby'         => 'date',
  'order'         	=> 'DESC',

  'tax_query'       => array(
  array(
  'taxonomy'        => 'property_type',
  'field'           => 'slug',
  'terms'           => 'for-sale-by-owner',
  ),),]);

  @endphp

  @php
  $terms = get_terms( array(
  'taxonomy' => 'property_type',
  'hide_empty' => false,
  ) );
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/margin-col.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section property__listings preview-none" role="region" aria-label="All Property Listings">
    <div class="container">
      @include('partials.property.property-listings')
    </div>
  </section>
  @endif
