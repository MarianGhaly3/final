<div id="drink" class="tm-page-content">
  <!-- Drink Menu Page -->
  <nav class="tm-black-bg tm-drinks-nav">
    <ul>
    @foreach ($categories as $category)
      <li>
        <a href="{{ $category->id }}" class="tm-tab-link active" data-id="{{ $category->id }}">{{ $category->category }} </a>
      </li>
    @endforeach
    </ul>
  </nav>


  <div id="1" class="tm-tab-content">
    <div class="tm-list">
    @foreach ($beverages as $beverage)
     @if ($beverage->category_id == '1' )
      <div class="tm-list-item">
        <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">{{ $beverage->beverageName }} <span class="tm-list-item-price"> $ {{ $beverage->price }}</span></h3>
          <p class="tm-list-item-description">{{ $beverage->content }} </p>
        </div>
      </div>
      @endif
      @endforeach 
    </div>
  </div>

  <div id="2" class="tm-tab-content">
    <div class="tm-list">
    @foreach ($beverages as $beverage)
     @if ($beverage->category_id == '2' )
      <div class="tm-list-item">
        <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">{{ $beverage->beverageName }} <span class="tm-list-item-price"> $ {{ $beverage->price }}</span></h3>
          <p class="tm-list-item-description">{{ $beverage->content }} </p>
        </div>
      </div>
      @endif
      @endforeach 
    </div>
  </div>

  <div id="3" class="tm-tab-content">
    <div class="tm-list">
    @foreach ($beverages as $beverage)
     @if ($beverage->category_id == '3' )
      <div class="tm-list-item">
        <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">{{ $beverage->beverageName }} <span class="tm-list-item-price"> $ {{ $beverage->price }}</span></h3>
          <p class="tm-list-item-description">{{ $beverage->content }} </p>
        </div>
      </div>
      @endif
      @endforeach 
    </div>
  </div>

  <div id="4" class="tm-tab-content">
    <div class="tm-list">
    @foreach ($beverages as $beverage)
     @if ($beverage->category_id == '4' )
      <div class="tm-list-item">
        <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">{{ $beverage->beverageName }} <span class="tm-list-item-price"> $ {{ $beverage->price }}</span></h3>
          <p class="tm-list-item-description">{{ $beverage->content }} </p>
        </div>
      </div>
      @endif
      @endforeach 
    </div>
  </div>

<!-- end Drink Menu Page -->

</div>