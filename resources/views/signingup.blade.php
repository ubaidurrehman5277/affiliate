@include('layout.head')
	<title>Jetpack | Signup</title>
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
	@include('layout.header')
	<div class="am-breadcrumb-wrapper">
		<div class="am-breadcrumb-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="am-breadcrumb-text">
						<h2>Register</h2>
						<ul class="breadcrumb">
							<li><a href="{{ route('index') }}">Home</a></li>
							<li> // </li>
							<li><a href="{{ route('signup') }}">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header section css end -->
	<div class="am-contactsingle-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="am_contact_form">
                        <h4 class="am_sub_heading">Register New User</h4>
                        <form action="{{ route('signup') }}" method="post">
                        	@csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="am_field_holder">
                                        <input type="text" class="form-control" placeholder="Enter Your User Name"
                                            name="name" id="full_name" />
                                            @error('name')
                                            	<div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="am_field_holder">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email"
                                            id="email"/>
                                    </div>
                                    @error('email')
                                    	<div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="am_field_holder">
                                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                                            id="password">
                                    </div>
                                    @error('password')
                                    	<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="am_btn submitForm ">Submit</button>
                                    <div class="response"></div>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact section start -->
	<div class="am-contact-wrapper" id="support">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="am-contact-left">
						<img src="https://via.placeholder.com/395x518" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="am-contact-right">
						<div class="am-contact-text">
							<h1>start making money today.</h1>
							<p class="am-paragraph">Create custom landing pages with Omega that converts more
								visitors than any website. With lots of unique blocks, you can easily build a
								page without coding.</p>
						</div>
						<div class="am-contact-form-box">
							<div class="am-form-fields">
								<input type="name" placeholder="Enter Name Here..." onfocus="this.placeholder=''"
									onblur="this.placeholder='Enter Name Here...'">
								<input type="email" placeholder="Enter Email Here..." onfocus="this.placeholder=''"
									onblur="this.placeholder='Enter Email Here...'">
								<a href="javascript:;" class="am-btn">get started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact section end -->
	<!--Map Section Start-->
	<div class="am_map_wrapper">
		<div class="container-fluid">
			<div class="row">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117763.55154239164!2d75.79380997633002!3d22.72411583768725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1634751778862!5m2!1sen!2sin"
					width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
	<!-- footer section start -->
	<div class="am-footer-wrapper" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-9 col-sm-8 col-12">
					<div class="am-footer-first">
						<div class="am-footer-logo">
							<img src="assets/images/footer-logo.png" alt="">
						</div>
						<div class="am-footer-details">
							<ul>
								<li>
									<a href="javascript:;"><img src="assets/images/call.png" alt="">(312)
										1234-56789</a>
								</li>
								<li>
									<a href="javascript:;"><img src="assets/images/telegram.png"
											alt="">info@example.com</a>
								</li>
							</ul>
						</div>
						<div class="am-footer-icon">
							<p>Follow Us-</p>
							<ul>
								<li>
									<a href="javascript:;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="8" height="16"
												viewBox="0 0 8 16">
												<path id="Shape-17-copy" data-name="Shape 17 copy" class="cls-1"
													d="M401.7,4910h-1.919c-2.156,0-3.55,1.54-3.55,3.94v1.81H394.3a0.318,0.318,0,0,0-.3.33v2.63a0.309,0.309,0,0,0,.3.32h1.93v6.64a0.318,0.318,0,0,0,.3.33h2.517a0.318,0.318,0,0,0,.3-0.33v-6.64h2.256a0.309,0.309,0,0,0,.3-0.32v-2.63a0.332,0.332,0,0,0-.088-0.23,0.3,0.3,0,0,0-.214-0.1h-2.257v-1.54a0.892,0.892,0,0,1,1.054-1.11H401.7a0.318,0.318,0,0,0,.3-0.33v-2.44a0.318,0.318,0,0,0-.3-0.33h0Zm0,0"
													transform="translate(-394 -4910)" />
											</svg>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="16"
												viewBox="0 0 19 16">
												<path id="Shape-18-copy" data-name="Shape 18 copy" class="cls-1"
													d="M466,4911.89a7.841,7.841,0,0,1-2.245.64,3.978,3.978,0,0,0,1.714-2.23,7.9,7.9,0,0,1-2.47.98,3.84,3.84,0,0,0-2.845-1.28,3.965,3.965,0,0,0-3.893,4.04,4.351,4.351,0,0,0,.09.92,10.9,10.9,0,0,1-8.028-4.23,4.216,4.216,0,0,0-.534,2.05,4.088,4.088,0,0,0,1.731,3.35,3.681,3.681,0,0,1-1.76-.5v0.05a4.012,4.012,0,0,0,3.121,3.96,3.755,3.755,0,0,1-1.022.14,3.591,3.591,0,0,1-.737-0.07,3.951,3.951,0,0,0,3.64,2.81,7.68,7.68,0,0,1-4.83,1.72,7.152,7.152,0,0,1-.932-0.05,10.71,10.71,0,0,0,5.975,1.81c7.168,0,11.087-6.16,11.087-11.49,0-.18-0.006-0.35-0.014-0.52A7.935,7.935,0,0,0,466,4911.89Z"
													transform="translate(-447 -4910)" />
											</svg>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
												viewBox="0 0 15 16">
												<path id="Shape-19-copy" data-name="Shape 19 copy" class="cls-1"
													d="M513.911,4919.13l-0.724-.58a1.163,1.163,0,0,1-.521-0.9,1.474,1.474,0,0,1,.562-1.02,3.471,3.471,0,0,0,.262-5.78h1.243l1.307-.85h-3.956a5.962,5.962,0,0,0-3.795,1.24,3.831,3.831,0,0,0-1.285,2.8,3.237,3.237,0,0,0,3.333,3.28c0.2,0,.42-0.02.642-0.04a1.892,1.892,0,0,0-.2.81,2.232,2.232,0,0,0,.6,1.42,8.377,8.377,0,0,0-3.836.96,3.017,3.017,0,0,0-1.545,2.54c0,1.55,1.4,2.99,4.316,2.99,3.453,0,5.281-1.98,5.281-3.94a3.648,3.648,0,0,0-1.686-2.93h0Zm-2.63-2.4c-1.728,0-2.51-2.31-2.51-3.71a2.5,2.5,0,0,1,.441-1.55,1.867,1.867,0,0,1,1.407-.68c1.665,0,2.528,2.33,2.528,3.84a2.161,2.161,0,0,1-.5,1.52,2.031,2.031,0,0,1-1.365.58h0Zm0.02,8.39c-2.148,0-3.534-1.06-3.534-2.54a2.3,2.3,0,0,1,1.726-2.15,7.534,7.534,0,0,1,2.109-.34,3.259,3.259,0,0,1,.461.02c1.527,1.13,2.19,1.69,2.19,2.76,0,1.29-1.025,2.25-2.952,2.25h0Zm0,0,7.68-8.42v-2.09h-0.993v2.09h-2.009v1.04h2.009v2.1h0.993v-2.1H521v-1.04h-2.019Zm0,0"
													transform="translate(-506 -4910)" />
											</svg>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
												viewBox="0 0 15 16">
												<path id="Shape-20-copy" data-name="Shape 20 copy" class="cls-1"
													d="M576.814,4912.32a7.233,7.233,0,0,0-5.283-2.32,7.723,7.723,0,0,0-7.469,7.93,8.306,8.306,0,0,0,1,3.96L564,4926l3.959-1.1a7.13,7.13,0,0,0,3.569.96h0a7.723,7.723,0,0,0,7.469-7.93,8.136,8.136,0,0,0-2.186-5.61h0Zm-5.283,12.2h0a5.93,5.93,0,0,1-3.16-.92l-0.226-.14-2.35.65,0.627-2.43-0.148-.25a6.875,6.875,0,0,1-.949-3.5,6.414,6.414,0,0,1,6.211-6.59,5.968,5.968,0,0,1,4.388,1.93,6.768,6.768,0,0,1,1.817,4.66,6.413,6.413,0,0,1-6.208,6.59h0Zm3.405-4.93c-0.186-.1-1.1-0.58-1.275-0.65a0.285,0.285,0,0,0-.42.1c-0.124.2-.482,0.65-0.591,0.78a0.276,0.276,0,0,1-.4.05,5.029,5.029,0,0,1-1.5-.99,5.786,5.786,0,0,1-1.038-1.37,0.307,0.307,0,0,1,.082-0.4,6.045,6.045,0,0,0,.466-0.68,0.388,0.388,0,0,0-.015-0.35c-0.047-.1-0.42-1.07-0.576-1.47a0.381,0.381,0,0,0-.419-0.34h-0.358a0.65,0.65,0,0,0-.5.24,2.3,2.3,0,0,0-.653,1.66,4.04,4.04,0,0,0,.762,2.05,8.573,8.573,0,0,0,3.188,2.99,10.631,10.631,0,0,0,1.064.41,2.438,2.438,0,0,0,1.175.08,1.912,1.912,0,0,0,1.26-.94,1.757,1.757,0,0,0,.109-0.94,0.985,0.985,0,0,0-.358-0.23h0Zm0,0"
													transform="translate(-564 -4910)" />
											</svg>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-12">
					<div class="am-footer-second">
						<div class="am-footer-btm-heading">
							<h3>Earn With Us</h3>
						</div>
						<div class="am-footer-btm-links">
							<ul>
								<li><a href="javascript:;">Promote</a></li>
								<li><a href="javascript:;">Sell Your Product</a></li>
								<li><a href="javascript:;">Client Support</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-9 col-sm-8 col-12">
					<div class="am-footer-second">
						<div class="am-footer-btm-heading">
							<h3>Information</h3>
						</div>
						<div class="am-footer-btm-links">
							<ul>
								<li><a href="javascript:;">Privacy</a></li>
								<li><a href="javascript:;">Terms</a></li>
								<li><a href="javascript:;">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-12">
					<div class="am-footer-second">
						<div class="am-footer-btm-heading">
							<h3>Useful Links</h3>
						</div>
						<div class="am-footer-btm-links">
							<ul>
								<li><a href="javascript:;">Merchants</a></li>
								<li><a href="javascript:;">Agencies</a></li>
								<li><a href="javascript:;">Affiliates</a></li>
								<li><a href="javascript:;">About Us</a></li>
								<li><a href="javascript:;">Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer section end -->
	<!-- copyright section start -->
	<div class="am-copyright-wrapper">
		<p class="am-paragraph">© 2022, <a href="index.html">Affiliate Marketing.</a> All rights reserved.</p>
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