<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-8 mt-2">
					<h3 class="card-title">Project Files</h3>
				</div>
				<div class="col-md-4">
					<a class="btn btn-block btn-success" href="<?= route_to('subcontractor'); ?>"
						title="Go Back To List">Go Back To List</a>
				</div>
			</div>
		</div>

		<div class="card-body">
			<table class="table table-bordered col-md-5">
				<tr>
					<th width="150">Project</th>
					<td>
						<?= $data->project_name ?>
					</td>
				</tr>
				<tr>
					<th>Location</th>
					<td>
						<?= $data->district ?>
					</td>
				</tr>
			</table>

			<div class="container border mt-3 mb-3">
				<form id="upload-form" class="row mt-3">
					<input type="hidden" name="projectid" id="projectid" value="<?= $data->id ?>">

					<div class="col-md-4">
						<input type="text" id="title" name="title" class="form-control" placeholder="Title"
							maxlength="250" required>
					</div>

					<div class="col-md-4">
						<input type="file" id="files" name="files[]" class="form-control" multiple="multiple">
					</div>

					<div class="form-group text-center mb-3">
						<button class="btn btn-success" id="upload_btn" type="button">Upload</button>
					</div>
				</form>
			</div>

			<table id="data_table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Title</th>
						<th>File Path</th>
						<th>File Type</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
		$('#data_table').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"ajax": {
				"url": '<?php echo base_url('Subcontractorfiles/getAll') ?>',
				"type": "POST",
				"data": {
					"id": $('#subcontractorid').val()
				},
				"dataType": "json",
				async: "true"
			}
		});
	});

	$(document).ready(function (e) {
		$('#upload_btn').on('click', function () {
			var formData = new FormData();
			var totalFilesLen = document.getElementById('files').files.length;
			for (var i = 0; i < totalFilesLen; i++) {
				formData.append("files[]", document.getElementById('files').files[i]);
			}
			formData.append("id", $('#subcontractorid').val());
			formData.append("title", $('#title').val());
			$.ajax({
				url: '<?php echo base_url('upload/doupload'); ?>',
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				type: 'post',
				success: function (response) {
					$("#upload-form")[0].reset();
					Swal.fire({
						position: 'bottom-end',
						icon: 'success',
						title: response,
						showConfirmButton: false,
						timer: 1500
					}).then(function () {
						$('#data_table').DataTable().ajax.reload(null, false).draw(false);
					})
				},
				error: function (response) {
					$('#message').html(response);
				}
			});
		});
	});

	function remove(id) {
		Swal.fire({
			title: 'Are you sure of the deleting process?',
			text: "You cannot back after confirmation",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Confirm',
			cancelButtonText: 'Cancel'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: '<?php echo base_url('Subcontractorfiles/remove') ?>',
					type: 'post',
					data: {
						id: id
					},
					dataType: 'json',
					success: function (response) {
						if (response.success === true) {
							Swal.fire({
								position: 'bottom-end',
								icon: 'success',
								title: response.messages,
								showConfirmButton: false,
								timer: 1500
							}).then(function () {
								$('#data_table').DataTable().ajax.reload(null, false).draw(false);
							})
						} else {
							Swal.fire({
								position: 'bottom-end',
								icon: 'error',
								title: response.messages,
								showConfirmButton: false,
								timer: 1500
							})
						}
					}
				});
			}
		})
	}
</script>

<?= $this->endSection(); ?>