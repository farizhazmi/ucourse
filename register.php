<?php 
	include_once 'header.php'
?>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="register-box">
						<h1 class="auth-title">Sign up your account now</h1>
						<form>
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="fullname" class="form-control" />
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" name="dateofbirth" class="form-control datepicker" />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" />
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-register-block" name="action" value="register" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
	include_once 'footer.php'
?>