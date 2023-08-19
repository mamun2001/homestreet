<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-8 mt-2">
							<h3 class="card-title">Deed</h3>
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-block btn-success" onclick="add()" title="Add"> <i class="fa fa-plus"></i> Add</button>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="data_table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Subcontractor id</th>
								<th>Project id</th>
								<th>Title</th>
								<th>File path</th>
								<th>File type</th>

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
				<form id="add-form" class="pl-3 pr-3" method="post" action="<?=base_url($controller.'/add')?>" enctype="multipart/form-data">					
					<div class="row">
						<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="subcontractorId"> Subcontractor id: <span class="text-danger">*</span> </label>
								<input type="number" id="subcontractorId" name="subcontractorId" class="form-control" placeholder="Subcontractor id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="projectId"> Project id: <span class="text-danger">*</span> </label>
								<input type="number" id="projectId" name="projectId" class="form-control" placeholder="Project id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="title"> Title: </label>
								<input type="text" id="title" name="title" class="form-control" placeholder="Title" maxlength="100">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="filePath">Attach File: <span class="text-danger">*</span> </label>
								<input type="file" name="filePath" id="filePath" />	
							</div>
						</div>						
					</div>

					<div class="form-group text-center">
						<div class="btn-group">
							<button type="submit" class="btn btn-success" id="add-form-btn">Add</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div> <!-- /.modal -->	

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
						<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="subcontractorId"> Subcontractor id: <span class="text-danger">*</span> </label>
								<input type="number" id="subcontractorId" name="subcontractorId" class="form-control" placeholder="Subcontractor id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="projectId"> Project id: <span class="text-danger">*</span> </label>
								<input type="number" id="projectId" name="projectId" class="form-control" placeholder="Project id" maxlength="11" number="true" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="title"> Title: </label>
								<input type="text" id="title" name="title" class="form-control" placeholder="Title" maxlength="100">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="filePath"> File path: <span class="text-danger">*</span> </label>
								<input type="text" id="filePath" name="filePath" class="form-control" placeholder="File path" maxlength="250" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="fileType"> File type: </label>
								<input type="text" id="fileType" name="fileType" class="form-control" placeholder="File type" maxlength="50">
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
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div> <!-- /.modal -->			
<!-- /.content -->

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
			"url": '<?php echo base_url($controller.'/getAll') ?>',			
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
			
			var form = $('#add-form');
			// remove the text-danger
			$(".text-danger").remove();

			$.ajax({
				url: '<?php echo base_url($controller.'/add') ?>',	
				
				method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'json',
				
				type: 'post',								
//				data: form.serialize(),
//				dataType: 'json',
				
				beforeSend: function() {
					$('#add-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
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
							$('#add-modal').modal('hide');
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
			$("#edit-form #subcontractorId").val(response.subcontractor_id);
			$("#edit-form #projectId").val(response.project_id);
			$("#edit-form #title").val(response.title);
			$("#edit-form #filePath").val(response.file_path);
			$("#edit-form #fileType").val(response.file_type);

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
			url: '<?php echo base_url($controller.'/remove') ?>',
			type: 'post',
			data: {
				id: id
			},
			dataType: 'json',
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