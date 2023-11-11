	<!-- header section css start -->
	<div class="am-header-wrapper">
		<div class="container-fluid">
			<div class="am-navbar-wrapper">
				<div class="am-brand-logo">
					<a href="{{ route('index') }}"><img src="assets/images/JETPACK.IO-04.png" alt="logo" width="280px"></a>
					<div class="am-toggle-btn">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="am-navbar-menu">
					<ul>
						<li class="responsive-logo"><a href="{{ route('index') }}"><img src="assets/images/logo.png"></a></li>
						<li class="active"><a href="{{ route('index') }}">home</a></li>
						<li><a href="">Features</a></li>
						<li><a href="">Pricing</a></li>
						<li><a href="{{ route('signin')}}">Login</a></li>
						{{-- <li><a href="{{ route('signup')}}">Signup</a></li> --}}
						
						<!-- <li class="start-earning"><a href="{{ route('earning')}}" class="am-btn">Start earning</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- header section css end -->