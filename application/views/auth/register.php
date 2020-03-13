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
						<h5 class="card-title mb-4">Register</h5>
						<?php echo validation_errors(); ?>
						<form action="<?= base_url() ?>register" method="POST">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" name="name" id="inputName">
								<small id="nameHelp" class="form-text text-muted">
									Input your full name.
								</small>
								<?php echo form_error('name'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								<?php echo form_error('email'); ?>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1">
								<?php echo form_error('password'); ?>
							</div>
							<div class="form-group mb-5">
								<label for="exampleInputPassword1">Confirm Password</label>
								<input type="password"  name="confirm_password" class="form-control" id="exampleInputPassword1">
								<?php echo form_error('confirm_password'); ?>
							</div>
							Already have an account? <a href="<?= base_url() ?>login"> Login</a>
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
