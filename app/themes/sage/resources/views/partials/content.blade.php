<article {{ post_class('md:flex md:flex-row md:flex-no-wrap mb-10 -mx-buffer') }}>
  <div class="md:w-1/3 px-buffer">
    @if( App::image($post->ID, 'w465x428') )
      <a class="block mb-5" href="{{ get_permalink($post->ID) }}">
        <img src="{{ App::image($post->ID, 'w465x428') }}" alt="{{ $post->post_title }}" />
      </a>
    @endif
  </div>
  <div class="md:w-3/4 px-buffer">
    <header>
      <h3 class="mb-0">
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      </h3>
    </header>
    <div class="mt-15">
      <p>{!! the_excerpt() !!}</p>
    </div>
  </div>
</article>
