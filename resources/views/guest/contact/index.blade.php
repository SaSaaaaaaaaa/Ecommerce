<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:22 GMT -->
    <head>
        @include('layout.head')
        <title>Contact Us</title>
    </head>
	<body class="page">
		<div id="page" class="hfeed page-wrapper">
			@include('guest.contact.header')

			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					@include('guest.contact.content')
				</div><!-- #main-content -->
			</div>

			@include('layout.footer')
		</div>

		<!-- Back Top button -->
		<div class="back-top button-show">
			<i class="arrow_carrot-up"></i>
		</div>

		<!-- Search -->
		@include('layout.search')

		<!-- Page Loader -->
		@include('layout.loader')

		<!-- Dependency Scripts -->
		@include('layout.js')
	</body>

<!-- Mirrored from caketheme.com/html/ruper/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:22 GMT -->
</html>