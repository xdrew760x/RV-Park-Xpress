{{--
  Title: Portals
  Description: Add portals to pages within your site.
  Category: general_blocks
  Icon: admin-links
  Keywords: portals
  Mode: preview
  Align: full
  --}}
  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/portals.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @php
  $portal_blurb = get_field('portal_blurb');
  $content_bottom = get_field('content_bottom');
  $portal_hover = get_field('hover_excerpt');
  $portal_width = get_field('portal_width');
  $carousel_control = get_field('carousel_control');
  $prt_h = get_field('minimum_height');
  $prt_h_m = get_field('minimum_height_mobile');
  @endphp

  @if($prt_h)
  <style>
  .portal--outer  {
    min-height: <?= $prt_h ?>px;
  }

  @media (max-width: 1023px) {
    .portal--outer  {
      min-height: <?= $prt_h_m ?>px;
    }
  }
  </style>
  @endif

  @if(is_admin())
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif
  @if($carousel_control)
  <script type="text/javascript">
  // Handle testimonials
  jQuery(document).ready( function($){

    if (window.matchMedia('(max-width: 1023px)').matches) {
      if ($('.js-brm-portals').length) {
        $('.js-brm-portals').slick({
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
          centerMode: true,
          centerPadding: '60px'
        })
      }
    }
  });

</script>
@endif
<section id="{{ $block['keywords'][0] }}" class="preview-none section section--portals" role="region" aria-label="Portals" style="background-color:<?= get_field('background_color_portal'); ?>">
  <div class="container">
    @if($portal_blurb)
    <div class="content--blurb mb-0 md:mb-30">
      {!! $portal_blurb !!}
    </div>
    @endif
    @if( have_rows('portals') )

    <div class="brm-portals js-brm-portals">
      @while( have_rows('portals') ) @php the_row() @endphp
      @php
      // Define fields
      $image = get_sub_field('portal_image')['url'] ?: App\asset_path('images/placeholders/460x328.jpg');
      $title = get_sub_field('portal_title');
      $excerpt = get_sub_field('portal_excerpt');
      $portal_link = get_sub_field('portal_link');
      $sub_title = get_sub_field('sub_title');
      @endphp

      <div class="portal p-2 text-center w-full md:w-1/2 lg:{{ $portal_width }}">
        @include('partials.portals.design-four')
      </div>

      @endwhile
    </div>
    @endif

    @if($content_bottom)
    <div class="content--blurb my-30">
      {!! $content_bottom !!}
    </div>
    @endif
  </div>
</section>
