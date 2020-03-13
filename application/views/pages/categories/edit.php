<div
	class="modal fade"
	tabindex="-1"
	role="dialog"
	id="modalEditCategory"
	aria-hidden="true"
>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Update Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url() ?>categories/update" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="categoryId"/>
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" name="title" class="form-control" id="categoryTitle" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Description</label>
						<input type="text" name="description" class="form-control" id="categoryDescription">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
