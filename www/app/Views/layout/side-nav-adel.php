<nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                            <a href="<?= route_to('user.profile'); ?>" class="nav-link <?= (current_url() == base_url('user/profile')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>