@php
/// Outer
$m_pad_y = get_field('master_padding_y');
$m_b_pad_x = get_field('master_padding_x');
$background_color = get_field('background_color');
@endphp
<!-- start Slider JS -->
@if(is_admin())
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
@endif

<!-- start builder section -->
<section class="section section--builder {{ $background_color }}"
  style="
  padding: {!! $m_pad_y !!}px {!! $m_b_pad_x !!}px;
  ">
<!-- start container -->
<div class="container md:flex md:justify-center md:px-0">
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
  $pad_y = get_field('master_padding_y');
  $pad_x = get_field('master_padding_x');

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

  <div class="column {{ $background_state }} {{ $order_state }}  w-full md:w-1/3" style="padding: {!! $pad_y !!}px {!! $pad_x !!}px;">

  <div class="section__content w-full relative {{ $background_color_state }} px-15 py-45" >
  {!! $content !!}
</div>
<!-- end column -->
</div>
<!-- end container -->
@endwhile
@endif
</div>
</section>
<!-- end section -->
