@php
$contact_name = get_field('contact_name');
$contact_email = get_field('contact_email');
$contact_phone = get_field('contact_phone');
@endphp


<div class="property__contact--agent">
  <h4 class="mb-2">Agent: {!! $contact_name !!}</h4>
  @if($contact_phone)
  <a class="cw tele__agent mb-2" href="tel:{{ preg_replace('/[^0-9]/', '', $contact_phone) }}">{!! $contact_phone !!}</a>
  @endif
  @if($contact_email)
  <br><a class="email__agent mb-2" href="mailto:{!! $contact_email !!}">{!! $contact_email !!}</a>
  @endif
</div>
