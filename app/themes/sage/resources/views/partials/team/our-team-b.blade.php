@php
// Number of post to show per unit
$members_desktop = get_field('members_desktop');
$members_tablet = get_field('members_tablet');
$members_mobile = get_field('members_mobile');
// Content Blurb
$member_blurb = get_field('our_team_blurb');
// Post Query and Args
$our_team_listing = get_posts([
'post_type'       =>  'member-title',
'posts_per_page'  => -1,
'paged'           => (get_query_var('paged')) ? get_query_var('paged') : 1,
'orderby' => 'rand',
'order'    => 'ASC',
]);
@endphp

@if(is_admin)
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
@endif

<script type="text/javascript">


if (window.matchMedia('(max-width: 550px)').matches) {
  jQuery(document).ready( function($){
    $('.js-team--slider').slick({
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
      arrows: false,
      nextArrow: '<div class="next"><i class="fas fa-chevron-right"></i></div>',
      prevArrow: '<div class="prev"><i class="fas fa-chevron-left"></i></div>',
    });
  });
}

</script>

<div class="team--roster-b">
  @if($member_blurb)
  <div class="content mb-45">
    {!! $member_blurb !!}
  </div>
  @endif

  <div class="js-team--slider">
    @foreach( $our_team_listing as $members )
    @php
    $member_telephone = get_field('member_phone_number',$members->ID);
    $member_email = get_field('member_email_address',$members->ID);
    $featured_img_url = get_the_post_thumbnail_url($members->ID, 'full');
    $member_title = get_field('position_tittle',$members->ID);

    @endphp

    <div class="team--members mb-30">
      <div class="column-member-img">
        @if(has_post_thumbnail())
        <a href="#{{ $members->post_name }}" data-fancybox>
          <div class="member--image" style="background-image: url({!! $featured_img_url !!})"></div>
        </a>
        @else
        <a href="#{{ $members->post_name }}" data-fancybox>
          <div class="member--image" style="background-image: url(/app/themes/sage/resources/assets/images/member-photo-soon.jpg)"></div>
        </a>

        @endif
      </div>
      <div class="column-content">
        <a href="#{{ $members->post_name }}" data-fancybox>
          <h6 class="mb-2">{{ $members->post_title }}</h6>
        </a>
        <p>{!! $member_title !!}</p>
      </div>

      <div id="{{ $members->post_name }}" class="hidden fancy-content">
        <div class="fancy-box--inner">
          @if(has_post_thumbnail())
          <div class="member--image" style="background-image: url({!! $featured_img_url !!})"></div>
          @else
          <div class="member--image" style="background-image: url(/app/themes/sage/resources/assets/images/member-photo-soon.jpg)"></div>
          @endif

          <div class="member--bio md:pl-30">
            <h6 class="mb-2">{{ $members->post_title }}</h6>
          </a>
          <p>{!! $member_title !!}</p>
          {!! $members->post_content; !!}
        </div>
      </div>
    </div>
  </div>

  @php wp_reset_postdata() @endphp
  @endforeach
</div>
</div>
