{{--
  Title: Amenities
  Description: Add Amenities
  Category: resort_blocks
  Icon: admin-links
  Keywords: portals
  Mode: preview
  Align: full
  --}}

  @php
  $amenities_blurb = get_field('amenities_blurb');
  $amenities_image = get_field('amenities_image');
  $amenities_color = get_field('amenities_color');
  $amenities_blurb_end = get_field('amenities_blurb_end');
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/amenities.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @if(is_admin())
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif
  <script type="text/javascript">
  // Handle testimonials
  jQuery(document).ready( function($){
    if (window.matchMedia('(min-width: 1024px)').matches) {

      if ($('.amenities--list').length) {
        $('.amenities--list').slick({
          accessibility: true,
          adaptiveHeight: true,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: false,
          nextArrow: '<div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
          prevArrow: '<div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
          dots: false,
          fade: false,
          pauseOnFocus: false,
          pauseOnHover: false,
          speed: 1000,
          slidesToShow: 8,
          slidesToScroll: 1,

          responsive: [
            {
              breakpoint: 1300,
              settings: {
                slidesToShow: 6,
              },
            },

            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
              },
            },
          ],
        })
      }
    }
  });

  </script>


  <section class="preview-none section--amenities py-45 md:py-75 {!! $amenities_color !!} bg-cover bg-center"
  style="background-image: url( {!! $amenities_image !!} ) ">
  <div class="container px-0 md:px-15">

    @if($amenities_blurb)
    <div class="content__blurb mb-30 px-15">
      {!! $amenities_blurb !!}
    </div>
    @endif

    <div class="amenities--list">

      @while( have_rows('amenities') ) @php the_row() @endphp

      @php
      $background_image = get_sub_field('background_image');
      $amenities_title = get_sub_field('amenities_title');
      @endphp

      <div class="amenities">
        @if($background_image)
        <div class="amenities--icon mb-15"
        style="
        background-image: url({!! $background_image !!});">
      </div>
      <h6>{!! $amenities_title !!}</h6>
      @endif
    </div>

    @endwhile
  </div>
</div>
</section>
