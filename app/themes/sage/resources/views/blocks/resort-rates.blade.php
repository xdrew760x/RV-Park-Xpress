{{--
  Title: Rates
  Description: Add Rates Blocks
  Category: resort_blocks
  Icon: admin-links
  Keywords: portals
  Mode: preview
  Align: full
  --}}

  @php
  $rates_blurb = get_field('rates_blurb');
  $rates_image = get_field('rates_image');
  $rates_color = get_field('rates_color');
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/rates.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>



  <section class="preview-none section--rates py-45 md:py-75 {!! $rates_color !!} bg-cover bg-center" style="background-image: url( {!! $rates_image !!} ) ">
    <div class="container px-0 md:px-15">

      @if($rates_blurb)
      <div class="content__blurb mb-30 px-15">
        {!! $rates_blurb !!}
      </div>
      @endif

      <div class="rates--list">
        @while( have_rows('rates') ) @php the_row() @endphp
        @php
        $rates_content = get_sub_field('rates_content');
        $rates_bg_color = get_sub_field('rates_bg_color');
        @endphp
        @if($background_image || $rates_content)
        <div class="rates">
          <div class="rates--inner mb-15 {!! $rates_bg_color !!}">
          @if($rates_content)
          <div class="hover--content">
            {!! $rates_content !!}
            <a href="/book-now/" class="button button--white">Book Now </a>
          </div>
          @endif
        </div>
      </div>
      @endif
      @endwhile
    </div>
  </div>
</section>
