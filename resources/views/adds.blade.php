<!DOCTYPE html>
<!-- 
    Template Name: Affiliate Marketing HTML Website Template
    version: 1.0.0
    Author: PixelNX
 -->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->

<head>
	<!--=== Required meta tags ===-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--=== custom css ===-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.css" />
	<link rel="stylesheet" href="assets/css/animate.min.css" />	
	<link rel="shortcut icon" type="image/ico" href="assets/images/JETPACK.IO-04.png"/>	
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!--=== custom css ===-->

	<link rel="stylesheet" href="assets/css/adds.css">

	<!--=== Font Awesome ===-->
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Jetpack.io</title>
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
	<div class="am-header-wrapper">
		<div class="container-fluid">
			<div class="am-navbar-wrapper">
				<div class="am-brand-logo">
					<a href="index.html"><img src="assets/images/JETPACK.IO-04.png" alt="logo" width="280px"></a>
					<div class="am-toggle-btn">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="am-navbar-menu">
					<ul>
						<li class="responsive-logo"><a href="{{ route('index') }}"><img src="assets/images/logo.png"></a></li>
						<li class="active"><a href="{{ route('index') }}">Adds</a></li>
						<li><a href="{{ route('about')}}">Pages</a></li>
						<li><a href="{{ route ('earning')}}">Stores</a></li>
						<li><a href="{{ route('pricing')}}">Tutorial</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- header section css end -->
	<!-- banner section start -->
	<div class="am-banner-wrapper">
		<div class="banner-inner">
			<div class="banner-inner-main">
				<div class="row align-items-center">
					<div id="kt_toolbar_container" class="container-fluid container-fluid">
						<div class="row justify-content-between gy-4 gx-4">
							<div class="col-12 col-md-4 me-auto py-0">
								<form class="d-flex align-items-center reset-form">
									<div class="input-group" style="height: 40px; overflow: hidden;">
										<input type="text" class="form-control" name="search" placeholder="Search..." style="max-height: 40px;">
										<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
										<span class="btn btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none">
											<i class="bi bi-search fs-2"></i></span>
											<button class="btn btn-secondary btn-icon submit-button" type="submit" style="display: block; border-top-right-radius: var(--bs-btn-border-radius); border-bottom-right-radius: var(--bs-btn-border-radius); border-bottom-left-radius: 0px; border-top-left-radius: 0px; height: 40px;">
												<i class="fas fa-search fs-2"></i>
											</button>
											<button class="btn btn-secondary btn-icon reset-button" type="reset" style="display: none;">
												<i class="bi bi-x-circle fs-2" style="margin-bottom: 1px;"></i>
											</button>
										</div>
									</form>
							</div>
								<div class="col-12 col-md-8 py-0">
									<div class="row gy-4 gx-4">
										<div class="col-12 col-md-6">
											<div style="display: table; table-layout: fixed;">
													<div style="display:table-cell; width: 100%;">
														<select class="form-select w-100 step7" aria-label="Sorting" style="height: 40px;">
															<option value="sortby" disabled="">Sort By:</option>
															<option value="ad_duplicates">Active Ads</option>
															<option value="ad_trendFactor">Trending</option>
															<option value="ad_performance">Performance</option>
															<option value="moved_percentage">Percentage Change</option>
															<option value="ad_date">Creation Date</option>
														</select>
													</div>
													<div style="display: table-cell; padding-left: 5px;">
														<div role="group" class="MuiToggleButtonGroup-root css-1ya7z0e" style="height: 40px; overflow: hidden;"><button class="MuiButtonBase-root MuiToggleButton-root MuiToggleButton-sizeMedium MuiToggleButton-standard MuiToggleButtonGroup-grouped MuiToggleButtonGroup-groupedHorizontal css-q5cu77" tabindex="0" type="button" value="ASC" aria-pressed="false" aria-label="Ascending">
															<i class="fa-solid fa-up-long"></i>
															<span class="MuiTouchRipple-root css-w0pj6f"></span>
														</button>
														<button class="MuiButtonBase-root MuiToggleButton-root Mui-selected MuiToggleButton-sizeMedium MuiToggleButton-standard MuiToggleButtonGroup-grouped MuiToggleButtonGroup-groupedHorizontal css-q5cu77" tabindex="0" type="button" value="DESC" aria-pressed="true" aria-label="Descending"><i class="fa-solid fa-down-long"></i><span class="MuiTouchRipple-root css-w0pj6f"></span>
														</button>
													</div>
												</div>
											</div>
										</div>
									<div class="col-12 col-md-6">
										<div style="display: flex; height: 42px;"><div style="display: table-cell; width: 100%;">
											<input type="text" class="form-control form-control-solid afdaterangepicker" placeholder="Pick date rage" readonly="" value="Last 30 Days" style="text-align: right; font-size: small; height: 40px;">
										</div>
										<div style="display: table-cell; padding-left: 5px;">
											<div role="group" class="MuiToggleButtonGroup-root btn btn-outline px-0 py-0 btn-active-light-dark css-1ya7z0e" aria-label="Favorites" style="height: 40px; overflow: hidden;">
												<button class="MuiButtonBase-root MuiToggleButton-root MuiToggleButton-sizeMedium MuiToggleButton-standard MuiToggleButtonGroup-grouped MuiToggleButtonGroup-groupedHorizontal css-q5cu77" tabindex="0" type="button" value="onlyFav" aria-pressed="false" aria-label="Favorites" title="Only Favorites" style="overflow: hidden; border: none;">
													<i class="fas fa-heart fs-2 px-0 py-0 text-red"></i>
													<span class="MuiTouchRipple-root css-w0pj6f"></span>
												</button>
											</div>
										</div>
										<div style="display: table-cell; padding-left: 5px; height: 40px;"><button type="button" title="Reset" class="btn btn-toolbar-reset btn-icon btn-outline btn-active-light-dark my-0 mx-0" style="height: 40px; overflow: hidden;">
											<i class="fas fa-undo-alt"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
				</div>


				<div class="bottom_filter my-4 py-3">
					<div class="container-fluid">
						<div class="row bottom_filter_inner">
							<div class="col-md-3 mt-1">
								<label for="">Technologies</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>
							<div class="col-md-3 mt-1">
								<label for="">Country</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>
							<div class="col-md-3 mt-1">
								<label for="">Language</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>
							<div class="col-md-3 mt-1">
								<label for="">Call To Action</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>

							<div class="col-md-3 mt-1">
								<label for="">Display Format</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>
							<div class="col-md-3 mt-1">
								<label for="">Publisher Platform</label>
								<select name="technology" id="">
									<option value="">Technology</option>
									<option value="">Yes</option>
									<option value="">Computer</option>
									<option value="">Adds</option>
									<option value="">Few Adds</option>
								</select>
							</div>

							<div class="col-md-3 mt-1">
								<label for="">Active Adds</label>
								<input type="range" name="active_adds" min="0" max="1000">
							</div>
							<div class="col-md-3 mt-1">
								<label for="">Trend Factors</label>
								<input type="range" name="trend_factors" >
							</div>
						</div>
					</div>
				</div>


				<div class="add_area my-4 py-3">
					<div class="container-fluid">
						<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
							@foreach($alladds as $ads)
							<div class="col">
							  <div class="p-3 border  add_area_inner">

							  	<div title="Active Ads" class="ribbon-label fs-4 text-white step4"><i class="far fa-clone text-white pe-2"></i>{{ $ads['ad_duplicates'] }}</div>

							  	<div class="add_area_inner_top">
							  		<span class="fw-semibold fs-7 pt-2 pb-1">
								  		<span class="badge badge-secondary me-2 step1 " title="Trend Factor">
								  			<i class="fas fa-rocket text-gray-700 me-2"></i> 1
								  		</span>
								  		<span class="badge badge-secondary step2" title="Performance Factor">
								  			<i class="fa fa-tachometer text-gray-700 me-2"></i>
								  			171
								  		</span>
								  	</span>

							  	<span class="fw-semibold fs-7 py-1 step3">
							  		<span style="line-height: 22px;">Progression:
							  		</span>
							  		<span>
							  			<span class="badge mx-2 me-0 mouse-click badge-primary" title="Active Ads Compared to the Last Tracked Day" style="background-color: rgb(27, 183, 115);">
							  				<i class="fa-solid fa-caret-up text-white me-1"></i> 1,664.3%
							  			</span>
							  		</span>
							  	</span>

							  	<span class="fw-semibold fs-7 py-1">
							  		Start: {{ date('d-m-Y', strtotime($ads['ad_date'])); }}
							  		<span class="badge badge-secondary">
							  			a month ago
							  		</span>
							  	</span>

							  	<span class="fw-semibold fs-7 py-1">
							  		Last Seen: Sep 22, 2023 
							  		<span class="badge badge-secondary">
								  		3 days ago
								  	</span>
								</span>

								<span class="fw-semibold fs-7 py-1">Countries: <img aria-label="GB" title="GB" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/gb.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><img aria-label="CA" title="CA" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/ca.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><img aria-label="AU" title="AU" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/au.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><img aria-label="FR" title="FR" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/fr.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><img aria-label="DE" title="DE" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/de.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><img aria-label="NL" title="NL" src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.4/flags/4x3/nl.svg" style="display: inline-block; width: 16px; height: 16px; vertical-align: middle; margin-right: 5px;"><span>more</span></span>

								<span class="fw-semibold fs-7 py-1">
									<span class="pe-2">
										Website:
									</span>
										<i class="fa fa-google fs-5 pe-2" title="Pinterest Ads" style="color: rgb(230, 0, 35);"></i>
										<i class="fa-brands fa-pinterest fs-5 pe-2" title="Pinterest Ads" style="color: rgb(230, 0, 35);"></i>
								</span>
							  	</div>

							  	<div class="add_area_inner_bottom">
							  		<div class="card border-0 pt-3 pb-3 ">
							  			<div class="d-flex align-items-center w-100">
							  				<div class="symbol symbol-40px me-4">
							  					<img alt="Logo" src="https://cdn.afterlib.com/111617758541821_pa_pp_0_kWQ.jpg">
							  				</div>
							  				<div class="d-flex flex-column w-100">
							  					<div class="card-label fw-bold fs-5 pe-2 " style="word-break: break-all;">
							  						<span class="mouse-click step6" title="FUNNYFUZZY">
							  							FUNNYFUZZY
							  						</span>
							  					</div>
							  					<span class="fw-semibold text-gray-700 fs-7">
							  						Sponsored
							  					</span>
							  					<span class="fw-semibold text-gray-700 fs-7 cursor-pointer">
							  						<i class="fa-solid fa-eye"></i> Full View
							  					</span>
							  				</div>
							  				<div class="card-toolbar flex-column step5">
							  					<button type="button" class="btn btn-sm btn-icon btn-secondary btn-outline step56" aria-describedby="popup-3">
							  						<span class="svg-icon svg-icon-2">
							  							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect><rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect><rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect><rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect></g></svg>
							  						</span>
							  					</button>
							  				</div>
							  			</div>
							  		</div>


							  		<div title="🐶A fashionable striped sofa exclusively for pets, with a creative double-layer cushion for added comfort and increased pet happiness.😍" class="d-flex flex-column py-0 pb-1">
							  			<div class="dada-body dada-body-stay">🐶A fashionable striped sofa e...</div>
							  		</div>


							  		<div class="d-flex flex-column py-2 px-0 pb-0">
							  			<div class="MuiBox-root css-1278zjq" imageurl="https://cdn.afterlib.com/1055913312448396_thumb_0_pTU.jpg">
							  				<video preload="none" poster="https://cdn.afterlib.com/1055913312448396_thumb_0_pTU.jpg" controls="">
							  					<source src="https://cdn.afterlib.com/1055913312448396_vid_0_YeF.mp4" type="video/mp4">
							  					Your browser does not support the video tag.
							  				</video>
							  			</div>
							  			<div class="card border-0  py-2" style="height: 75px;">
							  				<div class="d-flex align-items-center w-100">
							  					<div class="flex-column" style="overflow: hidden; text-overflow: ellipsis; flex: 1 0 0%; padding-right: 0.5rem;">
							  						<p class="fw-semibold fs-9 text-gray-700 text-uppercase my-0">
							  							funnyfuzzy.com
							  						</p>
							  						<p class="fw-semibold fs-8 text-gray-900 my-0">
							  							<a title="Trendy Striped Lambswool Double Layer Dog &amp; Cat Sofa Bed" href="https://funnyfuzzy.com/products/color-shock-lamb-wool-pet-sofa-dog-cat-sofa-bed" rel="noopener noreferrer nofollow" class="text-gray-900" target="_blank">
							  								Trendy Striped Lambswool Doub...</a>
							  							</p>
							  						</div>
							  						<div class="flex-column" style="flex: 0 0 0%;">
							  							<a href="https://funnyfuzzy.com/products/color-shock-lamb-wool-pet-sofa-dog-cat-sofa-bed" target="_blank" rel="noopener noreferrer nofollow">
							  								<button type="button" class="btn btn-sm btn-secondary text-malign mt-2 me-0" style="white-space: nowrap; text-align: center; padding: 10px 8px; margin: 2px 0px 2px 4px;">
							  									Shop now
							  								</button>
							  							</a>
							  						</div>
							  					</div>
							  				</div>
							  			</div>


							  	</div>	

							  </div>
							</div>
							@endforeach
							{{-- 
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div>
							<div class="col">
							<div class="p-3 border  add_area_inner">Row column</div>
							</div> --}}
							</div>
					</div>
				</div>

			</div>
		</div>


	</div>
	<!-- banner section end -->

	<!-- footer section start -->
	<div class="am-footer-wrapper" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-9 col-sm-8 col-12">
					<div class="am-footer-first">
						<div class="am-footer-logo">
							<img src="assets/images/JETPACK.IO-04.png" alt="" width="280px">
						</div>
						<div class="am-footer-details">
							<ul>
								<li>
									<a href="javascript:;"><img src="assets/images/call.png" alt="">(312) 1234-56789</a>
								</li>
								<li>
									<a href="javascript:;"><img src="assets/images/telegram.png" alt="">info@example.com</a>
								</li>
							</ul>							
						</div>
						<div class="am-footer-icon">
							<p>Follow Us-</p>
							<ul>
								<li>
									<a href="javascript:;">
										<span>											
											<svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16">	
												<path id="Shape-17-copy" data-name="Shape 17 copy" class="cls-1" d="M401.7,4910h-1.919c-2.156,0-3.55,1.54-3.55,3.94v1.81H394.3a0.318,0.318,0,0,0-.3.33v2.63a0.309,0.309,0,0,0,.3.32h1.93v6.64a0.318,0.318,0,0,0,.3.33h2.517a0.318,0.318,0,0,0,.3-0.33v-6.64h2.256a0.309,0.309,0,0,0,.3-0.32v-2.63a0.332,0.332,0,0,0-.088-0.23,0.3,0.3,0,0,0-.214-0.1h-2.257v-1.54a0.892,0.892,0,0,1,1.054-1.11H401.7a0.318,0.318,0,0,0,.3-0.33v-2.44a0.318,0.318,0,0,0-.3-0.33h0Zm0,0" transform="translate(-394 -4910)"/>
											</svg>  
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>																						
											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">	
												<path id="Shape-18-copy" data-name="Shape 18 copy" class="cls-1" d="M466,4911.89a7.841,7.841,0,0,1-2.245.64,3.978,3.978,0,0,0,1.714-2.23,7.9,7.9,0,0,1-2.47.98,3.84,3.84,0,0,0-2.845-1.28,3.965,3.965,0,0,0-3.893,4.04,4.351,4.351,0,0,0,.09.92,10.9,10.9,0,0,1-8.028-4.23,4.216,4.216,0,0,0-.534,2.05,4.088,4.088,0,0,0,1.731,3.35,3.681,3.681,0,0,1-1.76-.5v0.05a4.012,4.012,0,0,0,3.121,3.96,3.755,3.755,0,0,1-1.022.14,3.591,3.591,0,0,1-.737-0.07,3.951,3.951,0,0,0,3.64,2.81,7.68,7.68,0,0,1-4.83,1.72,7.152,7.152,0,0,1-.932-0.05,10.71,10.71,0,0,0,5.975,1.81c7.168,0,11.087-6.16,11.087-11.49,0-.18-0.006-0.35-0.014-0.52A7.935,7.935,0,0,0,466,4911.89Z" transform="translate(-447 -4910)"/>
											</svg>   
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>																																	
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">	
												<path id="Shape-19-copy" data-name="Shape 19 copy" class="cls-1" d="M513.911,4919.13l-0.724-.58a1.163,1.163,0,0,1-.521-0.9,1.474,1.474,0,0,1,.562-1.02,3.471,3.471,0,0,0,.262-5.78h1.243l1.307-.85h-3.956a5.962,5.962,0,0,0-3.795,1.24,3.831,3.831,0,0,0-1.285,2.8,3.237,3.237,0,0,0,3.333,3.28c0.2,0,.42-0.02.642-0.04a1.892,1.892,0,0,0-.2.81,2.232,2.232,0,0,0,.6,1.42,8.377,8.377,0,0,0-3.836.96,3.017,3.017,0,0,0-1.545,2.54c0,1.55,1.4,2.99,4.316,2.99,3.453,0,5.281-1.98,5.281-3.94a3.648,3.648,0,0,0-1.686-2.93h0Zm-2.63-2.4c-1.728,0-2.51-2.31-2.51-3.71a2.5,2.5,0,0,1,.441-1.55,1.867,1.867,0,0,1,1.407-.68c1.665,0,2.528,2.33,2.528,3.84a2.161,2.161,0,0,1-.5,1.52,2.031,2.031,0,0,1-1.365.58h0Zm0.02,8.39c-2.148,0-3.534-1.06-3.534-2.54a2.3,2.3,0,0,1,1.726-2.15,7.534,7.534,0,0,1,2.109-.34,3.259,3.259,0,0,1,.461.02c1.527,1.13,2.19,1.69,2.19,2.76,0,1.29-1.025,2.25-2.952,2.25h0Zm0,0,7.68-8.42v-2.09h-0.993v2.09h-2.009v1.04h2.009v2.1h0.993v-2.1H521v-1.04h-2.019Zm0,0" transform="translate(-506 -4910)"/>
											</svg>	
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<span>																																												
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16">	
												<path id="Shape-20-copy" data-name="Shape 20 copy" class="cls-1" d="M576.814,4912.32a7.233,7.233,0,0,0-5.283-2.32,7.723,7.723,0,0,0-7.469,7.93,8.306,8.306,0,0,0,1,3.96L564,4926l3.959-1.1a7.13,7.13,0,0,0,3.569.96h0a7.723,7.723,0,0,0,7.469-7.93,8.136,8.136,0,0,0-2.186-5.61h0Zm-5.283,12.2h0a5.93,5.93,0,0,1-3.16-.92l-0.226-.14-2.35.65,0.627-2.43-0.148-.25a6.875,6.875,0,0,1-.949-3.5,6.414,6.414,0,0,1,6.211-6.59,5.968,5.968,0,0,1,4.388,1.93,6.768,6.768,0,0,1,1.817,4.66,6.413,6.413,0,0,1-6.208,6.59h0Zm3.405-4.93c-0.186-.1-1.1-0.58-1.275-0.65a0.285,0.285,0,0,0-.42.1c-0.124.2-.482,0.65-0.591,0.78a0.276,0.276,0,0,1-.4.05,5.029,5.029,0,0,1-1.5-.99,5.786,5.786,0,0,1-1.038-1.37,0.307,0.307,0,0,1,.082-0.4,6.045,6.045,0,0,0,.466-0.68,0.388,0.388,0,0,0-.015-0.35c-0.047-.1-0.42-1.07-0.576-1.47a0.381,0.381,0,0,0-.419-0.34h-0.358a0.65,0.65,0,0,0-.5.24,2.3,2.3,0,0,0-.653,1.66,4.04,4.04,0,0,0,.762,2.05,8.573,8.573,0,0,0,3.188,2.99,10.631,10.631,0,0,0,1.064.41,2.438,2.438,0,0,0,1.175.08,1.912,1.912,0,0,0,1.26-.94,1.757,1.757,0,0,0,.109-0.94,0.985,0.985,0,0,0-.358-0.23h0Zm0,0" transform="translate(-564 -4910)"/>
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
		<p class="am-paragraph">© 2023, <a href="index.html">JetPack.io</a> All rights reserved.</p>
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