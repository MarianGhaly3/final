<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
  <div class="tm-container">
    <div class="tm-row">

      <!-- Site Header -->
      @include('includes.header')
      <!-- End of Site Header -->

      <div class="tm-right">
        <main class="tm-main">

          <!-- Drinks Section -->
          @include('includes.drinks')
          <!-- end Drinks Section -->

          <!-- About Us Page -->
          @include('includes.about')
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          @include('includes.special')
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          @include('includes.contact')
          <!-- end Contact Page -->

        </main>
      </div>    
    </div>

    <!--  footer   -->
    @include('includes.footer')
    <!-- end footer -->

  </div>

  <!-- scripts  -->
  @include('includes.scripts')
  <!-- end scripts  -->

</body>
</html>