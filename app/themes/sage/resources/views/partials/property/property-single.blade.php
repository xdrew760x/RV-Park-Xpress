@php
$price = get_field('price');
$bathrooms = get_field('properties_bath');
$bedrooms = get_field('properties_bedrooms');
@endphp

<div class="property">
  <div class="container">
    <h1 class="property__title"><?php the_title(); ?></h1>

    <div class="property__meta md:flex md:flex-row md:justify-center">

      @if ( $price )
      <span>&#36;<?= number_format( $price, 0 ); ?></span>
      @endif

      @if ( $bedrooms )
      <span>{!! $bedrooms !!} BD</span>
      @endif

      @if ( $bathrooms )
      <span>{!! $bathrooms !!} BA</span>
      @endif

    </div>

    <div class="property__content">
      <div class="property__gallery">

        @include('partials.property.property-content')

        <!-- Contact Form -->
        <div class="property__contact">
          <div class="property__contact--agents bg-primary-2 p-15">
            @include('partials.property.property-contact')
          </div>

          <div class="property__contact--form bg-primary-1 p-15">
            {!! do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') !!}
          </div>
        </div>
      </div>

      <ul class="flex flex-col justify-center items-center md:flex-row md:justify-between my-60">
        <li>{!! next_post_link( '%link','Previous Listing' ) !!}</li>
        <li> <a class="all-posts">  All Listings</a></li>
        <li>{!! previous_post_link( '%link','Next Listing' ) !!}</li>
      </ul>

    </div>
  </div>
</div>
