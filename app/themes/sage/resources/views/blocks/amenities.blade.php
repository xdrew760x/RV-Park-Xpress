{{--
  Title: Amenities / Attractions
  Description: list amenities / attractions available.
  Category: rv_blocks
  Icon: images-alt2
  Keywords: Privacy Policy Statement
  Mode: preview
  Align: full
  --}}

  @php
  // Define background images
  $bg_mobile = get_field('background_image_amenities')['sizes']['w960x800'];
  $bg_desktop = get_field('background_image_amenities')['sizes']['w960x800'];

  // Background State
  $background_state = !empty(get_field('background_image_amenities')) ? 'js-background' : null;

  // Order State
  $order_state = get_field('component_order');

  // Animation
  $animate = get_field('animate_emnities');
  $animate_h = get_field('animate_header_amenities');
  $animate_p = get_field('animate_paragraph_amenities');

  // Section Padding
  $pad_y = get_field('padding_y_axis_amenities');
  $pad_x = get_field('padding_x_axiis_amenities');

  //section width
  $image_width = get_field('image_section_width_amenities');
  $content_width = get_field('content_section_width_amenities');

  // Background Color State
  $background_color_state = get_field('bg_color_amenities');

  // Amenities List
  $amenities = get_field( 'amenities_selection' );

  // Attractions
  $attractions = get_field( 'attraction_content' );
  $attraction_link = get_field( 'attraction_link' );

  // Columns Count
  $column_count = get_field('amenities_column_count');

  @endphp


  <section class="section--split {{ $order_state }} {{ $background_color_state }}">
    @if($bg_desktop)
    <div class="section__bg {{ $background_state }} w-full bg-cover bg-center md:{!! $image_width !!}"
    style="
    background-image: url({{ $bg_desktop }});
    "
    data-mobile="{{ $bg_mobile }}" data-desktop="{{ $bg_desktop }}"></div>
    @endif
    <div class="section__content w-full md:{!! $content_width !!} relative"
    style="
    padding: {!! $pad_y !!}px {!! $pad_x !!}px;
    ">
    <div class="section__content__inner">
      <ul
      style="
      columns: {!! $column_count !!};
      ">
      @if($amenities)
      @foreach ($amenities as $amenities_value)
      <li>{!! $amenities_value !!}</li>
      @endforeach
      @endif

      @if($attractions)
      {!! $attractions !!}
      @endif

      @if($attraction_link)
      <a href="{!! $attraction_link !!}" class="button button--primary">Learn More</a>
      @endif

    </ul>
  </div>
</div>
</section>
