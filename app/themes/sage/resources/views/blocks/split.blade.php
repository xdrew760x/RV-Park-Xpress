{{--
  Title: Columns / Builder
  Description: Produces a row containing your choice amount of columns with various styling controls
  Category: general_blocks
  Icon: format-quote
  Keywords: two-column column split
  Mode: preview
  Align: full
  --}}

  <div class="block_preview hidden w-full">
    <h3>Option-1: <img src="/app/themes/sage/resources/assets/images/block-previews/col-builder-one.png" class="w-full mb-15" alt="{{ $block['keywords'][0] }}"></h3>
    <h3>Option-2: <img src="/app/themes/sage/resources/assets/images/block-previews/col-builder-two.png" class="mt-15 w-full" alt="{{ $block['keywords'][0] }}"></h3>
  </div>

  <section class="preview-none">

  @switch( get_field('column_section_width') )
  @case('full')
  @include('partials.columns.split-full', [$options])
  @break
  @case('contained')
  @include('partials.columns.split-contained', [$options])
  @break
  @default
  @break
  @endswitch
</section>
