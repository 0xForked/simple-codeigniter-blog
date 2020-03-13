<!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/head'); ?>
	</head>
	<body>
		<?php $this->load->view('partials/toolbar'); ?>
		<div class="container mb-5">
			<h3>Categories </h3>
			<p>List of all categories</p>
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="mb-4"> Add new Category</h5>
							<form action="<?= base_url() ?>categories" method="POST">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Description</label>
									<input type="text" name="description" class="form-control" id="exampleInputPassword1">
								</div>
								<button type="submit" class="btn btn-primary float-right">Submit</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="card" >
						<div class="card-body">
							<h5 class="mb-4">Category List</h5>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Name</th>
										<th scope="col">Description</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $index = 1 ?>
									<?php foreach ($categories as $category) : ?>
										<tr>
											<th scope="row"><?= $index ?></th>
											<td><?= $category->title ?></td>
											<td><?= $category->description ?></td>
											<td>
												<button
													type="button"
													class="btn btn-secondary"
													data-toggle="modal"
													data-target="#modalEditCategory"
													onclick="showCategory(<?= $category->id ?>)"
												>Edit</button>
												<a href="<?=base_url()?>categories/<?= $category->id ?>/delete" class="btn btn-danger">Delete</a>
											</td>
										</tr>
										<?php $index++ ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('pages/categories/edit'); ?>
		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
		<script>
			function showCategory(id) {
				let base_url = '<?php base_url() ?>categories/' +  id + '/show'
				$.get(base_url).done(function(response) {
					$('#categoryId').val(response.id)
					$('#categoryTitle').val(response.title)
					$('#categoryDescription').val(response.description)
				});
			}
		</script>
	</body>
</html>
