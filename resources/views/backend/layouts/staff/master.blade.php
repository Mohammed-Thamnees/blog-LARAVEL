<!DOCTYPE html>
<html lang="en">
    @include('backend.layouts.staff.head')
    <body>
	
		<!-- Main Wrapper -->

        <div class="main-wrapper">
		
			<!-- Header -->

            <div class="header">
                @include('backend.layouts.staff.header')
            </div>

			<!-- /Header -->
			
			<!-- Sidebar -->

            <div class="sidebar" id="sidebar">
                @include('backend.layouts.staff.sidebar')
            </div>

			<!-- /Sidebar -->
			
			<!-- Main content -->

            <div class="page-wrapper">
                
                <div class="content container-fluid">
                @yield('content')
                </div>

            <!-- /Main content -->

            <!-- Footer -->

            @include('backend.layouts.staff.footer')
            </div>

            <!-- /Footer -->
		
        </div>

		<!-- /Main Wrapper -->
		

		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Chart JS -->
		<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset('assets/js/script.js') }}"></script>

        @stack('script')
		
    </body>
</html>