<?php 
include_once 'base/header.php';
include_once 'base/navbar.php';
?>
<section id="main" class="clearfix user-page">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<div class="user-account">
					<h2>Create a Trade Account</h2>
					<form action="https://demo.themeregion.com/trade/signup.html#">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email Id">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Mobile Number">
						</div>
						<select class="form-control">
							<option value="#">Select City</option>
							<option value="#">London UK</option>
							<option value="#">Newyork, USA</option>
							<option value="#">Seoul, Korea</option>
							<option value="#">Beijing, China</option>
						</select>
						<div class="checkbox">
							<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
						</div>
						<button type="submit" class="btn">Registration</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
include_once 'base/footer.php';
?>