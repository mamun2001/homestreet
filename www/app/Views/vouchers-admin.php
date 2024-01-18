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

<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="text-center bg-info p-3">
					<h4 class="modal-title text-white" id="info-header-modalLabel">Update</h4>
				</div>
				<div class="modal-body">
					<form id="edit-form" class="pl-3 pr-3">
                        <div class="row">
 							<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
												
							<div class="col-md-12">
								<div class="form-group">
									<label for="comment"> Comment: <span class="text-danger">*</span> </label>
									<textarea id="comment" name="comment" class="form-control" placeholder="Comment" maxlength="500">
									</textarea>
									<!-- <input type="text" id="comment" name="comment" class="form-control" placeholder="Comment" maxlength="500" required> -->
								</div>
							</div>
						</div>
											
						<div class="form-group text-center">
							<div class="btn-group">
								<button type="submit" class="btn btn-success" id="edit-form-btn">Update</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</form>

				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->		

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

	function edit(id) {
	$.ajax({
		url: '<?php echo base_url($controller.'/getOne') ?>',
		type: 'post',
		data: {
			id: id
		},
		dataType: 'json',
		success: function(response) {
			// reset the form 
			$("#edit-form")[0].reset();
			$(".form-control").removeClass('is-invalid').removeClass('is-valid');				
			$('#edit-modal').modal('show');	

			$("#edit-form #id").val(response.id);
			// $("#edit-form #projectId").val(response.project_id);
			// $("#edit-form #userId").val(response.user_id);
			// $("#edit-form #amount").val(response.amount);
			// $("#edit-form #dateTime").val(response.date_time);
			$("#edit-form #comment").val(response.comment);

			// submit the edit from 
			$.validator.setDefaults({
				highlight: function(element) {
					$(element).addClass('is-invalid').removeClass('is-valid');
				},
				unhighlight: function(element) {
					$(element).removeClass('is-invalid').addClass('is-valid');
				},
				errorElement: 'div ',
				errorClass: 'invalid-feedback',
				errorPlacement: function(error, element) {
					if (element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else if ($(element).is('.select')) {
						element.next().after(error);
					} else if (element.hasClass('select2')) {
						//error.insertAfter(element);
						error.insertAfter(element.next());
					} else if (element.hasClass('selectpicker')) {
						error.insertAfter(element.next());
					} else {
						error.insertAfter(element);
					}
				},

				submitHandler: function(form) {
					var form = $('#edit-form');
					$(".text-danger").remove();
					$.ajax({
						url: '<?php echo base_url($controller.'/edit') ?>' ,						
						type: 'post',
						data: form.serialize(), 
						dataType: 'json',
						beforeSend: function() {
							$('#edit-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
						},								
						success: function(response) {

							if (response.success === true) {

								Swal.fire({
									position: 'bottom-end',
									icon: 'success',
									title: response.messages,
									showConfirmButton: false,
									timer: 1500
								}).then(function() {
									$('#data_table').DataTable().ajax.reload(null, false).draw(false);
									$('#edit-modal').modal('hide');
								})
								
							} else {

								if (response.messages instanceof Object) {
									$.each(response.messages, function(index, value) {
										var id = $("#" + index);

										id.closest('.form-control')
											.removeClass('is-invalid')
											.removeClass('is-valid')
											.addClass(value.length > 0 ? 'is-invalid' : 'is-valid');

										id.after(value);

									});
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
							$('#edit-form-btn').html('Update');
						}
					});
					return false;
				}
			});
			$('#edit-form').validate();
		}
	});
}	

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