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
							<h3 class="card-title">Allocation Report</h3>
						</div>
						<!-- <div class="col-md-4 text-right">
							<div class="btn-group right">
								<button type="button" class="btn btn-success" id="approvedbutton"
									title="Approved">Approved</button>
								<button type="button" class="btn btn-warning" id="pendingbutton"
									title="Pending">Pending</button>
								<button type="button" class="btn btn-info" id="allbutton" title="All">All</button>
							</div>
						</div> -->
					</div>
				</div>

				<div class="border">
					<form id="upload-form" class="form-inline ml-2 mt-2 mb-2">

						<div class="col-md-3">
							Start Date
							<input type="date" id="start_date" name="start_date" class="form-control" title="Start date"
								placeholder="yyyy-mm-dd" required>
						</div>

						<div class="col-md-3">
							End Date
							<input type="date" id="end_date" name="end_date" class="form-control" title="End date"
								placeholder="yyyy-mm-dd" required>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-success" id="upload_btn" type="button">Show Report</button>
						</div>
					</form>
				</div>

				<!-- /.card-header -->
				<div class="card-body">
					<table id="data_table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Project Name</th>
								<!-- <th>Requested Amount</th>
								<th>Submit Date Time</th> -->
								<th>Recieved Amount</th>
								<th>Recieved Date Time</th>
								<!-- <th>Status</th> -->
								<th>Description</th>
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

<!-- Edit modal content -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="text-center bg-info p-3">
				<h4 class="modal-title text-white" id="info-header-modalLabel">Approve Requisition</h4>
			</div>
			<div class="modal-body">
				<form id="edit-form" class="pl-3 pr-3">
					<div class="row">
						<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11"
							required>
						<input type="hidden" id="projectId" name="projectId" class="form-control"
							placeholder="Project id" maxlength="11" number="true" required>
						<input type="hidden" id="userId" name="userId" class="form-control" placeholder="User id"
							maxlength="11" number="true" required>
					</div>
					<div class="row">
						<!-- <div class="col-md-4">
							<div class="form-group">
								<label for="projectId"> Project id: <span class="text-danger">*</span> </label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="userId"> User id: <span class="text-danger">*</span> </label>
							</div>
						</div> -->
						<div class="col-md-4">
							<div class="form-group">
								<label for="requestedAmount"> Requested amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="requestedAmount" name="requestedAmount" class="form-control"
									placeholder="Requested amount" maxlength="11" number="true" required readonly>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="submitDateTime"> Submit Date Time: <span class="text-danger">*</span>
								</label>
								<input type="text" id="submitDateTime" name="submitDateTime" class="form-control"
									required readonly>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="status"> Status: <span class="text-danger">*</span> </label>
								<input type="text" id="status" name="status" class="form-control" placeholder="Status"
									maxlength="150" required readonly>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="comment"> Description: <span class="text-danger">*</span> </label>
								<textarea id="comment" name="comment" class="form-control" placeholder="Description"
									rows="3" readonly></textarea>
								<!-- <input type="text" id="comment" name="comment" class="form-control"
									placeholder="Description" maxlength="500" readonly> -->
							</div>
						</div>
						<!-- <div class="col-md-4">
							<div class="form-group">
								<label for="recievedBy"> Recieved by: <span class="text-danger">*</span> </label>
								<input type="number" id="recievedBy" name="recievedBy" class="form-control"
									placeholder="Recieved by" maxlength="11" number="true" required>
							</div>
						</div> -->

						<!-- <div class="col-md-4">
							<div class="form-group">
								<label for="recieveDateTime"> Recieve date time: <span class="text-danger">*</span>
								</label>
								<input type="date" id="recieveDateTime" name="recieveDateTime" class="form-control"
									dateISO="true" required>
							</div>
						</div> -->

						<div class="col-md-4">
							<div class="form-group">
								<label for="recievedAmount"> Approved Amount: <span class="text-danger">*</span>
								</label>
								<input type="number" id="recievedAmount" name="recievedAmount" class="form-control"
									placeholder="Recieved amount" maxlength="11" number="true" required>
							</div>
						</div>

					</div>

					<div class="row">
					</div>

					<div class="form-group text-center">
						<div class="btn-group">
							<button type="submit" class="btn btn-success" id="edit-form-btn">Submit</button>
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
		// $('#data_table').DataTable({
		// 	"paging": false,
		// 	"lengthChange": false,
		// 	"searching": true,
		// 	"ordering": false,
		// 	"info": true,
		// 	"autoWidth": false,
		// 	"responsive": true,
		// 	"ajax": {
		// 		"url": '<?php echo base_url('requisition/getAllAdmin') ?>',
		// 		"type": "POST",
		// 		"dataType": "json",
		// 		async: "true"
		// 	},
		// 	"createdRow": function (row, data, dataIndex) {
		// 		if (data[6] == 'Pending') {
		// 			$(row).css("background-color", "LightCoral");
		// 		} else if (data[6] == 'Approved') {
		// 			$(row).css("background-color", "LightGreen");
		// 		}
		// 	}
		// });
	});

	$(function () {
		datatable = $("#data_table").DataTable({
			"paging": false,
			"lengthChange": false,
			"searching": false,
			"ordering": false,
			"info": false,
			"autoWidth": false,
			"responsive": true,
			"createdRow": function (row, data, dataIndex) {
				if (data[0] == 'Total') {
					$(row).css("font-weight", "bold");
					$(row).addClass('bg-info');
				}
			}
		});

		$('#upload_btn').on('click', function () {
			var formData = new FormData();
			formData.append("startDate", $('#start_date').val());
			formData.append("endDate", $('#end_date').val());
			$.ajax({
				url: '<?php echo base_url('reports/allocation'); ?>',
				dataType: 'json',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				type: 'post',
				success: function (response) {
					datatable.clear().rows.add(response['data']).draw();
				},
				error: function (response) {
					$('#message').html(response);
				},
			});
		});
	});

	$(function () {
		datatable = $("#data_table").DataTable();
		$('#approvedbutton').on('click', function () {
			$.ajax({
				url: '<?php echo base_url('requisition/getallapproved'); ?>',
				dataType: 'json',
				type: 'post',
				success: function (response) {
					datatable.clear().rows.add(response['data']).draw();
				},
				error: function (response) {
					$('#message').html(response);
				}
			});
		});
	});

	$(function () {
		datatable = $("#data_table").DataTable();
		$('#pendingbutton').on('click', function () {
			$.ajax({
				url: '<?php echo base_url('requisition/getAllPending'); ?>',
				dataType: 'json',
				type: 'post',
				success: function (response) {
					datatable.clear().rows.add(response['data']).draw();
				},
				error: function (response) {
					$('#message').html(response);
				}
			});
		});
	});

	$(function () {
		$('#allbutton').on('click', function () {
			$('#data_table').DataTable().ajax.reload(null, false).draw(false);
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
				// $("#edit-form #recieveDateTime").val(response.recieve_date_time);
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