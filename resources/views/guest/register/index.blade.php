<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:21 GMT -->
    <head>
        @include('layout.head')
        <title>Register</title>
    </head>
	
	<body class="page">
		<div id="page" class="hfeed page-wrapper">
			<header>
                @include('guest.register.header')
            </header>

			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					@include('guest.register.content')
				</div><!-- #main-content -->
			</div>

			<footer>
                @include('layout.footer')
            </footer>
		</div>

		<!-- Back Top button -->
		<div class="back-top button-show">
			<i class="arrow_carrot-up"></i>
		</div>

		<!-- Page Loader -->
		@include('layout.loader')

		<!-- Dependency Scripts -->
        @include('layout.js')
	</body>

<!-- Mirrored from caketheme.com/html/ruper/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:21 GMT -->
</html>