<div id="drink" class="tm-page-content">
  <!-- Drink Menu Page -->
  <nav class="tm-black-bg tm-drinks-nav">
    <ul>
    @foreach ($categories as $category)
      <li>
        <a href="#" class="tm-tab-link active" data-id="{{ $category->id }}">{{ $category->category }} </a>
      </li>
      @endforeach
    </ul>
  </nav>

  @foreach ($categories as $category)
  <div id="{{ $category->id }}" class="tm-tab-content">
    <div class="tm-list">

    @foreach ($beverages as $beverage)
      <div class="tm-list-item">
        <!-- <img src="{{ asset('assets/img/iced-americano.png') }}" alt="Image" class="tm-list-item-img"> -->
        <img src="{{ asset( 'assets/admin/images/' . $beverage->image) }}" alt="Image" class="tm-list-item-img">

        <div class="tm-black-bg tm-list-item-text">
          <!-- <h3 class="tm-list-item-name">Iced Americano<span class="tm-list-item-price">$10.25</span></h3> -->
          <h3 class="tm-list-item-name">{{ $beverage->beverageName }} <span class="tm-list-item-price"> $ {{ $beverage->price }}</span></h3>

          <!-- <p class="tm-list-item-description">Here is a short description for the first item. Wave Cafe Template is provided by Tooplate.</p> -->
          <p class="tm-list-item-description">{{ $beverage->content }} </p>

        </div>
      </div>
    @endforeach

    </div>
  </div>
  
  @endforeach

  <div id="hot" class="tm-tab-content">
    <div class="tm-list">

      <div class="tm-list-item">
        <img src="{{ asset('assets/img/hot-americano.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Hot Americano<span class="tm-list-item-price">$8.50</span></h3>
          <p class="tm-list-item-description">Here is a short description for the item along with a squared thumbnail.
          </p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/hot-cappuccino.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Hot Cappuccino<span class="tm-list-item-price">$9.50</span></h3>
          <p class="tm-list-item-description">Here is a list of 4 items that can add more as you need. Only content area
            will be scrolling.</p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/hot-espresso.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Hot Espresso<span class="tm-list-item-price">$7.50</span></h3>
          <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/hot-latte.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Hot Latte<span class="tm-list-item-price">$6.50</span></h3>
          <p class="tm-list-item-description">Page contents are organized into 3 tabs to show different lists of items.
          </p>
        </div>
      </div>

    </div>
  </div>

  <div id="juice" class="tm-tab-content">
    <div class="tm-list">
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/smoothie-1.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Strawberry Smoothie<span class="tm-list-item-price">$12.50</span></h3>
          <p class="tm-list-item-description">Here is a short description for the item along with a squared thumbnail.
          </p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/smoothie-2.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Red Berry Smoothie<span class="tm-list-item-price">$14.50</span></h3>
          <p class="tm-list-item-description">Here is a list of 4 items or add more. You can use this template for
            commercial purposes.</p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/smoothie-3.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Pineapple Smoothie<span class="tm-list-item-price">$16.50</span></h3>
          <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>
        </div>
      </div>
      <div class="tm-list-item">
        <img src="{{ asset('assets/img/smoothie-4.png') }}" alt="Image" class="tm-list-item-img">
        <div class="tm-black-bg tm-list-item-text">
          <h3 class="tm-list-item-name">Spinach Smoothie<span class="tm-list-item-price">$18.50</span></h3>
          <p class="tm-list-item-description">You are not allowed to redistribute the template ZIP file on other
            template sites.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end Drink Menu Page -->
</div>