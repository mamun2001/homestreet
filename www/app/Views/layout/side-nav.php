<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
            <a href="<?= route_to('user.home'); ?>" class="nav-link <?= (current_url() == base_url('user/home')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('districts'); ?>" class="nav-link <?= (current_url() == base_url('districts')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Districts
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('divisions'); ?>" class="nav-link <?= (current_url() == base_url('divisions')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Divisions
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('subcontractor'); ?>" class="nav-link <?= (current_url() == base_url('subcontractor')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Subcontractor
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('deed'); ?>" class="nav-link <?= (current_url() == base_url('deed')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Subcontract Deed
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('projects'); ?>" class="nav-link <?= (current_url() == base_url('projects')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Projects
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('projectsbill'); ?>" class="nav-link <?= (current_url() == base_url('projectsbill')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Projects Bill
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('items'); ?>" class="nav-link <?= (current_url() == base_url('items')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Items
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('categories'); ?>" class="nav-link <?= (current_url() == base_url('categories')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Categories
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('units'); ?>" class="nav-link <?= (current_url() == base_url('units')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Units
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('brands'); ?>" class="nav-link <?= (current_url() == base_url('brands')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Brands
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('models'); ?>" class="nav-link <?= (current_url() == base_url('models')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Models
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= route_to('sizes'); ?>" class="nav-link <?= (current_url() == base_url('sizes')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Sizes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= route_to('user.profile'); ?>" class="nav-link <?= (current_url() == base_url('user/profile')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Profile
                </p>
            </a>
        </li>

    </ul>
</nav>