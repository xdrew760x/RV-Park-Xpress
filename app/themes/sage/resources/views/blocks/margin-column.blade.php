{{--
  Title: Margin Columns
  Description: Produces a row containing Two columns in the bg and one col center in the forground
  Category: general_blocks
  Icon: format-quote
  Keywords: two-column column
  Mode: preview
  Align: full
  --}}

  @php
  /// Outer
  $pad_t = get_field('pad_t');
  $pad_b = get_field('pad_b');
  $bg_color = get_field('bg_color');
  $bg_image = get_field('background_image_margin');
  $con_width = get_field('container_width');
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/margin-col.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  @if(is_admin())
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif



  <section class="section section--col-margin preview-none bg-cover bg-bottom {!! $bg_color !!}" style="padding-top: {!! $pad_t !!}px; padding-bottom: {!! $pad_b !!}px; background-image: url({!! $bg_image !!})">
    <div class="container flex flex-row flex-wrap justify-between items-start {!! $con_width !!}">
      @if( have_rows('column_settings') )
      @while( have_rows('column_settings') ) @php the_row() @endphp

      @php
      $bg_img_l = get_sub_field('bg_img_l');
      $bg_img_r = get_sub_field('bg_img_r');

      $bg_col_l = get_sub_field('background_color');
      $bg_col_r = get_sub_field('background_color_right');


      $mt_t_l = get_sub_field('mt_t_l');
      $mt_t_r = get_sub_field('mt_t_r');
      $booking = get_post_field('booking_url');

      $content_left = get_sub_field('content_left');
      $content_right = get_sub_field('content_right');
      $slider_control_left = get_sub_field('slider_control');
      $slider_control_right = get_sub_field('slider_control_right');

      $images_left = get_sub_field('gallery_left');
      $images_right = get_sub_field('gallery_right');

      @endphp

      @if($slider_control_left)
      <script type="text/javascript">
      // Handle testimonials
      jQuery(document).ready( function($){
        if ($('.js-slider-one').length) {
          $('.js-slider-one').slick({
            accessibility: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            nextArrow: '<div class="next"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
            prevArrow: '<div class="prev"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
            dots: false,
            fade: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
          })
        }
      });
      </script>
      @endif

      @if($slider_control_right)
      <script type="text/javascript">
      // Handle testimonials
      jQuery(document).ready( function($){
        if ($('.js-slider-two').length) {
          $('.js-slider-two').slick({
            accessibility: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            nextArrow: '<div class="next"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
            prevArrow: '<div class="prev"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
            dots: false,
            fade: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
          })
        }
      });
      </script>
      @endif

      <div class="js-{!! $slider_control_left !!} col w-full {!! $bg_col_l !!} md:w-1/2 bg-cover bg-center @if(!$slider_control_left) px-15 py-30 md:p-30 @endif" style="margin-top: {!! $mt_t_l !!}px; background-image: url({!! $bg_img_l !!});">
        @if($content_left)
        {!! $content_left !!}
        @endif

        @if($slider_control_left)
        @foreach( $images_left as $image_left )

        <div class="gallery--image bg-cover bg-center" style="background-image: url({!! $image_left !!} )">

        </div>

        @endforeach
        @endif
      </div>

      <div class="js-{!! $slider_control_right !!} col w-full md:w-1/2 {!! $bg_col_r !!} bg-cover bg-center @if(!$slider_control_right) px-15 py-30 md:p-30 @endif" style="margin-top: {!! $mt_t_r !!}px; background-image: url({!! $bg_img_r !!});">
        @if($content_right)
        {!! $content_right !!}
        @endif

        @if($slider_control_right)
        @foreach( $images_right as $image_right )

        <div class="gallery--image bg-cover bg-center" style="background-image: url({!! $image_right !!} )"></div>

        @endforeach
        @endif
      </div>
      @endwhile
      @endif
    </div>
  </section>
