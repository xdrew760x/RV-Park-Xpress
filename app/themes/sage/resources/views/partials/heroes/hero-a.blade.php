@php

$content_width = get_field('content_width');
$content_position = get_field('content_position');
$max_height = get_field('hero_height');
$hero_graphic = get_field('hero_graphic');
global $wp_query;
$parent_post_id = $wp_query->queried_object->post_parent;
$ancestor = get_post_ancestors($post->ID);

//Animation
$hero_animation = get_field('hero_animation');
$display_search_form = get_field('display_search_form');
@endphp

<section id="{{ $block['keywords'][0] }}" class="w-full brm-hero" role="region" aria-label="Hero">
  <div class="section-brm--hero flex flex-col flex-wrap justify-center items-center bg-no-repeat js-background" style="background-image:url({{ $options['desktop'] }}); min-height: {!! $max_height !!}px;" data-mobile="{{ $options['desktop'] }}" data-desktop="{{ $options['desktop'] }}">
    <div class="hero_content text-white mx-auto block {{ $content_width === 'w-full' ? 'w-full' : ' w-full md:w-1/2' }} {{ $content_position === 'ml-0' ? 'ml-0' : 'full' }} {{ $content_position === 'mr-0' ? 'mr-0' : 'full' }}"
    style="
    min-height: {!! $max_height !!}px;">
    <div class="hero_content--container container @if(!is_admin()){!! $hero_animation !!}@endif">
      {!! $options['content'] !!}
    </div>
  </div>


  @php

  $posts = get_posts(
  array(
  'post_type' => 'resorts',
  'post_parent' => 0,
  'nopaging'    => true,
  )
  );

  $terms = get_terms('resorts_taxonomy');

  $i = 1;
  @endphp

  @if($display_search_form)
  <div class="reservation__form">
    <div class="container">
      <form name="form1" id="master-form" class="filter-master">


        <div class="select--field">
          <select id="scripts" name="scripts">
            <option value="all">Select Region</option>
            @foreach( $terms  as $term )
            <option value="{!! sanitize_title_with_dashes($term->name) !!}">{!! $term->name !!}</options>
              @endforeach
            </select>
          </div>

          <div class="select--field">
            <select  class="formchoice placeholder">
              <option value="nothing">Select Resort</option>
              @foreach($posts as $post)
              <option value="{!! sanitize_title_with_dashes( $post->post_title ) !!}">{!! $post->post_title !!}</option>
              @endforeach
            </select>
          </div>

          @foreach( $terms  as $term )

          @php
          $posts = get_posts( array(
          'post_type' => 'resorts',
          'post_parent' => 0,
          'nopaging'    => true,
          'tax_query' => array( array(
          'taxonomy' => 'resorts_taxonomy',
          'field' => 'slug',
          'terms' => $term->slug
          )),
          ));
          @endphp

          <select name="formchoice" class="formchoice select-{!! $term->slug !!} hidden ">
            <option value="nothing">Select Resort</option>
            @foreach($posts as $post)
            <option value="{!! sanitize_title_with_dashes( $post->post_title ) !!}">{!! $post->post_title !!}</option>
            @endforeach
          </select>


          @foreach($posts as $post)

          @php
          $booking = get_field('booking_url', $post->ID);
          @endphp

          <div class="does-something  something-{!! sanitize_title_with_dashes( $post->post_title ) !!}" style="display: none;">
            <a href="{!! $booking !!}" class="button button--secondary button-{!! sanitize_title_with_dashes( $post->post_title ) !!}">Check Availability</a>  <a href="{!!  get_permalink( $post->ID ); !!}" class=" button button--res text-primary-1 button-{!! sanitize_title_with_dashes( $post->post_title ) !!}">Explore Resort</a>
          </div>
          @endforeach

          @endforeach

          <div class="does-nothing">
            <a class="button button--secondary nothing">Check Availability</a>  <a href="#" class="button button--res nothing text-primary-1">Explore Resort</a>
          </div>

        </form>
      </div>
    </div>
    @endif
  </div>
</section>
