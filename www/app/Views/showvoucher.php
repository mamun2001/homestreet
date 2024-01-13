<?= $this->extend('layout/layout-u'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-8 mt-2">
					<h3 class="card-title">Show Vouchers</h3>
				</div>
				<div class="col-md-4">
					<a class="btn btn-block btn-success" href="<?= route_to('voucher/voucherList'); ?>"
						title="Go Back To List">Go Back To List</a>
				</div>
			</div>
		</div>

		<div class="card-body">
			<table class="table table-bordered col-md-5">
				<tr>
					<th width="150">Project</th>
					<td>
						<?= $data[0]->project_name ?>
					</td>
				</tr>
				<tr>
					<th>User</th>
					<td>
						<?= $data[0]->full_name ?>
					</td>
				</tr>
				<tr>
					<th>Amount</th>
					<td>
						<?= $data[0]->amount ?>
					</td>
				</tr>
				<tr>
					<th>Date</th>
					<td>
						<?= $data[0]->date_time ?>
					</td>
				</tr>
				<input type="hidden" name="projectid" id="projectid" value="<?= $data[0]->id ?>">
			</table>
			
			<table id="data_table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Voucher</th>
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
				"url": '<?php echo base_url('UploadVoucher/getAll') ?>',
				"type": "POST",
				"data": {
					"id": $('#projectid').val()
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
			formData.append("id", $('#projectid').val());
			formData.append("title", $('#title').val());
			$.ajax({
				url: '<?php echo base_url('projectfilesupload/doupload'); ?>',
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
					url: '<?php echo base_url('ProjectFiles/remove') ?>',
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