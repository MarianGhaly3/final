<div id="special" class="tm-page-content">
  <div class="tm-special-items">

  @foreach ($beverages as $beverage)
    @if ($beverage->special == '1' )
    <div class="tm-black-bg tm-special-item">
      <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image">
      <div class="tm-special-item-description">
        <h2 class="tm-text-primary tm-special-item-title">{{ $beverage->beverageName }}</h2>
        <p class="tm-special-item-text">{{ $beverage->content }}</p>
      </div>
    </div>
    @endif
  @endforeach

  </div>
</div>