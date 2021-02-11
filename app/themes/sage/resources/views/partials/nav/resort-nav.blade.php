<section class="section--resort__nav bg-primary-4 py-2 mobile-none">
  <div class="container flex flex-row justify-between items-center">
    @php
    global $wp_query;
    $parent_post_id = $wp_query->queried_object->post_parent;
    $ancestor = get_post_ancestors($post->ID);
    @endphp

    @if( $ancestor )
    @php
    $args = array(
    'post_type'      => 'resorts',
    'posts_per_page' => -1,
    'post_parent'    => $parent_post_id,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',

        'tax_query' => array(
        array(
        'taxonomy' => 'resorts_taxonomy',
        'field'    => 'slug',
        'terms'    => array( 'booking' ),
        'operator' => 'NOT IN',
        )
        ),
    );
    @endphp
    @else

    @php
    $args = array(
    'post_type'      => 'resorts',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',

    'tax_query' => array(
    array(
    'taxonomy' => 'resorts_taxonomy',
    'field'    => 'slug',
    'terms'    => array( 'booking' ),
    'operator' => 'NOT IN',
    )
    ),
    );
    @endphp

    @endif

    @php
    $parent = new WP_Query( $args );
    $booking = get_post_field('booking_url');
    @endphp

    <p class="m-0 uppercase"><a href="{!! get_permalink($parent_post_id) !!}">{!!  get_the_title($parent_post_id) !!}</a></p>

    <ul class="primary-nav-a nav flex flex-row justify-end items-center">
      @while ( $parent->have_posts() ) @php $parent->the_post() @endphp
      <li class="menu-item menu-item-type-post_type menu-item-object-page ml-4">
        <a href="{!! get_permalink() !!}" class="font-sora-regular uppercase text-small_nav">
          {!! the_title() !!}
        </a>
      </li>
      @endwhile
      @php wp_reset_postdata(); @endphp

      <li class="menu-item menu-item-type-post_type menu-item-object-page ml-4">
        @if(is_singular('resorts') && $booking)
        <a class="font-sora-bold uppercase text-small_nav" href="{!! $booking !!}">Book Now </a>

        @elseif(is_singular('resorts') )
        <a class="font-sora-bold uppercase text-small_nav" href="{!! get_permalink($parent_post_id) !!}book-now/">Book Now </a>
        @endif
      </li>

    </ul>

  </div>
</section>
