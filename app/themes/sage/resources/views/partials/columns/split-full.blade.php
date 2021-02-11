@php
/// Outer
$m_pad_y = get_field('master_padding_y');
$m_pad_t = get_field('master_padding_top');
$m_pad_b = get_field('master_padding_bottom');
$m_b_pad_x = get_field('master_padding_x');
$background_color = get_field('background_color');
$background_img = get_field('master_background_image');
$image_to_reveal = get_field('image_to_reveal');
@endphp
<!-- start Slider JS -->
@if(is_admin())
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
@endif




<!-- start builder section -->
<section class="section section--split @if($background_img) text-white @endif {{ $background_color }}"
  style="
  background-image: url({{ $background_img }});
  padding: 0 {!! $m_b_pad_x !!}px;
  padding-top: {!! $m_pad_t !!}px;
  padding-bottom: {!! $m_pad_b !!}px;
  background-size: cover;
  background-position: center;
  "
>
<!-- start container -->
<div class="w-full flex md:justify-between flex-col md:flex-row md:flex-wrap">
  @if(have_rows('split_builder'))
  @while(have_rows('split_builder')) @php the_row() @endphp
  @php
  // Define background images
  $bg_mobile = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_attachment = get_sub_field('bg_image_attachment') ?: 'no-attachment';

  // Background State
  $background_state = !empty(get_sub_field('section_builder_background')) ? 'js-background' : null;

  // Order State
  $order_state = get_sub_field('section_builder_split_flip');

  // Margin
  $margin_value_left = get_sub_field('content_margen_left');
  $margin_value_right = get_sub_field('content_margen_right');

  // Animation
  $animate = get_sub_field('animate_content');
  $animate_h = get_sub_field('animate_header_tags');
  $animate_p = get_sub_field('animate_p_tags');

  // Section Padding
  /// Inner
  $pad_t = get_sub_field('section_padding_t');
  $pad_b = get_sub_field('section_padding_b');
  $pad_l = get_sub_field('section_padding_l');
  $pad_r = get_sub_field('section_padding_r');

  //section width
  $image_width = get_sub_field('image_section_width');
  $content_width = get_sub_field('content_section_width');

  // Background Color State
  $slider_num = get_sub_field('assign_slider_number');
  $gallery_slider = get_sub_field('gallery_slider');
  $background_color_state = get_sub_field('section_builder_background_color');

  // Content
  $content = get_sub_field('section_builder_content');
  @endphp

  @switch( get_sub_field('assign_slider_number') )
  @case('js-col-gallery')
  <script type="text/javascript">
  jQuery(document).ready( function($){
    if ($('.js-col-gallery').length) {
      $('.js-col-gallery').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        fade: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<div class="next mr-15"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
        prevArrow: '<div class="prev ml-15"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
      })
    }
  });
  </script>

  @break
  @case('js-col-gallery-two')
  <script type="text/javascript">
  jQuery(document).ready( function($){
    if ($('.js-col-gallery-two').length) {
      $('.js-col-gallery-two').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        fade: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<div class="next mr-15"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
        prevArrow: '<div class="prev ml-15"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
      })
    }
  });
  </script>

  @break
  @case('js-col-gallery-three')
  <script type="text/javascript">
  jQuery(document).ready( function($){
    if ($('.js-col-gallery-three').length) {
      $('.js-col-gallery-three').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        fade: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<div class="next mr-15"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
        prevArrow: '<div class="prev ml-15"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
      })
    }
  });
  </script>

  @break
  @default
  @break
  @endswitch

  @if($gallery_slider)
  <!-- start slider -->
  <div class="column w-full md:{!! $content_width !!} {!! $slider_num !!} {{ $order_state }}">
    @foreach( $gallery_slider as $image )
    <div class="gallery-item bg-cover bg-center" style="background-image: url({{ $image }});"></div>
    @endforeach
  </div>
  @else
  <!-- start column -->
  <div class="column {{ $background_state }} {{ $order_state }} {{ $background_color_state }} bg-cover w-full  bg-center {!! $bg_attachment !!} w-full md:{!! $content_width !!}" style=" background-image: url({{ $bg_desktop }}); padding-top: {!! $pad_t !!}px; padding-bottom: {!! $pad_b !!}px; padding-left: {!! $pad_l !!}px; padding-right: {!! $pad_r !!}px;">


  @if( $content )
  <div class="section__content w-full relative @if($margin_value_left) p-15 bg-white border-style-left @endif @if($margin_value_right) bg-white border-style-right @endif @if(! is_admin()) {!! $animate !!} {!! $animate_h !!} {!! $animate_p !!}@endif "
  style="
  @if($margin_value_left)
  left: {!! $margin_value_left !!}px;
  @endif
  @if($margin_value_right)
  right: {!! $margin_value_right !!}px;
  @endif
  ">
  {!! $content !!}
</div>
@endif
<!-- end column -->
</div>
@endif
<!-- end container -->
@endwhile
@endif
</div>
</section>
<!-- end section -->
