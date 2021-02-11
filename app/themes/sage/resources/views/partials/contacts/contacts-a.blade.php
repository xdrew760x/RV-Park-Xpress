@php
$iframe = get_field('google_map_api', 'options');
$address = get_field('address1', 'options');
$city = get_field('city', 'options');
$state = get_field('state', 'options');
$zip = get_field('zipcode', 'options');
$phone = get_field('phone_number', 'options');
$email = get_field('email', 'options');
$testimonial_sizes = get_field('testimonial_size', 'options');
// Section Padding
$c_pad_y = get_field('contact_padding_y', 'options');
$c_pad_x = get_field('contact_padding_x', 'options');
$contact_name = get_field('contact_name', 'options');
$contact_hours = get_field('contact_hours', 'options');
$contact_us = get_field('contact_button_url', 'options');
$sec_phone = get_field('sec_number', 'options');

@endphp
<div class="container"
style="
background-image:url({{ $bg_desktop }});
padding: {!! $c_pad_y !!}px {!! $c_pad_x !!}px;
"
>

<div class="contact-info mb-30 md:mb-0 py-30 md:py-0">
  <div itemscope itemtype="http://schema.org/LocalBusiness" class="contact--inner">
    <span><h3>Contact Us</h3></span>

    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="name" class="font-raleway-regular text-white">{!! get_bloginfo() !!}</span>
      <span itemprop="streetAddress" class="font-raleway-regular text-white">{!! $address !!}</span><br>
      <span itemprop="addressLocality" class="font-raleway-regular text-white">{!! $city !!},</span>
      <span itemprop="addressRegion" class="font-raleway-regular text-white">{!! $state !!}</span>
      <span itemprop="postalCode" class="font-raleway-regular text-white">{!! $zip !!}</span>
    </address>
      <p class="contact-info--tel mt-3">
        <a itemprop="telephone" href="tel:'.preg_replace('/[^0-9]/', '', $phone).'" class="font-raleway-regular text-white">{!! $phone !!}</a><br>
        <a itemprop="telephone" href="tel:'.preg_replace('/[^0-9]/', '', $sec_phone).'" class="font-raleway-regular text-white">{!! $sec_phone !!}</a>
      </p>

      @if($email)
      <p class="contact-info--email">
        <a itemprop="email" href="mailto:{!! $email !!}" class="font-raleway-regular text-white">
          @if($contact_name)
          {!! $contact_name !!}<br>
          @endif
          {!! $email !!}</a>
        </p>
        @endif

        @if($contact_hours)
        <div class="contact-info--hours">
          {!! $contact_hours !!}
        </div>
        @endif

        @if($contact_us)
        <a href="https://betabookings7.rmscloud.com/obookings3/Search/Index/13585/90/?Y=1" class="button button--secondary mt-30">Book Now</a>
        @endif

      </div>
    </div>
    <iframe  class="max-w-full" src="{!! $iframe !!}" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  </div>
