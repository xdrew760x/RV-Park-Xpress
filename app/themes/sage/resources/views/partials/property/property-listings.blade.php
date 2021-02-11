
@if(is_admin())
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
@endif

@if(is_front_page() || is_admin())
<script type="text/javascript">

jQuery(document).ready( function($){

  $('.section--homesale').slick({
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 15000,
    fade: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,

    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

</script>
@endif

<div class="section--homesale md:flex md:flex-row md:justify-start">
  @while ($all_listing->have_posts()) @php $all_listing->the_post(); @endphp

  @php
  $lot = get_post_field('lot_number');
  $price = get_post_field('price');
  $bathrooms = get_post_field('properties_bath');
  $bedrooms = get_post_field('properties_bedrooms');
  $featured_img_url = get_the_post_thumbnail_url();
  $price_reduced = get_post_field('price_reduced');

  $terms = wp_get_post_terms( get_the_ID(), 'property_type');
  @endphp


  <div class="property--item w-full sm:w-1/2 md:w-1/3 mt-30 px-15">
    <div class="column-property-img">
      @if($featured_img_url)
      <a href="{!! get_permalink() !!}">
        <div class="property--image bg-cover bg-center @foreach($terms as $term) {!! $term->slug !!} @endforeach" style="background-image: url({!! $featured_img_url !!})"></div>
      </a>
      @else
      <a href="{!! get_permalink() !!}">
        <div class="property--image bg-contain bg-no-repeat bg-center {!! $sale_status !!} border-1 @foreach($terms as $term) {!! $term->slug !!} @endforeach" style="background-image: url('/app/uploads/2021/01/bincon-logo.svg');"></div>
      </a>
      @endif
    </div>

    <div class="column-content text-center p-30 bg-white">
      <h4 class="mb-0">{{ the_title() }}</h4>

      @if($price_reduced)
      <h6 class="my-2">{!! $price_reduced !!}</h6>
      @endif

      @if($lot || $bedrooms || $bathrooms)
      <p class="text-primary-1">@if($lot) Lot# {!! $lot !!} <br> @if($price) ${!! number_format( $price, 0 ) !!} @endif <span class="text-white px-2">|</span> @endif  @if($bedrooms) BD: {!! $bedrooms !!} <span class="text-white px-2">|</span> @endif @if($bathrooms) BA: {!! $bathrooms !!} @endif</p>
      @endif


      <a href="{!! get_permalink() !!}" class="button button--primary mt-30">View Home</a>
    </div>
  </div>
  @endwhile
  @php wp_reset_postdata() @endphp

</div>

@if(is_front_page())
<div class="text-center mt-60">
  <a href="/homes-for-sale/" class="button button--secondary">All Homes for sale</a>
</div>
@endif
@if(!is_front_page())
<?php if ($all_listing->max_num_pages > 1) { ?>
  <div class="result-pagination mt-45">
    <?php  $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $all_listing->max_num_pages,
      'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
    ) );
    wp_reset_postdata();?>
  </div>
<?php } ?>
@endif
