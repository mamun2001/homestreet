<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?= route_to('/'); ?>" class="nav-link <?= (current_url() == base_url('/')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('requisition'); ?>"
                class="nav-link <?= (current_url() == base_url('requisition')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-comment-dollar"></i>
                <p>
                    Requisition
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('voucher'); ?>"
                class="nav-link <?= (current_url() == base_url('voucher')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                <p>
                    Upload Voucher
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('voucher/voucherList'); ?>"
                class="nav-link <?= (current_url() == base_url('voucher/voucherList')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                    Voucher List
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('changepass'); ?>"
                class="nav-link <?= (current_url() == base_url('changepass')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-key"></i>
                <p>
                    Change Password
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('logout'); ?>"
                class="nav-link <?= (current_url() == base_url('user/profile')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
    </li>




    </ul>
</nav>