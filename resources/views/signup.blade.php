@include('layout.head')
	<title>Jetpack | Signup</title>
	<link rel="stylesheet" href="{{ asset('assets/css/signin.css')}}">
</head>

<body>
	<!-- loader start -->
	<div class="loader">
		<div class="spinner">
			<img src="assets/images/loader.gif" alt="loader" />
		</div>
	</div>
	<!-- loader end -->
	<!-- header section css start -->

	{{-- full page --}}
	<div class="full_page">
		<div class="full_form">
			<div class="form_logo">
				<a href="{{ route('index') }}"><img src="assets/images/JETPACK.IO-04.png" alt="logo" width="280px"></a>
			</div>
			<div class="form_data">
				<h4 class="text-center pb-2">Create an Account</h4>
				<p class="text-center">Already have an account? <a class="nbtn" href="{{ route('signin') }}">Log in!</a></p>
				<form action="">
						<div>
							<label for="">Email</label>
							<input type="text" name="email" placeholder="Email">
						</div>
						<div class="mb-3">
							<label for="">Password</label>
							<input type="password" name="password" placeholder="Password">
							<p class="mt-2">use 8 or more characters with a mix of letters, numbers & symbols</p>
						</div>

						<div>
							<label for="">Confirm Password</label>
							<input type="password" name="password" placeholder="Password confirmation">
						</div>
						<div>
							<input type="checkbox">
							<label for="">I agree to the <a class="nbtn" href="">terms and conditions</a></label>
						</div>
						<div>
							<input class="cbtn" type="submit" name="continue" value="Continue">
						</div>
						<div>
							<input class="ccbtn" type="submit" name="cancel" value="Cancel">
						</div>
					</form>
			</div>
		</div>
	</div>
	
	<!-- copyright section end -->
	<!--=== Optional JavaScript ===-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/SmoothScroll.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!--=== Optional JavaScript ===-->
	<script>
		new WOW().init();
	</script>
</body>

</html>