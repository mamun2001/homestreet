<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-8 mt-2">
					<h3 class="card-title">Voucher List</h3>
				</div>
			</div>
		</div>

		<div class="card-body">			
			<table id="data_table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Project</th>
						<th>User Name</th>
						<th>Amount</th>
						<th>Date</th>
						<th>Comment</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(function () {
		$('#data_table').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"ajax": {
				"url": '<?php echo base_url('UploadVoucher/getAllforAdmin') ?>',
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
			formData.append("amount", $('#amount').val());
			$.ajax({
				url: '<?php echo base_url('UploadVoucher/doupload'); ?>',
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				type: 'post',
				success: function (response) {
					$("#upload-form")[0].reset();
					alert(response.messages);
					Swal.fire({
						position: 'bottom-end',
						icon: 'success',
						title: response.messages,
						showConfirmButton: false,
						timer: 1500
					}).then(function () {
						$('#data_table').DataTable().ajax.reload(null, false).draw(false);
					})
				},
				error: function (response) {
					Swal.fire({
						position: 'bottom-end',
						icon: 'error',
						title: response.messages,
						showConfirmButton: false,
						timer: 1500
					});
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