{{--
  Title: Hero
  Description: Add a hero with either an image, video or carousel.
  Category: general_blocks
  Icon: images-alt2
  Keywords: Hero Section
  Mode: preview
  Align: full
  --}}

  <div class="block_preview hidden w-full">
    <img src="/app/themes/sage/resources/assets/images/block-previews/hero.png" class="w-full" alt="{{ $block['keywords'][0] }}">
  </div>

  <section class="preview-none">

    @if( class_exists('ACF') )
    @php
    // Define fields
    $hero_mbl = get_field('hero_background_image')['sizes']['w768x1024'] ?: App\asset_path('images/placeholders/920x562.png');
    $hero_dsk = get_field('hero_background_image')['sizes']['w1920x800'] ?: App\asset_path('images/placeholders/1920x562.png');
    $hero_cnt = get_field('hero_content');

    // Consolidate all options to pass to partials
    $options = [
    'width'   => $hero_wdt,
    'mobile'  => $hero_mbl,
    'desktop' => $hero_dsk,
    'content' => $hero_cnt,
    ];
    @endphp
    @switch( get_field('hero_component') )
    @case('hero-a')
    @include('partials.heroes.hero-a', [$options])
    @break
    @case('hero-b')
    @include('partials.heroes.hero-b', [$options])
    @break
    @case('hero-c')
    @include('partials.heroes.hero-c', [$options])
    @break
    @case('hero-d')
    @include('partials.heroes.hero-d', [$options])
    @break
    @case('resort')
    @include('partials.heroes.hero-resort', [$options])
    @break
    @default
    @break
    @endswitch
    @endif

  </section>
