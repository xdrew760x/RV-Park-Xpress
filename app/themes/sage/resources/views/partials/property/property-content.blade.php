@if( have_rows('image_slider') )
<div class="property__gallery__large js-carousel-gallery">
  @while( have_rows('image_slider') ) @php the_row() @endphp

  @php
  $image = get_sub_field('image_slide');
  @endphp

  <div class="property__gallery__item large--slide bg-cover bg=center" style="background-image: url({!! $image['sizes']['w1920x562'] !!})">

  </div>
  @endwhile
</div>

<div class="property__gallery__nav js-carousel-nav">

  @while( have_rows('image_slider') ) @php the_row() @endphp
  @php
  $image = get_sub_field('image_slide');
  @endphp

  <div class="property__gallery__item mx-2 bg-cover bg=center" style="background-image: url({!! $image['sizes']['w460x460'] !!})"></div>
  @endwhile
</div>
@endif


<!---   details  --->
<div class="property__description my-30">

  <div class="property__left">

    @if($property_plan || $property_brochure)
    <div>
      <div class="property-documents">
        <h5>Available Property Documents:</h5>

        @if($property_plan)
        <p><a href="{!! $property_plan !!}" class="btn btn-o" target="_blank">View Floor Plan</a></p>
        @endif

        @if($property_brochure)
        <p><a class="btn btn-o" href="{!! $property_brochure !!}" target="_blank">View Brochure</a></p>
        @endif

        <hr>
      </div>
      @endif

      @php
      $lot_number = get_field('lot_number');
      $price = get_field('price');
      $year_built = get_field('year_built');
      $square_feet = get_field('square_feet');
      $properties_bath = get_field('properties_bath');
      $properties_bedrooms = get_field('properties_bedrooms');
      $property_brochure = get_field('property_brochure');
      $property_plan = get_field('property_plan');
      $properties_bedrooms = get_field('properties_bedrooms');
      @endphp

      <ul class="property__details">
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Lot #:</strong> {!! $lot_number !!}</>
          </li>
          <li class="property__detail">
            <p class="ttu mr-1"><strong class="mr-15">Price:</strong> ${!! number_format( $price, 0 ) !!}</p>
          </li>
          <li class="property__detail">
            <p class="ttu mr-1"><strong class="mr-15">Year Built:</strong> {!! $year_built !!}</p>
          </li>
        </li>
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Square Feet:</strong> {!! $square_feet !!}</p>
        </li>
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Bedrooms:</strong> {!! $properties_bedrooms !!}</p>
        </li>
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Bathrooms:</strong> {!! $properties_bath !!}</p>
        </li>
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Brochure:</strong> <a href="{!! $square_feet !!}"> Download Here</a> </p>
        </li>
        <li class="property__detail">
          <p class="ttu mr-1"><strong class="mr-15">Floor Plan:</strong> <a href="{!! $property_plan !!}"> Download Here</a> </p>
        </li>
      </ul>

      <h3>Property Description: </h3>
      {!! the_content() !!}
    </div>
  </div>
</div>
