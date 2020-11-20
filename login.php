<?php 
	include_once 'header.php'
?>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="login-box">
						<h1 class="auth-title">Masuk kedalam akun kamu</h1>
						<form>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" />
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-login-block" name="action" value="login" />
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