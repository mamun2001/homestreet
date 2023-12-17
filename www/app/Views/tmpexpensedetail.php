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
              <h3 class="card-title">Expense Detail</h3>
            </div>
            <!-- <div class="col-md-4">
              <button type="button" class="btn btn-block btn-success" onclick="add()" title="Add"> <i
                  class="fa fa-plus"></i> Add</button>
            </div> -->
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="form-group ml-2">
              <select name="heads" id="heads" class="form-control" style="width:200px">
                <option value="0">-- Head --</option>
                <?php foreach ($heads as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="items" id="items" class="form-control" style="width:200px">
                <option value="0">-- Item --</option>
                <?php foreach ($items as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="category" id="category" class="form-control" style="width:200px">
                <option value="0">-- Category --</option>
                <?php foreach ($category as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="brands" id="brands" class="form-control" style="width:200px">
                <option value="0">-- Brand --</option>
                <?php foreach ($brands as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="models" id="models" class="form-control" style="width:200px">
                <option value="0">-- Model --</option>
                <?php foreach ($models as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="sizes" id="sizes" class="form-control" style="width:200px">
                <option value="0">-- Size --</option>
                <?php foreach ($sizes as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="form-group ml-2">
              <select name="units" id="units" class="form-control" style="width:200px">
                <option value="0">-- Unit --</option>
                <?php foreach ($units as $key => $value) {
                  echo "<option value='" . $key . "'>" . $value . "</option>";
                } ?>
              </select>
            </div>&nbsp;
            <div class="col-md-1">
              <button type="button" class="btn btn-block btn-success" onclick="add()" title="Add"> <i
                  class="fa fa-plus"></i> Add</button>
            </div>
          </div>
          <table id="data_table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Head</th>
                <th>Item</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Size</th>
                <th>Unit</th>
                <th>Rate</th>
                <th>Qty</th>
                <th>Amount</th>

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
            <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="headId"> Head id: <span class="text-danger">*</span> </label>
                <input type="number" id="headId" name="headId" class="form-control" placeholder="Head id" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="itemId"> Item id: <span class="text-danger">*</span> </label>
                <input type="number" id="itemId" name="itemId" class="form-control" placeholder="Item id" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoryId"> Category id: </label>
                <input type="number" id="categoryId" name="categoryId" class="form-control" placeholder="Category id"
                  maxlength="11" number="true">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="brandId"> Brand id: </label>
                <input type="number" id="brandId" name="brandId" class="form-control" placeholder="Brand id"
                  maxlength="11" number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="modelId"> Model id: </label>
                <input type="number" id="modelId" name="modelId" class="form-control" placeholder="Model id"
                  maxlength="11" number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="sizeId"> Size id: </label>
                <input type="number" id="sizeId" name="sizeId" class="form-control" placeholder="Size id" maxlength="11"
                  number="true">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="unitId"> Unit id: </label>
                <input type="number" id="unitId" name="unitId" class="form-control" placeholder="Unit id" maxlength="11"
                  number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rate"> Rate: <span class="text-danger">*</span> </label>
                <input type="number" id="rate" name="rate" class="form-control" placeholder="Rate" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="qty"> Qty: <span class="text-danger">*</span> </label>
                <input type="number" id="qty" name="qty" class="form-control" placeholder="Qty" maxlength="11"
                  number="true" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="amount"> Amount: <span class="text-danger">*</span> </label>
                <input type="number" id="amount" name="amount" class="form-control" placeholder="Amount" maxlength="11"
                  number="true" required>
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
            <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="headId"> Head id: <span class="text-danger">*</span> </label>
                <input type="number" id="headId" name="headId" class="form-control" placeholder="Head id" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="itemId"> Item id: <span class="text-danger">*</span> </label>
                <input type="number" id="itemId" name="itemId" class="form-control" placeholder="Item id" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoryId"> Category id: </label>
                <input type="number" id="categoryId" name="categoryId" class="form-control" placeholder="Category id"
                  maxlength="11" number="true">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="brandId"> Brand id: </label>
                <input type="number" id="brandId" name="brandId" class="form-control" placeholder="Brand id"
                  maxlength="11" number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="modelId"> Model id: </label>
                <input type="number" id="modelId" name="modelId" class="form-control" placeholder="Model id"
                  maxlength="11" number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="sizeId"> Size id: </label>
                <input type="number" id="sizeId" name="sizeId" class="form-control" placeholder="Size id" maxlength="11"
                  number="true">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="unitId"> Unit id: </label>
                <input type="number" id="unitId" name="unitId" class="form-control" placeholder="Unit id" maxlength="11"
                  number="true">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rate"> Rate: <span class="text-danger">*</span> </label>
                <input type="number" id="rate" name="rate" class="form-control" placeholder="Rate" maxlength="11"
                  number="true" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="qty"> Qty: <span class="text-danger">*</span> </label>
                <input type="number" id="qty" name="qty" class="form-control" placeholder="Qty" maxlength="11"
                  number="true" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="amount"> Amount: <span class="text-danger">*</span> </label>
                <input type="number" id="amount" name="amount" class="form-control" placeholder="Amount" maxlength="11"
                  number="true" required>
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
<!-- /.content -->

<script>
  $(function () {
    $('#data_table').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
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
        $("#edit-form #headId").val(response.head_id);
        $("#edit-form #itemId").val(response.item_id);
        $("#edit-form #categoryId").val(response.category_id);
        $("#edit-form #brandId").val(response.brand_id);
        $("#edit-form #modelId").val(response.model_id);
        $("#edit-form #sizeId").val(response.size_id);
        $("#edit-form #unitId").val(response.unit_id);
        $("#edit-form #rate").val(response.rate);
        $("#edit-form #qty").val(response.qty);
        $("#edit-form #amount").val(response.amount);

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