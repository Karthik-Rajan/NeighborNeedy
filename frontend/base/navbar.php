	<body>
		<header id="header" class="clearfix">
			<nav class="navbar navbar-default navbar-expand-lg">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu" aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
					</button>
					<a class="navbar-brand" href="">
						<img class="img-fluid" src="./assets/img/logo/logo_112X35.png" alt="Logo"></a>
					<div class="collapse navbar-collapse" id="tr-mainmenu">
						<!--<ul class="nav navbar-nav">
							<li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="active"><a href="https://demo.themeregion.com/trade/index.html">Home Default </a></li>
								<li><a href="https://demo.themeregion.com/trade/index-one.html">Home Version-1</a></li>
								<li><a href="https://demo.themeregion.com/trade/index-two.html">Home Version-2</a></li>
								<li><a href="https://demo.themeregion.com/trade/index-three.html">Home Version-3</a></li>
								<li><a href="https://demo.themeregion.com/trade/index-car.html">Home Car-1<span class="badge">New</span></a></li>
								<li><a href="https://demo.themeregion.com/trade/index-car-two.html">Home Car-2<span class="badge">New</span></a></li>
								<li><a href="https://demo.themeregion.com/trade/directory.html">Home Directory<span class="badge">Latest</span></a></li>
							</ul>
						</li>
						<li><a href="https://demo.themeregion.com/trade/categories.html">Category</a></li>
						<li><a href="https://demo.themeregion.com/trade/details.html">Ad Details</a></li>
						<li><a href="https://demo.themeregion.com/trade/faq.html">Help/Support</a></li>
						<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="https://demo.themeregion.com/trade/about-us.html">ABout Us</a></li>
							<li><a href="https://demo.themeregion.com/trade/contact-us.html">Contact Us</a></li>
							<li><a href="https://demo.themeregion.com/trade/ad-post.html">Ad post</a></li>
							<li><a href="https://demo.themeregion.com/trade/ad-post-details.html">Ad post Details</a></li>
							<li><a href="https://demo.themeregion.com/trade/categories-main.html">Category Ads</a></li>
							<li><a href="https://demo.themeregion.com/trade/details.html">Ad Details</a></li>
							<li><a href="https://demo.themeregion.com/trade/my-ads.html">My Ads</a></li>
							<li><a href="https://demo.themeregion.com/trade/my-profile.html">My Profile</a></li>
							<li><a href="https://demo.themeregion.com/trade/favourite-ads.html">Favourite Ads</a></li>
							<li><a href="https://demo.themeregion.com/trade/archived-ads.html">Archived Ads</a></li>
							<li><a href="https://demo.themeregion.com/trade/pending-ads.html">Pending Ads</a></li>
							<li><a href="https://demo.themeregion.com/trade/delete-account.html">Close Account</a></li>
							<li><a href="https://demo.themeregion.com/trade/published.html">Ad Publised</a></li>
							<li><a href="https://demo.themeregion.com/trade/signup.html">Sign Up</a></li>
							<li><a href="https://demo.themeregion.com/trade/signin.html">Sign In</a></li>
							<li><a href="https://demo.themeregion.com/trade/faq.html">FAQ</a></li>
							<li><a href="https://demo.themeregion.com/trade/coming-soon.html">Coming Soon <span class="badge">New</span></a></li>
							<li><a href="https://demo.themeregion.com/trade/pricing.html">Pricing<span class="badge">New</span></a></li>
							<li><a href="https://demo.themeregion.com/trade/500-page.html">500 Opsss<span class="badge">New</span></a></li>
							<li><a href="https://demo.themeregion.com/trade/404-page.html">404 Error<span class="badge">New</span></a></li>
						</ul>
					</li>
				</ul>-->
			</div>
			<div class="nav-right">
				<div class="dropdown language-dropdown">
					<i class="fa fa-map-marker"></i>
					<a data-toggle="dropdown" href="#">
						<span style="font-size:14px;" class="change-text">
							Select Your Location
						</span>
						<i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu language-change">
						<li id="search_location_li"><input type="text" class="form-control" id="search_location"></li>

					</ul>
				</div>
			</div>

			<div class="nav-right">
				<ul class="sign-in">
					<li><i class="fa fa-user"></i></li>
					<li><a class="cd-signin" href="#0">Sign in</a></li>
				</ul>
				<!--<nav class="main-nav">
					<ul>
						inser more links here
						<li><a class="cd-signin" href="#0">Sign in</a></li>
						<li><a class="cd-signup" href="#0">Sign up</a></li>
					</ul>
				</nav>-->
				<a href="pre-post.php" class="btn">Post Work Ad</a>
			</div>
		</div>
	</nav>
</header>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">SIGN IN</a></li>
				<!--<li><a href="#0">Sign Up</a></li>-->
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset phonenumber">
						<label class="image-replace cd-email" for="signin-email">Phone Number</label>
						<input class="full-width has-padding has-border input_phone" id="signin-email" type="text" placeholder="Phone Number">
						<span class="cd-error-message">Please enter valid phone number!</span>
					</p>

					<p class="fieldset phonenumber">
						<input class="full-width generate_otp" type="submit" value="Get OTP">
					</p>

					<p class="fieldset otp">
						OTP:
						<input type="text" id="otp">
					</p>

					<p class="fieldset otp">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset otp">
						<label class="image-replace cd-password" for="signin-password">Confirm Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Confirm Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<!--<p class="fieldset otp">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>-->

					<p class="fieldset otp">
						<input class="full-width verify_otp" type="submit" value="Login">
					</p>
				</form>

				<!--<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>-->
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<!--<div id="cd-signup">
				<form class="cd-form">
					<span>
						<p class="fieldset inline">
							<label class="image-replace cd-username" for="signup-username">First Name</label>
							<input class="full-width has-padding has-border" id="signup-username" type="text" autocomplete="off" placeholder="First Name">
							<span class="cd-error-message">Error message here!</span>
						</p>

						<p class="fieldset inline">
							<label class="image-replace cd-username" for="signup-username">Last Name</label>
							<input class="full-width has-padding has-border" id="signup-username" type="text" autocomplete="off" placeholder="Last Name">
							<span class="cd-error-message">Error message here!</span>
						</p>
					</span>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" autocomplete="off" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text" autocomplete="off" placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>-->

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
