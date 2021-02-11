{{--
  Title: News Blog
  Description: Resort News
  Category: resort_blocks
  Icon: format-quote
  Keywords: testimonials
  Mode: preview
  Align: full
  --}}
  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/blog.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @php
  $query = new WP_Query([
  'post_type'       =>  'post',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'orderby' => 'title',
  'order'   => 'ASC',
  'parent' => 0,
  'hierarchical' => 0,
  ]);
  @endphp


  @if(is_admin())
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif

  <script type="text/javascript">
  // Handle testimonials
  jQuery(document).ready( function($){

    if (window.matchMedia('(max-width: 1023px)').matches) {

      $('.js-news').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        nextArrow: '<div class="next"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
        prevArrow: '<div class="prev"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
        dots: true,
        fade: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
      })
    };
})
  </script>

  @php
  $background_field = get_field('background_field');
  $component_blurb = get_field('component_blurb');

  @endphp

  <section class="preview-none section section--news bg-cover bg-center"
  style="background-image: url({!! $background_field !!})">
  <div class="container text-center">

    {!! $component_blurb !!}

    <div class="mt-30 md:mt-60 js-news md:flex md:justify-between md:items-start md:flex-row">
      <!-- Begin Loop -->
      @while($query->have_posts()) @php $query->the_post() @endphp

      <div class="card--news text-left">
        <a href="{!! get_permalink() !!}" class="w-full" >
          <img src="{!! $featured_img_url ?: '/app/themes/sage/resources/assets/images/placeholders/460x328.jpg' !!}" alt="{!! the_title() !!}" class="block mx-auto">
        </a>

        <a href="{!! get_permalink() !!}" alt="{!! the_title() !!}" ><h5>{!! the_title() !!}</h5></a>
        {!! the_excerpt() !!}
      </div>

      @endwhile
    </div>

    <a href="#" class="button button--secondary mt-45">View all News</a>
  </div>
</section>
