<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo @$baslik; ?></title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link rel="stylesheet" href="css2.css?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
  <?php if(@$choices==1) :?>
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
   <?php endif; ?>
	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="gtag/js.js?id=G-7N7LGGGWT1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7N7LGGGWT1');
	</script>

</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-5">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">



				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item active" href="index.php">Home Default</a></li>
							<li> <a class="dropdown-item" href="anket.php">Anket</a></li>

						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Course</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a></li>
									<li> <a class="dropdown-item" href="course-grid-2.html">Course Grid Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-list.html">Course List Classic</a></li>
									<li> <a class="dropdown-item" href="course-list-2.html">Course List Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-detail.html">Course Detail Classic</a></li>
									<li> <a class="dropdown-item" href="course-detail-min.html">Course Detail Minimal</a></li>
									<li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail Advance</a></li>
									<li> <a class="dropdown-item" href="course-video-player.html">Course Full Screen Video</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">About</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="about.html">About Us</a></li>
									<li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
									<li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
									<li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
									<li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
							<li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
							<li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
									<li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
							<li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
							<li> <a class="dropdown-item" href="cart.html">Cart</a></li>
							<li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
							<li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
							<li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
						</ul>
					</li>

					<!-- Nav item 3 Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="instructor-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="instructor-manage-course.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="instructor-create-course.html"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Course</a> </li>
									<li> <a class="dropdown-item" href="course-added.html"><i class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
									<li> <a class="dropdown-item" href="instructor-earning.html"><i class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
									<li> <a class="dropdown-item" href="instructor-studentlist.html"><i class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
									<li> <a class="dropdown-item" href="instructor-order.html"><i class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
									<li> <a class="dropdown-item" href="instructor-review.html"><i class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
									<li> <a class="dropdown-item" href="instructor-payout.html"><i class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
								<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="student-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a> </li>
									<li> <a class="dropdown-item" href="student-course-list.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment Info</a> </li>
									<li> <a class="dropdown-item" href="student-bookmark.html"><i class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="admin-dashboard.html"><i class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
							<li> <hr class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="instructor-edit-profile.html"><i class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
							<li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
							<li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Megamenu-->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Megamenu</a>
						<div class="dropdown-menu dropdown-menu-end pb-0" data-bs-popper="none">
							<div class="row p-4 g-4">
								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Get started</h6>
									<hr>
									<ul class="list-unstyled">
										<li> <a class="dropdown-item" href="#">Market research</a> </li>
										<li> <a class="dropdown-item" href="#">Advertising</a> </li>
										<li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
										<li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
										<li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
										<li> <a class="dropdown-item" href="#">Social media marketing</a> </li>
										<li> <a class="dropdown-item" href="#">Public relations</a> </li>
										<li> <a class="dropdown-item" href="#">Advertising</a> </li>
										<li> <a class="dropdown-item" href="#">Decision science</a> </li>
										<li> <a class="dropdown-item" href="#">SEO</a> </li>
										<li> <a class="dropdown-item" href="#">Business marketing</a> </li>
									</ul>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Degree</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Contact management</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Sales pipeline</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">Security & Permission</a>
										<p class="mb-0 small text-truncate-2">Speedily say has suitable disposal add boy. On forth doubt miles of child.</p>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Certificate</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Google SEO certificate</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Business Development Executive(BDE)</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Facebook social media marketing</a>
											<p class="mb-0 small">Expert advice</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">Creative graphics design</a>
											<p class="mb-0 small">No prerequisites</p>
										</div>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">Download Eduport</h6>
									<hr>
									<!-- Image -->
									<img src="assets/images/element/14.svg" alt="">

									<!-- Download button -->
									<div class="row g-2 justify-content-center mt-3">
										<!-- Google play store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="assets/images/client/google-play.svg" class="btn-transition" alt="google-store"> </a>
										</div>
										<!-- App store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="assets/images/client/app-store.svg" class="btn-transition" alt="app-store"> </a>
										</div>
									</div>
								</div>

								<!-- Action box -->
								<div class="col-12">
									<div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
										<!-- Avatar -->
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Info -->
										The personality development class starts at 2:00 pm, click to <a href="#" class="alert-link">Join Now</a>
									</div>
								</div>
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
							<li>
								<a class="dropdown-item" href="index-1.htm" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a>
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="rtl/index.htm" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="store/webestica/index.htm" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
								</a>
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="docs/alerts.html" target="_blank">
									<i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- Nav Main menu END -->

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">Lori Ferguson</a>
								<p class="small m-0">example@gmail.com</p>
							</div>
						</div>
						<hr>
					</li>
					<!-- Links -->
					<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Dark mode switch START -->
					<li>
						<div class="modeswitch-wrap" id="darkModeSwitch">
							<div class="modeswitch-item">
								<div class="modeswitch-icon"></div>
							</div>
							<span>Dark mode</span>
						</div>
					</li>
          <!-- Dark mode switch END -->
				</ul>
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
