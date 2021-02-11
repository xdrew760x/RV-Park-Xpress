{{--
  Title: Two Columns / Center Content
  Description: Produces a row containing Two columns in the bg and one col center in the forground
  Category: general_blocks
  Icon: format-quote
  Keywords: two-column column
  Mode: preview
  Align: full
  --}}


    <div class="block_preview hidden w-full">
      <img src="/app/themes/sage/resources/assets/images/block-previews/two-col-center.png" class="w-full" alt="{{ $block['keywords'][0] }}">
    </div>

  @php
  /// Outer
  $pad_t = get_field('pad_t');
  $pad_b = get_field('pad_b');
  $bg_color = get_field('bg_color');
  $con_width = get_field('container_width');
  @endphp

  <section class="section section--col-center preview-none {!! $bg_color !!}"
  style="
  padding: {!! $pad_t !!}px {!! $pad_b !!}px;
  ">
  <div class="container flex flex-row flex-wrap justify-between items-start {!! $con_width !!}">
    @if( have_rows('column_settings') )
    @while( have_rows('column_settings') ) @php the_row() @endphp

    @php
    $bg_img_l = get_sub_field('bg_img_l');
    $bg_img_r = get_sub_field('bg_img_r');

    $mt_t_l = get_sub_field('mt_t_l');
    $mt_t_r = get_sub_field('mt_t_r');
    $booking = get_post_field('booking_url');

    $cent_cont = get_sub_field('cent_cont');
    @endphp

    <div class="col w-full md:w-1/2 bg-cover bg-center"
    style="
    margin-top: {!! $mt_t_l !!}px;
    background-image: url({!! $bg_img_l !!});
    "></div>

    <div class="col w-full md:w-1/2 bg-cover bg-center"
    style="
    margin-top: {!! $mt_t_r !!}px;
    background-image: url({!! $bg_img_r !!});
    "></div>

    @if($cent_cont)
    <div class="col-center">
      <div class="col-inner text-center">
        {!! $cent_cont !!}

        @if(is_singular('resorts') && $booking)
        <a class="button button--secondary" href="{!! $booking !!}">Book Now </a>

        @elseif(is_singular('resorts') )
        <a class="button button--secondary" href="{!! get_permalink($parent_post_id) !!}book-now/">Book Now </a>
        @endif
      </div>
    </div>
    @endif
    @endwhile
    @endif
  </div>
</section>
