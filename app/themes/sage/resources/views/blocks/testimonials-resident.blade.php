{{--
  Title: Resident Testimonials
  Description: Add a testimonials carousel for individual Communities
  Category: rv_blocks
  Icon: format-quote
  Keywords: resident-testimonials
  Mode: preview
  Align: full
  --}}

  @if(is_admin)
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif

  <script type="text/javascript">
  jQuery(document).ready( function($){
    $('.js-resident--testimonials').slick({
      accessibility: true,
      adaptiveHeight: false,
      autoplay: true,
      autoplaySpeed: 15000,
      fade: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      nextArrow: '<div class="next"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
      prevArrow: '<div class="prev"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
    });
  });
  </script>

@php
$testimonials_mbl = get_field('resident_background_image')['sizes']['w960x562'];
$testimonials_dsk = get_field('resident_background_image')['sizes']['w1920x562'];
@endphp
  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section section--testimonials" data-mobile="{{ $testimonials_mbl }}" data-desktop="{{ $testimonials_dsk }}" style="background-image:url({{ $testimonials_dsk }})" role="region" aria-label="Testimonials">
    <div class="container py-45 bg-white text-center">
      <div class="testimonials js-resident--testimonials">
        @if(have_rows('resident_testimonials'))
        @while(have_rows('resident_testimonials')) @php the_row() @endphp
        @php
        $source_name = get_sub_field('source_name');
        $source_location = get_sub_field('source_location');
        $testimonial_content = get_sub_field('testimonial_content');
        @endphp
        <div class="resident--testimonial">
          <h1>Resident Reviews</h1>
          <p>{!! $testimonial_content !!}</p>
          <strong>{!! $source_name !!} | {!! $source_location !!}</strong>
        </div>
        @endwhile
        @endif
      </div>
    </div>

  </section>
  @endif
