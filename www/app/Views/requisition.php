<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-8 mt-2">
							<h3 class="card-title">Requisition</h3>
						</div>
						<!-- <div class="col-md-4">
				  <button type="button" class="btn btn-block btn-success" onclick="add()" title="Add"> <i class="fa fa-plus"></i> Add</button>
				</div> -->
					</div>
				</div>

				<div class="border ml-3 mt-3 mb-3 float-left">
					<form id="upload-form" class="row mt-3">
						<!-- <input type="hidden" name="subcontractorid" id="subcontractorid" value=""> -->

						<div class="col-md-4 ml-3">
							<input type="number" id="req_amount" name="req_amount" class="form-control"
								placeholder="Requisition Amount" maxlength="11" required>
						</div>

						<!-- <div class="col-md-4">
						<input type="file" id="files" name="files[]" class="form-control" multiple="multiple">
			
					</div> -->

						<div class="form-group text-center mb-3">
							<button class="btn btn-success" id="upload_btn" type="button">Submit</button>
						</div>
					</form>
				</div>

				<!-- /.card-header -->
				<div class="card-body">
					<table id="data_table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Project id</th>
								<th>Requested amount</th>
								<th>Submit date time</th>
								<th>Recieved amount</th>
								<th>Recieve date time</th>
								<th>Status</th>
								<th>Comment</th>

								<th></th>
							</tr>
						</thead>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- Add modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="text-center bg-info p-3">
				<h4 class="modal-title text-white" id="info-header-modalLabel">Add</h4>
			</div>
			<div class="modal-body">
				<form id="add-form" class="pl-3 pr-3">
					<div class="row">
						<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11"
							required>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="projectId"> Project id: <span class="text-danger">*</span> </label>
								<input type="number" id="projectId" name="projectId" class="form-control"
									placeholder="Project id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="userId"> User id: <span class="text-danger">*</span> </label>
								<input type="number" id="userId" name="userId" class="form-control"
									placeholder="User id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="requestedAmount"> Requested amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="requestedAmount" name="requestedAmount" class="form-control"
									placeholder="Requested amount" maxlength="11" number="true" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="submitDateTime"> Submit date time: <span class="text-danger">*</span>
								</label>
								<input type="date" id="submitDateTime" name="submitDateTime" class="form-control"
									dateISO="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="recievedAmount"> Recieved amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="recievedAmount" name="recievedAmount" class="form-control"
									placeholder="Recieved amount" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="recieveDateTime"> Recieve date time: <span class="text-danger">*</span>
								</label>
								<input type="date" id="recieveDateTime" name="recieveDateTime" class="form-control"
									dateISO="true" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="recievedBy"> Recieved by: <span class="text-danger">*</span> </label>
								<input type="number" id="recievedBy" name="recievedBy" class="form-control"
									placeholder="Recieved by" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="status"> Status: <span class="text-danger">*</span> </label>
								<input type="text" id="status" name="status" class="form-control" placeholder="Status"
									maxlength="150" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="comment"> Comment: <span class="text-danger">*</span> </label>
								<input type="text" id="comment" name="comment" class="form-control"
									placeholder="Comment" maxlength="500" required>
							</div>
						</div>
					</div>
					<div class="row">
					</div>

					<div class="form-group text-center">
						<div class="btn-group">
							<button type="submit" class="btn btn-success" id="add-form-btn">Add</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Add modal content -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="text-center bg-info p-3">
				<h4 class="modal-title text-white" id="info-header-modalLabel">Update</h4>
			</div>
			<div class="modal-body">
				<form id="edit-form" class="pl-3 pr-3">
					<div class="row">
						<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11"
							required>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="projectId"> Project id: <span class="text-danger">*</span> </label>
								<input type="number" id="projectId" name="projectId" class="form-control"
									placeholder="Project id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="userId"> User id: <span class="text-danger">*</span> </label>
								<input type="number" id="userId" name="userId" class="form-control"
									placeholder="User id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="requestedAmount"> Requested amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="requestedAmount" name="requestedAmount" class="form-control"
									placeholder="Requested amount" maxlength="11" number="true" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="submitDateTime"> Submit date time: <span class="text-danger">*</span>
								</label>
								<input type="date" id="submitDateTime" name="submitDateTime" class="form-control"
									dateISO="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="recievedAmount"> Recieved amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="recievedAmount" name="recievedAmount" class="form-control"
									placeholder="Recieved amount" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="recieveDateTime"> Recieve date time: <span class="text-danger">*</span>
								</label>
								<input type="date" id="recieveDateTime" name="recieveDateTime" class="form-control"
									dateISO="true" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="recievedBy"> Recieved by: <span class="text-danger">*</span> </label>
								<input type="number" id="recievedBy" name="recievedBy" class="form-control"
									placeholder="Recieved by" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="status"> Status: <span class="text-danger">*</span> </label>
								<input type="text" id="status" name="status" class="form-control" placeholder="Status"
									maxlength="150" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="comment"> Comment: <span class="text-danger">*</span> </label>
								<input type="text" id="comment" name="comment" class="form-control"
									placeholder="Comment" maxlength="500" required>
							</div>
						</div>
					</div>
					<div class="row">
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
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- page script -->
<script>
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
				"url": '<?php echo base_url($controller . '/getAll') ?>',
				"type": "POST",
				"dataType": "json",
				async: "true"
			}
		});
	});
	function add() {
		// reset the form 
		$("#add-form")[0].reset();
		$(".form-control").removeClass('is-invalid').removeClass('is-valid');
		$('#add-modal').modal('show');
		// submit the add from 
		$.validator.setDefaults({
			highlight: function (element) {
				$(element).addClass('is-invalid').removeClass('is-valid');
			},
			unhighlight: function (element) {
				$(element).removeClass('is-invalid').addClass('is-valid');
			},
			errorElement: 'div ',
			errorClass: 'invalid-feedback',
			errorPlacement: function (error, element) {
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

			submitHandler: function (form) {

				var form = $('#add-form');
				// remove the text-danger
				$(".text-danger").remove();

				$.ajax({
					url: '<?php echo base_url($controller . '/add') ?>',
					type: 'post',
					data: form.serialize(), // /converting the form data into array and sending it to server
					dataType: 'json',
					beforeSend: function () {
						$('#add-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
					},
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
								$('#add-modal').modal('hide');
							})

						} else {

							if (response.messages instanceof Object) {
								$.each(response.messages, function (index, value) {
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
						$('#add-form-btn').html('Add');
					}
				});

				return false;
			}
		});
		$('#add-form').validate();
	}

	function edit(id) {
		$.ajax({
			url: '<?php echo base_url($controller . '/getOne') ?>',
			type: 'post',
			data: {
				id: id
			},
			dataType: 'json',
			success: function (response) {
				// reset the form 
				$("#edit-form")[0].reset();
				$(".form-control").removeClass('is-invalid').removeClass('is-valid');
				$('#edit-modal').modal('show');

				$("#edit-form #id").val(response.id);
				$("#edit-form #projectId").val(response.project_id);
				$("#edit-form #userId").val(response.user_id);
				$("#edit-form #requestedAmount").val(response.requested_amount);
				$("#edit-form #submitDateTime").val(response.submit_date_time);
				$("#edit-form #recievedAmount").val(response.recieved_amount);
				$("#edit-form #recieveDateTime").val(response.recieve_date_time);
				$("#edit-form #recievedBy").val(response.recieved_by);
				$("#edit-form #status").val(response.status);
				$("#edit-form #comment").val(response.comment);

				// submit the edit from 
				$.validator.setDefaults({
					highlight: function (element) {
						$(element).addClass('is-invalid').removeClass('is-valid');
					},
					unhighlight: function (element) {
						$(element).removeClass('is-invalid').addClass('is-valid');
					},
					errorElement: 'div ',
					errorClass: 'invalid-feedback',
					errorPlacement: function (error, element) {
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

					submitHandler: function (form) {
						var form = $('#edit-form');
						$(".text-danger").remove();
						$.ajax({
							url: '<?php echo base_url($controller . '/edit') ?>',
							type: 'post',
							data: form.serialize(),
							dataType: 'json',
							beforeSend: function () {
								$('#edit-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
							},
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
										$('#edit-modal').modal('hide');
									})

								} else {

									if (response.messages instanceof Object) {
										$.each(response.messages, function (index, value) {
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
					url: '<?php echo base_url($controller . '/remove') ?>',
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