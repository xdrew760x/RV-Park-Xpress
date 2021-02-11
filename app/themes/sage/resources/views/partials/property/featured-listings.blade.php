@php
$listings_cnt = get_field('post_count');
$post_type_selection = get_field('post_type_selection');
$margin_value = get_field('margin_value');

@endphp

@switch( get_field('post_type_selection') )
@case('coyote-ranch')
@php
$taxonomy = 'properties_featured_coyote';
@endphp
@break
@case('tuscany-park')
@php
$taxonomy = 'properties_featured_tuscany';
@endphp
@break
@case('cactus-ranch')
@php
$taxonomy = 'properties_featured_cactus';
@endphp
@break
@case('ranch-rialto')
@php
$taxonomy = 'properties_featured_rialto';
@endphp
@break
@case('araby-acres')
@php
$taxonomy = 'properties_featured_araby';
@endphp
@break
@case('las-quintas-oasis')
@php
$taxonomy = 'properties_featured_quinta_oasis';
@endphp
@default
@break
@endswitch


@php
$posts = get_posts([
'post_type'       => $post_type_selection,
'posts_per_page'  => 1,
'paged'           => (get_query_var('paged')) ? get_query_var('paged') : 1,
'meta_key' => 'property_price',
'orderby'  => 'meta_value_num',
'order'	=> 'DESC',
'tax_query' => array(
            array(
            'taxonomy' => $taxonomy,
             'field'    => 'slug',
             'terms'    => array('featured'),
                ),
            ),

]);
@endphp


@if(is_admin())
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
@endif

<script type="text/javascript">

jQuery(document).ready( function($){

  $('.js-carousel-featured').slick({
    accessibility: true,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 15000,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    nextArrow: '<div class="next"><i class="fas fa-chevron-right"></i></div>',
    prevArrow: '<div class="prev"><i class="fas fa-chevron-left"></i></div>',
  });
});

</script>

@foreach( $posts as $listing )
<section id="{{ $block['keywords'][0] }}" class="section section--carousel" role="region" aria-label="Featured Listings" style="background-color:<?= get_field('featured_bg_color'); ?>">
  <div class="container">


<div class="brm-featured-listings">

  @php
  $field = get_field_object('post_type_selection');
  $value = get_field('post_type_selection');
  $label = $field['choices'][ $value ];

  $community_type = get_field('property_community_type',$listing->ID);
  $street_address = get_field('street_address', $listing->ID);
  $street_city = get_field('property_city',$listing->ID);
  $state_location = get_field('property_state', $listing->ID);
  $property_zipcode = get_field('property_zipcode', $listing->ID);
  $gallery = get_field('property_gallery', $listing->ID);
  $price = get_field('property_price', $listing->ID);
  $sale_status = get_field('sale_status', $listing->ID);

  @endphp

  <div class="brm-featured-listing" style="margin-top: {!! $margin_value !!}px ;">
    <div class="column w-full h-full md:w-1/2 js-carousel-featured relative overflow-hidden">

      @if ( $gallery )
      @php foreach ( $gallery as $gallery_item ) { @endphp
        <a href="{!! get_permalink($listing->ID) !!}">
          <div class="featured__image {!! $sale_status !!}" style="background-image: url({!! $gallery_item['sizes']['w960x562'] !!})"></div>
        </a>
        @php } @endphp
        @endif
      </div>
      <div class="column w-full md:w-1/2 py-30 px-15 md:px-45 bg-white">
        <small class="small-style">Featured Listing</small>
        <a href="{!! get_permalink($listing->ID) !!}"><h1 class="mb-2"> {{ $listing->post_title }} <!-- {!! $label !!} {{ $community_type }}--></h1></a>
        <small class="featured-style">{!! $street_address !!}<br>
          {!! $street_city !!}, {!! $state_location !!} {!! $property_zipcode !!}
          <br>${!! number_format($price) !!}</small>
          <div class="featured--desc">
            <p>{!! apply_filters('the_excerpt', $listing->post_content); !!}</p>
          </div>
          <a href="{!! get_permalink($listing->ID) !!}" class="button button--primary mt-15">View Full Listing</a>
        </div>
      </div>
    </div>
  </div>
</section>

    @php wp_reset_postdata() @endphp
    @endforeach
