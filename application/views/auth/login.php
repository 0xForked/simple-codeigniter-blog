<!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/head'); ?>
	</head>
	<body>
		<?php $this->load->view('partials/toolbar'); ?>
		<div class="container ">
			<div class="row justify-content-center">
				<div class="card w-50">
					<div class="card-body">
						<h5 class="card-title mb-3">Login</h5>
						<form action="<?= base_url() ?>login" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1">
							</div>
							<div class="form-group form-check mb-5">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							Doesn't have an account? <a href="<?= base_url() ?>register"> Register</a>
							<button type="submit" class="btn btn-primary float-right">Submit</button>
						</form>
					</div>
				</div>
			</div>

		</div>

		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>
