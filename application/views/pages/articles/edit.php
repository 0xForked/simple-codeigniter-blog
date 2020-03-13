<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body>
<?php $this->load->view('partials/toolbar'); ?>
<div class="container mb-5">
	<h3>Add New Article </h3>
	<p>On This Page you can add new Article</p>
	<form action="">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Title</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">Article title that will displayed.</small>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Category</label>
					<select class="form-control">
						<option>Large select</option>
					</select>
					<small id="emailHelp" class="form-text text-muted">Article category for easy gruping.</small>
				</div>
			</div>
			<div class="col-12">
				<textarea name="editor1"></textarea>
			</div>
		</div>
		<button class="btn btn-primary float-right mt-4">Save Article</button>
	</form>
</div>
<?php $this->load->view('partials/footer'); ?>
<?php $this->load->view('partials/script'); ?>
</body>
</html>
