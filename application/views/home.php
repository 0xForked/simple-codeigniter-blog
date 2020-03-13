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
			<div class="row mt-5	">
				<?php foreach ($articles as $article) : ?>
					<div class="col-12 col-md-3 m-3">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title"><?= $article->title ?></h5>
								<p class="card-text">posted by <?= $article->user_name ?></p>
								<p class="card-subtitle mb-2 text-muted">on cagetory <?= $article->category_title ?></p>
								<p class="card-subtitle mb-2 text-muted">posted at <?= date("Y/m/d H:i:s", $article->created_at)  ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>
