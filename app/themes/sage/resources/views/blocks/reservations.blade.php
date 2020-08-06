{{--
  Title: Reservations Form
  Description: Include a Reservation form of your choice
  Category: rv_blocks
  Icon: format-quote
  Keywords: reservations
  Mode: preview
  Align: full
  --}}

  @switch( get_field('reservation_type') )
    @case('gravity')
      @include('partials.reservations.reserve-a', [$options])
    @break
    @case('Iframe')
    @include('partials.reservations.reserve-b', [$options])
    @break
    @default
    @break
  @endswitch
