<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/signstyle.css">
</head>
<body class="animsition">
	<header>
		<div class="container-menu-desktop">
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over 1000K IDR to all addresses within Indonesia
					</div>
					<div class="right-top-bar flex-w h-full">
						<a href="index.html" class="flex-c-m trans-04 p-lr-25">
							Beranda
						</a>
						<a href="signup.html" class="flex-c-m trans-04 p-lr-25">
							Sign Up
						</a>
						<a href="signin.html" class="flex-c-m trans-04 p-lr-25">
							Sign In
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over 1000K IDR to all addresses within Indonesia
					</div>
				</li>
				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="index.html" class="flex-c-m p-lr-10 trans-04">
							Beranda
						</a>
						<a href="signup.html" class="flex-c-m p-lr-10 trans-04">
							Sign Up
						</a>
						<a href="signin.html" class="flex-c-m p-lr-10 trans-04">
							Sign In
						</a>
					</div>
				</li>
			</ul>
		</div>
	</header>

	<section class="signup">
		<div class="container-sign">
			<div class="signup-content">
				<div class="signup-form">
					<h2 class="form-title">Sign up</h2>
                    <form class="register-form" id="register-form" action="/user/store" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="POST">
                          </div>
                        <div class="form-group">
						<div class="form-group">
							<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
							<input type="text" name="name" id="name" placeholder="Your Name"/>
						</div>
						<div class="form-group">
							<label for="email"><i class="zmdi zmdi-email"></i></label>
							<input type="email" name="email" id="email" placeholder="Your Email"/>
						</div>
						<div class="form-group">
							<label for="pass"><i class="zmdi zmdi-lock"></i></label>
							<input type="password" name="password" id="pass" placeholder="Password"/>
						</div>
						<div class="form-group">
							<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
							<input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
						</div>
						<div class="form-group">
							<label for="re-pass"><i class="zmdi zmdi-accounts-list-alt"></i></label>
							<input type="phone" name="phone" id="phone" placeholder="Phone"/>
						</div>
						<div class="form-group">
							<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
							<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
						</div>
						<div class="form-group form-button">
							<input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
						</div>
					</form>
				</div>

				<div class="signup-image">

					<figure><img src="{{ ('images/signin-signup.jpg') }}" alt="sing up image"></figure>
					<a href="signin.html" class="signup-image-link">I am already member</a><a href="index.html" class="signup-image-link">Home</a>
				</div>
			</div>
		</div>
	</section>

	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
    {{-- {{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }} --}}
    <script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
    </script>
    {{-- {{ ('images/signin-signup.jpg') }}
    {{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }} --}}
	<script src="{{ URL::asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script> --}}
    <script src="{{ URL::asset('js/map-custom.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>
