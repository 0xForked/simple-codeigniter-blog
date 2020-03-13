<!doctype html>
<html lang="en">
	<head>
		<?php $this->load->view('partials/head'); ?>
	</head>
	<body>
		<?php $this->load->view('partials/toolbar'); ?>

		<div class="container p-5">
			<div class="head text-center">
				<h4><?= $article->title ?></h4>
				<p class="card-subtitle mb-2 text-muted">Posted by <?= $article->user_name ?> at <?= date("d M Y H:i:s", $article->created_at)  ?></p>
				<p class="card-subtitle mb-2 text-muted">On cagetory <?= $article->category_title ?></p>
			</div>
			<article class="mt-5 mb-5">
				<?= $article->content ?>
			</article>
		</div>

		<?php $this->load->view('partials/footer'); ?>
		<?php $this->load->view('partials/script'); ?>
	</body>
</html>

