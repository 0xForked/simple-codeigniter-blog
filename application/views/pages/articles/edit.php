<!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/head'); ?>
	</head>
	<body>
		<?php $this->load->view('partials/toolbar'); ?>
		<div class="container mb-5">
			<h3>Edit Article </h3>
			<p>On This Page you can edit Specified Article</p>
			<form action="<?= base_url() ?>articles/update" method="post">
				<input type="hidden" name="id" value="<?= $article->id ?>"/>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="text" name="title" class="form-control" value="<?= $article->title ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">Article title that will displayed.</small>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Category</label>
							<select class="form-control" name="category_id">
								<?php foreach ($categories as $category) : ?>
									<option
										value="<?= $category->id ?>"
										<?= ($category->id === $article->category_id) ? 'selected' : '' ?>
									><?= $category->title ?></option>
								<?php endforeach; ?>
							</select>
							<small id="emailHelp" class="form-text text-muted">Article category for easy gruping.</small>
						</div>
					</div>
					<div class="col-12">
						<textarea name="editor1"><?= $article->content ?></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary float-right mt-4">Save Article</button>
			</form>
		</div>
		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>
