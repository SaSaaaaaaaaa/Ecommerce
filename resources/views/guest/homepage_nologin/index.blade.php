<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:07 GMT -->
	<head>
		<!-- Meta Data -->
		@include('layout.head')
        <title>Ruper</title>
	</head>
	
	<body class="home home-10 title-10">
		<div id="page" class="hfeed page-wrapper">
			@include('guest.homepage_nologin.header')

			<div id="site-main" class="site-main">
				@include('guest.homepage_nologin.isi')
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

<!-- Mirrored from caketheme.com/html/ruper/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:40:09 GMT -->
</html>