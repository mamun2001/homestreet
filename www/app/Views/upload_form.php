<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-8 mt-2">
					<h3 class="card-title">Subcontractor Files</h3>
				</div>
			</div>
		</div>
		<!--    <div><p id="message"></p></div>-->
		<div class="card-body">
			<?php if (session()->getFlashdata('success')) : ?>
			<div class="alert alert-success">
				<b>
					<?php echo session()->getFlashdata('success') ?>
				</b>
			</div>
			<?php endif ?>
			<?php if (session()->getFlashdata('error')) : ?>
			<div class="alert alert-danger">
				<b>
					<?php echo session()->getFlashdata('error') ?>
				</b>
			</div>
			<?php endif ?>

			<?php 
				print_r($files); 				
			?>

			<table class="table table-bordered">
				<tr>
					<th width="150">Name</th>
					<td>
						<?= $data->name ?>
					</td>
				</tr>
				<tr>
					<th>Mobile</th>
					<td>
						<?= $data->mobile ?>
					</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>
						<?= $data->address ?>
					</td>
				</tr>
			</table>

			<form class="row mt-3">
				<input type="hidden" name="subcontractorid" id="subcontractorid" value="<?= $data->id ?>" >
				<div class="row">
					<input type="text" name="title" id="title" class="form-control" >
				</div>
				<div class="col-auto">
					<input type="file" id="files" name="files[]" class="form-control" multiple="multiple">
				</div>
				<div class="col-auto">
					<button class="btn btn-primary mb-3" id="upload_btn" type="button">Upload</button>
				</div>
			</form>

			<table class="table table-bordered mt-3">
				<thead>
					<tr>
						<th>Title</th>
						<th>Filepath</th>
						<th>File Type</th>
					</tr>
				</thead>
				<tbody>
					<?php //foreach ($fileUploads as $fileUpload):?>
					<tr>
						<td>
							<?//= $fileUpload->filename ?>
						</td>
						<td>
							<?//= $fileUpload->filepath ?>
						</td>
						<td>
							<?//= $fileUpload->type ?>
						</td>
					</tr>
					<?php //endforeach;?>
				</tbody>

			</table>
		</div>
	</div>

</div>


<!-- <main style="width:500px;margin:0 auto;">
<form class="form-signin">

	<div id="message"></div>
	<div class="text-center mb-4">

		<h1 class="h3 mb-3 font-weight-normal">Upload Multiple Files</h1>
		<p>This form capable of upload multiple images at once.</p>
	</div>

	<div class="form-label-group">
		<input type="file" id="files" name="files[]" multiple="multiple">
		<label for="inputEmail">Files</label>
	</div>


	<button class="btn btn-lg btn-primary btn-block" id="upload_btn" type="button">Upload</button>
	<p class="mt-5 mb-3 text-muted text-center">© 2017-2020</p>
</form>
</main> -->


<script type="text/javascript">
	$( document ).ready( function ( e ) {
		$( '#upload_btn' ).on( 'click', function () {
			var formData = new FormData();
			var totalFilesLen = document.getElementById( 'files' ).files.length;
			for ( var i = 0; i < totalFilesLen; i++ ) {
				formData.append( "files[]", document.getElementById( 'files' ).files[ i ] );
			}
			formData.append( "id", $('#subcontractorid').val());
			formData.append( "title", $('#title').val());
			$.ajax( {
				url: '<?php echo base_url('upload/doupload'); ?>',
				dataType: 'text',
				cache: false,
				contentType: false,
				processData: false,
				data: formData,
				type: 'post',
				success: function ( response ) {
					Swal.fire({
							position: 'bottom-end',
							icon: 'success',
							title: response.messages,
							showConfirmButton: false,
							timer: 1500
						})
					//$( '#message' ).html( response );
				},
				error: function ( response ) {
					$( '#message' ).html( response );
				}
			} );
		} );
	} );
</script>

<?= $this->endSection(); ?>