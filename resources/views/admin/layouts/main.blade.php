<!DOCTYPE html>
<html lang="en">

@include('admin/includes.head')

<body class="nav-md">
	<div class="container body">
		<div class="main_container">

		<div class="col-md-3 left_col">

        	<!-- left_column -->
            @include('admin/includes.leftCol')
        	<!-- /left_column -->
			 
		</div>

			<!-- top navigation -->
            @include('admin/includes.topnav')
			<!-- /top navigation -->


            @yield('content')

            
			<!-- footer content -->
            @include('admin/includes.footer')
			<!-- /footer content -->
		</div>
	</div>
    
	<!-- JS scripts content -->
    @include('admin/includes.scripts')

</body>
</html>
