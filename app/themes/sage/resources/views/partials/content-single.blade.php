@if ( is_singular(['properties']) )

@include('partials/property/property-single')

@else

<article @php post_class() @endphp>

  <h1 class="entry-title">{!! get_the_title() !!}</h1>

  @include('partials/entry-meta')

  {!! the_content() !!}

</article>
@endif
