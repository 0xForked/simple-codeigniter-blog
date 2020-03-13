<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">CRUD-EX</a>
	<button
		class="navbar-toggler"
		type="button"
		data-toggle="collapse"
		data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent"
		aria-expanded="false"
		aria-label="Toggle navigation"
	>
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() ?>">Home</a>
			</li>
			<?php if (logged_in_session()->loggin_status != NULL || logged_in_session()->login_status == TRUE) : ?>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() ?>articles">Article</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() ?>categories">Category</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Logged in as <?= logged_in_session()->name ?></a>
			</li>
			<?php endif; ?>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<?php if (logged_in_session()->login_status == NULL || logged_in_session()->login_status != TRUE) : ?>
		<a href="<?= base_url() ?>login" class="btn btn-primary ml-3">Log In</a>
		<?php endif; ?>
		<?php if (logged_in_session()->login_status == TRUE) : ?>
		<a href="<?= base_url() ?>logout" class="btn btn-primary ml-3">Logout</a>
		<?php endif; ?>
	</div>
</nav>
