<?= $this->extend('layout/layout-u'); ?>
<?= $this->section('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body col-5">
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo base_url('passchangeUser'); ?>" method="post">
                        <div class="mb-3">
                            <label for="login" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="cur_password" name="cur_password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="con_new_password" name="con_new_password">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>