<?= $this->extend('layout/layout-a'); ?>
<?= $this->section('content'); ?>
<?
// print session()->get('logged_in');
// print session()->get('user_name');
// print session()->get('user_email');
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

<div class="container">
    <table class="table table-striped table-bordered" id="user-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'user/ajaxUser',
            columnDefs: []
        });
    });
</script>


<?= $this->endSection(); ?>