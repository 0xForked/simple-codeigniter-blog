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

			<div class="mt-4 mb-4">
				<?php foreach ($categories as $category) : ?>
					<a href="<?= base_url() ?>?category=<?= $category->title ?>" style="text-decoration: none">
						<span class="badge badge-pill badge-primary p-3"><?= $category->title ?></span>
					</a>
				<?php endforeach; ?>
			</div>

			<div class="row">
				<?php if ($articles != NULL ) : ?>
					<?php foreach ($articles as $article) : ?>
						<div class="col-12 col-md-4 d-flex align-items-stretch">
							<div class="card w-100">
								<a href="<?= base_url() ?><?= $article->slug ?>" style="text-decoration: none">
									<div class="card-body">
										<h5 class="card-title"><?= $article->title ?></h5>
										<p class="card-text">posted by <?= $article->user_name ?></p>
										<p class="card-subtitle mb-2 text-muted">on cagetory <?= $article->category_title ?></p>
										<p class="card-subtitle mb-2 text-muted">posted at <?= date("d M Y H:i:s", $article->created_at)  ?></p>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<div class="col-12 mt-5">
						<h5 class="text-center">Artikel Tidak Ditemukan</h5>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>
