<?= $this->extend('templates/admin_template')  ?>

<?= $this->section('content') ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 -->
<div class="container">
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Composition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Composition</li>
            </ol>
          </div>
        </div>  
    <div class="form-group">
         <form name="add_name" method="POST" action="<?php echo base_url();?>/composition-more">

            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="text" name="addmore[][name]" placeholder="Enter your Name" class="form-control name_list" required="" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />  
            </div>


         </form>  
    </div> 
</div>


<script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="addmore[][name]" placeholder="Enter your Name" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


    });  
</script>

<?= $this->endSection() ?>