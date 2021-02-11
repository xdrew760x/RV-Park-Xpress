{{--
  Title: Attractions
  Description: Add Attraction Blocks
  Category: resort_blocks
  Icon: admin-links
  Keywords: portals
  Mode: preview
  Align: full
  --}}

  @php
  $attractions_blurb = get_field('attractions_blurb');
  $attractions_image = get_field('attractions_image');
  $attractions_color = get_field('attractions_color');
  @endphp

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/attractions.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>



  <section class="preview-none section--attractions py-30 md:py-75 {!! $attractions_color !!} bg-cover bg-center" style="background-image: url( {!! $attractions_image !!} ) ">
    <div class="container px-0 md:px-15">

      @if($attractions_blurb)
      <div class="content__blurb mb-30 px-15">
        {!! $attractions_blurb !!}
      </div>
      @endif

      <div class="attractions--list">
        @while( have_rows('attractions') ) @php the_row() @endphp
        @php
        $attraction_bg = get_sub_field('attraction_bg');
        $attraction_content = get_sub_field('attraction_content');
        @endphp
        @if($background_image || $attraction_content)
        <div class="attractions">
          <div class="attractions--inner mb-15"
          style="
          background-image: url({!! $attraction_bg !!});">
          @if($attraction_content)
          <div class="hover--content">
            {!! $attraction_content !!}
            <a href="/attractions/" class="button">more attractions <i class="fal fa-long-arrow-right"></i></a>
          </div>
          @endif
        </div>
      </div>
      @endif
      @endwhile
    </div>
  </div>
</section>
