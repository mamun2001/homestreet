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

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Setup
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= route_to('districts'); ?>"
                        class="nav-link <?= (current_url() == base_url('districts')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Districts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('divisions'); ?>"
                        class="nav-link <?= (current_url() == base_url('divisions')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Divisions
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('subcontractor'); ?>"
                        class="nav-link <?= (current_url() == base_url('subcontractor')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Subcontractor
                        </p>
                    </a>
                </li>

                <!--
                <li class="nav-item">
                    <a href="<?= route_to('deed'); ?>" class="nav-link <?= (current_url() == base_url('deed')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Subcontract Deed
                </p>
-->
                </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('projects'); ?>"
                class="nav-link <?= (current_url() == base_url('projects')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Projects
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('subcontract'); ?>"
                class="nav-link <?= (current_url() == base_url('subcontract')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Project Subcontracts
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('projectsbill'); ?>"
                class="nav-link <?= (current_url() == base_url('projectsbill')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Projects Bill
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('items'); ?>"
                class="nav-link <?= (current_url() == base_url('items')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Items
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('expenseheads'); ?>"
                class="nav-link <?= (current_url() == base_url('expenseheads')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Expense Heads
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('categories'); ?>"
                class="nav-link <?= (current_url() == base_url('categories')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Categories
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('units'); ?>"
                class="nav-link <?= (current_url() == base_url('units')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Units
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('brands'); ?>"
                class="nav-link <?= (current_url() == base_url('brands')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Brands
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('models'); ?>"
                class="nav-link <?= (current_url() == base_url('models')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Models
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('sizes'); ?>"
                class="nav-link <?= (current_url() == base_url('sizes')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Sizes
                </p>
            </a>
        </li>
    </ul>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Admin
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>

        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= route_to('user'); ?>"
                    class="nav-link <?= (current_url() == base_url('user')) ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
        </ul>

        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= route_to('userprojects'); ?>"
                    class="nav-link <?= (current_url() == base_url('userprojects')) ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User Projects
                    </p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="<?= route_to('user.profile'); ?>"
            class="nav-link <?= (current_url() == base_url('user/profile')) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Profile
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
</nav>