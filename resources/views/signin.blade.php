@include('layout.head')
	<title>Jetpack | Signin</title>
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
				<h4 class="text-center pb-2">Sign In</h4>
				<p class="text-center">New Here? <a class="nbtn" href="{{ route('signup') }}">Create an Account</a></p>
				<div class="note d-flex mt3">
					<div>
						<i class="fa fa-danger"></i>
					</div>
					<div>
						<h5>New Update</h5>
						<p>Please report all bugs and all of your feedback immediately.</p>
					</div>
				</div>
				<form action="">
						<div>
							<label for="">Email</label>
							<input type="text" name="email" placeholder="Email">
						</div>
						<div>
							<label for="">Password <span class="forget"><a class="nbtn" href="">Forget Password?</a></span></label>
							<input type="password" name="password" placeholder="Password">
						</div>
						<div>
							<input class="cbtn" type="submit" name="continue">
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