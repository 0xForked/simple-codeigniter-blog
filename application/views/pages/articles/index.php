<!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/head'); ?>
	</head>
	<body>
		<?php $this->load->view('partials/toolbar'); ?>
		<div class="container mb-5">
			<h3 >Article </h3>
			<p>List of all article</p>

			<div class="card">
				<div class="card-body">
					<a href="<?= base_url() ?>articles/add" class="btn btn-primary float-right mb-4"> Add new Article</a>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Posted By</th>
								<th scope="col">Category</th>
								<th scope="col">Created At</th>
								<th scope="col" width="200">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $index = 1; ?>
							<?php foreach ($articles as $article) : ?>
							<tr>
								<th scope="row"><?= $index ?></th>
								<td><?= $article->title ?></td>
								<td><?= $article->user_name ?></td>
								<td><?= $article->category_title ?></td>
								<td><?= date("d M Y - H:i", $article->created_at)?></td>
								<th scope="col">
									<a href="<?= base_url() ?>articles/<?= $article->id ?>/edit" class="btn btn-secondary">Edit</a>
									<a href="<?=base_url()?>articles/<?= $article->id ?>/delete" class="btn btn-danger">Delete</a>
								</th>
							</tr>
								<?php $index++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>
