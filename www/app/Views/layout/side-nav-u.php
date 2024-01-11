<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Requisition
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('voucher'); ?>"
                class="nav-link <?= (current_url() == base_url('voucher')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Upload Voucher
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('voucher/voucherList'); ?>"
                class="nav-link <?= (current_url() == base_url('voucher/voucherList')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Voucher List
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('logout'); ?>"
                class="nav-link <?= (current_url() == base_url('user/profile')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
    </li>




    </ul>
</nav>