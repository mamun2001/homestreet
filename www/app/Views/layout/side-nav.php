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

        <!-- Admin -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Admin
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= route_to('requisition/admin'); ?>"
                        class="nav-link <?= (current_url() == base_url('requisition/admin')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Requisition List
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('voucher/admin'); ?>"
                        class="nav-link <?= (current_url() == base_url('voucher/admin')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Voucher List
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('user'); ?>"
                        class="nav-link <?= (current_url() == base_url('user')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
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
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            User Projects
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Reports -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Reports
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= route_to('fr'); ?>"
                        class="nav-link <?= (current_url() == base_url('fr')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Fund Requisition
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= route_to('fa'); ?>"
                        class="nav-link <?= (current_url() == base_url('fa')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Fund Allocation
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= route_to('pwe'); ?>"
                        class="nav-link <?= (current_url() == base_url('pwe')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Projectwise Expense
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= route_to('hwe'); ?>"
                        class="nav-link <?= (current_url() == base_url('hwe')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Headwise Expense
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Setup -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Setup
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= route_to('districts'); ?>"
                        class="nav-link <?= (current_url() == base_url('districts')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Districts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('divisions'); ?>"
                        class="nav-link <?= (current_url() == base_url('divisions')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Divisions
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('subcontractor'); ?>"
                        class="nav-link <?= (current_url() == base_url('subcontractor')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Subcontractors
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= route_to('projects'); ?>"
                        class="nav-link <?= (current_url() == base_url('projects')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('projectfiles'); ?>"
                        class="nav-link <?= (current_url() == base_url('projectfiles')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Project Files
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('subcontract'); ?>"
                        class="nav-link <?= (current_url() == base_url('subcontract')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Project Subcontracts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('projectsbill'); ?>"
                        class="nav-link <?= (current_url() == base_url('projectsbill')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Projects Bill
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('items'); ?>"
                        class="nav-link <?= (current_url() == base_url('items')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Items
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('expenseheads'); ?>"
                        class="nav-link <?= (current_url() == base_url('expenseheads')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Expense Heads
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('categories'); ?>"
                        class="nav-link <?= (current_url() == base_url('categories')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('units'); ?>"
                        class="nav-link <?= (current_url() == base_url('units')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Units
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('brands'); ?>"
                        class="nav-link <?= (current_url() == base_url('brands')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Brands
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= route_to('models'); ?>"
                        class="nav-link <?= (current_url() == base_url('models')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Models
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= route_to('sizes'); ?>"
                        class="nav-link <?= (current_url() == base_url('sizes')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Sizes
                        </p>
                    </a>
                </li>

        </li>
    </ul>

    <li class="nav-item">
        <a href="<?= route_to('changepassword'); ?>"
            class="nav-link <?= (current_url() == base_url('changepassword')) ? 'active' : '' ?>">
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

</nav>