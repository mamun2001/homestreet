<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ingredients</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">  
  <!-- DataTables -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://adminlte.io/themes/v3/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://adminlte.io/themes/v3/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://adminlte.io/themes/v3/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://adminlte.io/themes/v3/index3.html" class="brand-link">
      <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://adminlte.io/themes/v3/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://adminlte.io/themes/v3/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://adminlte.io/themes/v3/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://adminlte.io/themes/v3/starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ingredients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ingredients</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
			  	<div class="col-md-8 mt-2">
				  <h3 class="card-title">Ingredients</h3>
			  	</div>
				<div class="col-md-4">
				  <button type="button" class="btn btn-block btn-success" onclick="add()" title="Add"> <i class="fa fa-plus"></i> Add</button>
				</div>
			  </div>			  
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data_table" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Id</th>
					<th>Ing Descr E</th>
					<th>Dry Matter</th>
					<th>Moisture</th>
					<th>Crude Protein</th>
					<th>Crude Lipids</th>
					<th>Crude Fibre</th>
					<th>Ash</th>
					<th>NFE</th>
					<th>NDF</th>
					<th>ADF</th>
					<th>Total CHO</th>
					<th>Starch</th>
					<th>Sugars</th>
					<th>Gross Energy MJ</th>
					<th>Gross energy Kcal</th>
					<th>DE Fish Carni</th>
					<th>DE Fish Omni</th>
					<th>DE Carp</th>
					<th>DE Shrimp</th>
					<th>DE Porcine</th>
					<th>DE Poultry</th>
					<th>ME Fish</th>
					<th>ME Guelph Fish Carni</th>
					<th>ME Guelph Fish Omni</th>
					<th>ME Guelph Carp</th>
					<th>ME Guelph Shrimp</th>
					<th>ME Poultry</th>
					<th>ME Porcine</th>
					<th>Arginine</th>
					<th>Histidine</th>
					<th>Isoleucine</th>
					<th>Leucine</th>
					<th>Lysine</th>
					<th>Methionine</th>
					<th>Phenylalanine</th>
					<th>Threonine</th>
					<th>Tryptophan</th>
					<th>Valine</th>
					<th>Cystine</th>
					<th>TSAA Met Cys</th>
					<th>Tyrosine</th>
					<th>Phe Tyr</th>
					<th>Glutamic</th>
					<th>Aspartic</th>
					<th>Glycine</th>
					<th>Serine</th>
					<th>Alanine</th>
					<th>Sum EAAs</th>
					<th>Sum NEAAs</th>
					<th>Taurine</th>
					<th>Arg Coeff</th>
					<th>His Coeff</th>
					<th>Ile Coeff</th>
					<th>Leu Coeff</th>
					<th>Lys Coeff</th>
					<th>Met Coeff</th>
					<th>Phe Coeff</th>
					<th>Thr Coeff</th>
					<th>Trp Coeff</th>
					<th>Val Coeff</th>
					<th>Dig Arg fish</th>
					<th>Dig His fish</th>
					<th>Dig Ile fish</th>
					<th>Dig Leu fish</th>
					<th>Dig Lys fish</th>
					<th>Dig Met fish</th>
					<th>Dig Phe fish</th>
					<th>Dig Thr fish</th>
					<th>Dig Trp fish</th>
					<th>Dig Val fish</th>
					<th>Dig Cys fish</th>
					<th>Dig TSAA Met Cys</th>
					<th>Dig Tyr fish</th>
					<th>Calcium</th>
					<th>Phosphorus</th>
					<th>Ca Coeff</th>
					<th>P coeff</th>
					<th>Phytate P</th>
					<th>Bone P</th>
					<th>Cellular P</th>
					<th>Monobasic P</th>
					<th>Dibasic P</th>
					<th>Tribasic P</th>
					<th>Dig P Carni</th>
					<th>Dig P Omni</th>
					<th>Dig P Carp</th>
					<th>Dig P Shrimp</th>
					<th>Sodium</th>
					<th>Chlorine</th>
					<th>Potassium</th>
					<th>Magnesium</th>
					<th>Sulfur</th>
					<th>Copper</th>
					<th>Iron</th>
					<th>Manganese</th>
					<th>Selenium</th>
					<th>Zinc</th>
					<th>Iodine</th>
					<th>Cobalt</th>
					<th>Biotin B7</th>
					<th>Folic acid B9</th>
					<th>Niacin B3</th>
					<th>Pantothenic Acid B5</th>
					<th>Pyridoxine B6</th>
					<th>Riboflavin B2</th>
					<th>Thiamin B1</th>
					<th>Vitamin B12</th>
					<th>Vitamin C</th>
					<th>Vitamin A</th>
					<th>Vitamin D</th>
					<th>Vitamin E</th>
					<th>Vitamin K</th>
					<th>Choline</th>
					<th>Inositol</th>
					<th>Beta Carotene</th>
					<th>Xanthophylls</th>
					<th>Antioxidant</th>
					<th>ADC DM fish</th>
					<th>ADC CP fish</th>
					<th>ADC Lipid fish</th>
					<th>ADC GE fish</th>
					<th>ADC Total CHO fish</th>
					<th>ADC Starch fish</th>
					<th>ADC Starch Carni</th>
					<th>ADC Starch Omni</th>
					<th>Dig DM fish</th>
					<th>Dig CP fish</th>
					<th>Dig Lipid fish</th>
					<th>Dig GE DE fish Kcal</th>
					<th>Dig Total CHO fish</th>
					<th>Dig Starch fish</th>
					<th>Dig Starch carni</th>
					<th>Dig Starch Omni</th>
					<th>ADC Arg fish</th>
					<th>ADC His fish</th>
					<th>ADC Ile fish</th>
					<th>ADC Leu fish</th>
					<th>ADC Lys fish</th>
					<th>ADC Met fish</th>
					<th>ADC Phe fish</th>
					<th>ADC Thr fish</th>
					<th>ADC Trp fish</th>
					<th>ADC Val fish</th>
					<th>ADC Cys fish</th>
					<th>ADC Tyr fish</th>
					<th>Palmitic 16 0</th>
					<th>Stearic 18 0</th>
					<th>Oleic 18 1 n 9</th>
					<th>Linoleic 18 2 n 6</th>
					<th>Linolenic 18 3 n 3</th>
					<th>Arachidonic 20 4 n 6</th>
					<th>EPA 20 5 n 3</th>
					<th>DHA 22 6 n 3</th>
					<th>EPA DHA</th>
					<th>SAFA</th>
					<th>MUFA</th>
					<th>PUFA</th>
					<th>Sum n 3</th>
					<th>Sum n 6</th>
					<th>Phospholipids</th>
					<th>Cholesterol</th>
					<th>Plant sterols</th>
					<th>Coeff 18 2 n 6</th>
					<th>Coeff 18 3 n 3</th>
					<th>Coeff 20 4 n 6</th>
					<th>Coeff 20 5 n 3</th>
					<th>Coeff 22 6 n 3</th>
					<th>Coeff SAFA</th>
					<th>Coeff MUFA</th>
					<th>Coeff PUFA</th>
					<th>Aflatoxin B</th>
					<th>Deoxynivalenol DON</th>
					<th>Zeralenone ZON</th>
					<th>Fumonicin FUM</th>
					<th>Anti trypsic factors</th>
					<th>Gossypol</th>
					<th>Phytic Acid</th>
					<th>Glucosinolates</th>
					<th>Sinapine</th>
					<th>Tannins</th>
					<th>Lectins</th>
					<th>Cyanogens</th>
					<th>PCBs</th>
					<th>Dioxins</th>
					<th>Soyasaponins</th>
					<th>Isoflavones</th>
					<th>SIDC DM porcine</th>
					<th>SIDC CP porcine</th>
					<th>SIDC Arg porcine</th>
					<th>SIDC His porcine</th>
					<th>SIDC Ile porcine</th>
					<th>SIDC Leu porcine</th>
					<th>SIDC Lys porcine</th>
					<th>SIDC Met porcine</th>
					<th>SIDC Phe porcine</th>
					<th>SIDC Thr porcine</th>
					<th>SIDC Trp porcine</th>
					<th>SIDC Val porcine</th>
					<th>SIDC Cys porcine</th>
					<th>SIDC Tyr porcine</th>
					<th>SIDC DM poultry</th>
					<th>SIDC CP poultry</th>
					<th>SIDC Arg poultry</th>
					<th>SIDC His poultry</th>
					<th>SIDC Ile poultry</th>
					<th>SIDC Leu poultry</th>
					<th>SIDC Lys poultry</th>
					<th>SIDC Met poultry</th>
					<th>SIDC Phe poultry</th>
					<th>SIDC Thr poultry</th>
					<th>SIDC Trp poultry</th>
					<th>SIDC Val poultry</th>
					<th>SIDC Cys poultry</th>
					<th>SIDC Tyr poultry</th>
					<th>SID Arg porcine</th>
					<th>SID His porcine</th>
					<th>SID Ile porcine</th>
					<th>SID Leu porcine</th>
					<th>SID Lys porcine</th>
					<th>SID Met porcine</th>
					<th>SID Phe porcine</th>
					<th>SID Thr porcine</th>
					<th>SID Trp porcine</th>
					<th>SID Val porcine</th>
					<th>SID Cys porcine</th>
					<th>SID Tyr porcine</th>
					<th>SID Arg poultry</th>
					<th>SID His poultry</th>
					<th>SID Ile poultry</th>
					<th>SID Leu poultry</th>
					<th>SID Lys poultry</th>
					<th>SID Met poultry</th>
					<th>SID Phe poultry</th>
					<th>SID Thr poultry</th>
					<th>SID Trp poultry</th>
					<th>SID Val poultry</th>
					<th>SID Cys poultry</th>
					<th>SID Tyr poultry</th>

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
	<div id="add-modal" class="modal fade" tabindex="-1" role="dialog"
		aria-hidden="true">
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
									<label for="ingCode"> Ing Code: </label>
									<input type="number" id="ingCode" name="ingCode" class="form-control" placeholder="Ing Code" maxlength="5" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ingDescrE"> Ing Descr E: </label>
									<input type="text" id="ingDescrE" name="ingDescrE" class="form-control" placeholder="Ing Descr E" maxlength="60" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dryMatter"> Dry Matter: </label>
									<input type="text" id="dryMatter" name="dryMatter" class="form-control" placeholder="Dry Matter" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="moisture"> Moisture: </label>
									<input type="text" id="moisture" name="moisture" class="form-control" placeholder="Moisture" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeProtein"> Crude Protein: </label>
									<input type="text" id="crudeProtein" name="crudeProtein" class="form-control" placeholder="Crude Protein" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeLipids"> Crude Lipids: </label>
									<input type="text" id="crudeLipids" name="crudeLipids" class="form-control" placeholder="Crude Lipids" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeFibre"> Crude Fibre: </label>
									<input type="text" id="crudeFibre" name="crudeFibre" class="form-control" placeholder="Crude Fibre" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ash"> Ash: </label>
									<input type="text" id="ash" name="ash" class="form-control" placeholder="Ash" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nFE"> NFE: </label>
									<input type="text" id="nFE" name="nFE" class="form-control" placeholder="NFE" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nDF"> NDF: </label>
									<input type="text" id="nDF" name="nDF" class="form-control" placeholder="NDF" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDF"> ADF: </label>
									<input type="text" id="aDF" name="aDF" class="form-control" placeholder="ADF" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="totalCHO"> Total CHO: </label>
									<input type="text" id="totalCHO" name="totalCHO" class="form-control" placeholder="Total CHO" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="starch"> Starch: </label>
									<input type="text" id="starch" name="starch" class="form-control" placeholder="Starch" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sugars"> Sugars: </label>
									<input type="text" id="sugars" name="sugars" class="form-control" placeholder="Sugars" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="grossEnergyMJ"> Gross Energy MJ: </label>
									<input type="text" id="grossEnergyMJ" name="grossEnergyMJ" class="form-control" placeholder="Gross Energy MJ" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="grossEnergyKcal"> Gross energy Kcal: </label>
									<input type="number" id="grossEnergyKcal" name="grossEnergyKcal" class="form-control" placeholder="Gross energy Kcal" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEFishCarni"> DE Fish Carni: </label>
									<input type="number" id="dEFishCarni" name="dEFishCarni" class="form-control" placeholder="DE Fish Carni" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEFishOmni"> DE Fish Omni: </label>
									<input type="number" id="dEFishOmni" name="dEFishOmni" class="form-control" placeholder="DE Fish Omni" maxlength="4" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dECarp"> DE Carp: </label>
									<input type="number" id="dECarp" name="dECarp" class="form-control" placeholder="DE Carp" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEShrimp"> DE Shrimp: </label>
									<input type="number" id="dEShrimp" name="dEShrimp" class="form-control" placeholder="DE Shrimp" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEPorcine"> DE Porcine: </label>
									<input type="text" id="dEPorcine" name="dEPorcine" class="form-control" placeholder="DE Porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEPoultry"> DE Poultry: </label>
									<input type="text" id="dEPoultry" name="dEPoultry" class="form-control" placeholder="DE Poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEFish"> ME Fish: </label>
									<input type="number" id="mEFish" name="mEFish" class="form-control" placeholder="ME Fish" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphFishCarni"> ME Guelph Fish Carni: </label>
									<input type="text" id="mEGuelphFishCarni" name="mEGuelphFishCarni" class="form-control" placeholder="ME Guelph Fish Carni" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphFishOmni"> ME Guelph Fish Omni: </label>
									<input type="text" id="mEGuelphFishOmni" name="mEGuelphFishOmni" class="form-control" placeholder="ME Guelph Fish Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphCarp"> ME Guelph Carp: </label>
									<input type="text" id="mEGuelphCarp" name="mEGuelphCarp" class="form-control" placeholder="ME Guelph Carp" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphShrimp"> ME Guelph Shrimp: </label>
									<input type="text" id="mEGuelphShrimp" name="mEGuelphShrimp" class="form-control" placeholder="ME Guelph Shrimp" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEPoultry"> ME Poultry: </label>
									<input type="text" id="mEPoultry" name="mEPoultry" class="form-control" placeholder="ME Poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEPorcine"> ME Porcine: </label>
									<input type="text" id="mEPorcine" name="mEPorcine" class="form-control" placeholder="ME Porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="arginine"> Arginine: </label>
									<input type="text" id="arginine" name="arginine" class="form-control" placeholder="Arginine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="histidine"> Histidine: </label>
									<input type="text" id="histidine" name="histidine" class="form-control" placeholder="Histidine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="isoleucine"> Isoleucine: </label>
									<input type="text" id="isoleucine" name="isoleucine" class="form-control" placeholder="Isoleucine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="leucine"> Leucine: </label>
									<input type="text" id="leucine" name="leucine" class="form-control" placeholder="Leucine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="lysine"> Lysine: </label>
									<input type="text" id="lysine" name="lysine" class="form-control" placeholder="Lysine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="methionine"> Methionine: </label>
									<input type="text" id="methionine" name="methionine" class="form-control" placeholder="Methionine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="phenylalanine"> Phenylalanine: </label>
									<input type="text" id="phenylalanine" name="phenylalanine" class="form-control" placeholder="Phenylalanine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="threonine"> Threonine: </label>
									<input type="text" id="threonine" name="threonine" class="form-control" placeholder="Threonine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tryptophan"> Tryptophan: </label>
									<input type="text" id="tryptophan" name="tryptophan" class="form-control" placeholder="Tryptophan" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="valine"> Valine: </label>
									<input type="text" id="valine" name="valine" class="form-control" placeholder="Valine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cystine"> Cystine: </label>
									<input type="text" id="cystine" name="cystine" class="form-control" placeholder="Cystine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tSAAMetCys"> TSAA Met Cys: </label>
									<input type="text" id="tSAAMetCys" name="tSAAMetCys" class="form-control" placeholder="TSAA Met Cys" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tyrosine"> Tyrosine: </label>
									<input type="text" id="tyrosine" name="tyrosine" class="form-control" placeholder="Tyrosine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pheTyr"> Phe Tyr: </label>
									<input type="text" id="pheTyr" name="pheTyr" class="form-control" placeholder="Phe Tyr" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="glutamic"> Glutamic: </label>
									<input type="text" id="glutamic" name="glutamic" class="form-control" placeholder="Glutamic" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aspartic"> Aspartic: </label>
									<input type="text" id="aspartic" name="aspartic" class="form-control" placeholder="Aspartic" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="glycine"> Glycine: </label>
									<input type="text" id="glycine" name="glycine" class="form-control" placeholder="Glycine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="serine"> Serine: </label>
									<input type="text" id="serine" name="serine" class="form-control" placeholder="Serine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="alanine"> Alanine: </label>
									<input type="text" id="alanine" name="alanine" class="form-control" placeholder="Alanine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumEAAs"> Sum EAAs: </label>
									<input type="text" id="sumEAAs" name="sumEAAs" class="form-control" placeholder="Sum EAAs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumNEAAs"> Sum NEAAs: </label>
									<input type="text" id="sumNEAAs" name="sumNEAAs" class="form-control" placeholder="Sum NEAAs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="taurine"> Taurine: </label>
									<input type="text" id="taurine" name="taurine" class="form-control" placeholder="Taurine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="argCoeff"> Arg Coeff: </label>
									<input type="text" id="argCoeff" name="argCoeff" class="form-control" placeholder="Arg Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="hisCoeff"> His Coeff: </label>
									<input type="text" id="hisCoeff" name="hisCoeff" class="form-control" placeholder="His Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ileCoeff"> Ile Coeff: </label>
									<input type="text" id="ileCoeff" name="ileCoeff" class="form-control" placeholder="Ile Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="leuCoeff"> Leu Coeff: </label>
									<input type="text" id="leuCoeff" name="leuCoeff" class="form-control" placeholder="Leu Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="lysCoeff"> Lys Coeff: </label>
									<input type="text" id="lysCoeff" name="lysCoeff" class="form-control" placeholder="Lys Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="metCoeff"> Met Coeff: </label>
									<input type="text" id="metCoeff" name="metCoeff" class="form-control" placeholder="Met Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pheCoeff"> Phe Coeff: </label>
									<input type="text" id="pheCoeff" name="pheCoeff" class="form-control" placeholder="Phe Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="thrCoeff"> Thr Coeff: </label>
									<input type="text" id="thrCoeff" name="thrCoeff" class="form-control" placeholder="Thr Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="trpCoeff"> Trp Coeff: </label>
									<input type="text" id="trpCoeff" name="trpCoeff" class="form-control" placeholder="Trp Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="valCoeff"> Val Coeff: </label>
									<input type="text" id="valCoeff" name="valCoeff" class="form-control" placeholder="Val Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digArgFish"> Dig Arg fish: </label>
									<input type="text" id="digArgFish" name="digArgFish" class="form-control" placeholder="Dig Arg fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digHisFish"> Dig His fish: </label>
									<input type="text" id="digHisFish" name="digHisFish" class="form-control" placeholder="Dig His fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digIleFish"> Dig Ile fish: </label>
									<input type="text" id="digIleFish" name="digIleFish" class="form-control" placeholder="Dig Ile fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLeuFish"> Dig Leu fish: </label>
									<input type="text" id="digLeuFish" name="digLeuFish" class="form-control" placeholder="Dig Leu fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLysFish"> Dig Lys fish: </label>
									<input type="text" id="digLysFish" name="digLysFish" class="form-control" placeholder="Dig Lys fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digMetFish"> Dig Met fish: </label>
									<input type="text" id="digMetFish" name="digMetFish" class="form-control" placeholder="Dig Met fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPheFish"> Dig Phe fish: </label>
									<input type="text" id="digPheFish" name="digPheFish" class="form-control" placeholder="Dig Phe fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digThrFish"> Dig Thr fish: </label>
									<input type="text" id="digThrFish" name="digThrFish" class="form-control" placeholder="Dig Thr fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTrpFish"> Dig Trp fish: </label>
									<input type="text" id="digTrpFish" name="digTrpFish" class="form-control" placeholder="Dig Trp fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digValFish"> Dig Val fish: </label>
									<input type="text" id="digValFish" name="digValFish" class="form-control" placeholder="Dig Val fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digCysFish"> Dig Cys fish: </label>
									<input type="text" id="digCysFish" name="digCysFish" class="form-control" placeholder="Dig Cys fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTSAAMetCys"> Dig TSAA Met Cys: </label>
									<input type="text" id="digTSAAMetCys" name="digTSAAMetCys" class="form-control" placeholder="Dig TSAA Met Cys" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTyrFish"> Dig Tyr fish: </label>
									<input type="text" id="digTyrFish" name="digTyrFish" class="form-control" placeholder="Dig Tyr fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="calcium"> Calcium: </label>
									<input type="text" id="calcium" name="calcium" class="form-control" placeholder="Calcium" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phosphorus"> Phosphorus: </label>
									<input type="text" id="phosphorus" name="phosphorus" class="form-control" placeholder="Phosphorus" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="caCoeff"> Ca Coeff: </label>
									<input type="number" id="caCoeff" name="caCoeff" class="form-control" placeholder="Ca Coeff" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pCoeff"> P coeff: </label>
									<input type="number" id="pCoeff" name="pCoeff" class="form-control" placeholder="P coeff" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phytateP"> Phytate P: </label>
									<input type="text" id="phytateP" name="phytateP" class="form-control" placeholder="Phytate P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="boneP"> Bone P: </label>
									<input type="text" id="boneP" name="boneP" class="form-control" placeholder="Bone P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cellularP"> Cellular P: </label>
									<input type="text" id="cellularP" name="cellularP" class="form-control" placeholder="Cellular P" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="monobasicP"> Monobasic P: </label>
									<input type="text" id="monobasicP" name="monobasicP" class="form-control" placeholder="Monobasic P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dibasicP"> Dibasic P: </label>
									<input type="text" id="dibasicP" name="dibasicP" class="form-control" placeholder="Dibasic P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tribasicP"> Tribasic P: </label>
									<input type="text" id="tribasicP" name="tribasicP" class="form-control" placeholder="Tribasic P" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPCarni"> Dig P Carni: </label>
									<input type="text" id="digPCarni" name="digPCarni" class="form-control" placeholder="Dig P Carni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPOmni"> Dig P Omni: </label>
									<input type="text" id="digPOmni" name="digPOmni" class="form-control" placeholder="Dig P Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPCarp"> Dig P Carp: </label>
									<input type="text" id="digPCarp" name="digPCarp" class="form-control" placeholder="Dig P Carp" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPShrimp"> Dig P Shrimp: </label>
									<input type="text" id="digPShrimp" name="digPShrimp" class="form-control" placeholder="Dig P Shrimp" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sodium"> Sodium: </label>
									<input type="text" id="sodium" name="sodium" class="form-control" placeholder="Sodium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="chlorine"> Chlorine: </label>
									<input type="text" id="chlorine" name="chlorine" class="form-control" placeholder="Chlorine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="potassium"> Potassium: </label>
									<input type="text" id="potassium" name="potassium" class="form-control" placeholder="Potassium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="magnesium"> Magnesium: </label>
									<input type="text" id="magnesium" name="magnesium" class="form-control" placeholder="Magnesium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sulfur"> Sulfur: </label>
									<input type="text" id="sulfur" name="sulfur" class="form-control" placeholder="Sulfur" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="copper"> Copper: </label>
									<input type="text" id="copper" name="copper" class="form-control" placeholder="Copper" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="iron"> Iron: </label>
									<input type="text" id="iron" name="iron" class="form-control" placeholder="Iron" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="manganese"> Manganese: </label>
									<input type="text" id="manganese" name="manganese" class="form-control" placeholder="Manganese" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="selenium"> Selenium: </label>
									<input type="text" id="selenium" name="selenium" class="form-control" placeholder="Selenium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="zinc"> Zinc: </label>
									<input type="text" id="zinc" name="zinc" class="form-control" placeholder="Zinc" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="iodine"> Iodine: </label>
									<input type="text" id="iodine" name="iodine" class="form-control" placeholder="Iodine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cobalt"> Cobalt: </label>
									<input type="text" id="cobalt" name="cobalt" class="form-control" placeholder="Cobalt" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="biotinB7"> Biotin B7: </label>
									<input type="text" id="biotinB7" name="biotinB7" class="form-control" placeholder="Biotin B7" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="folicAcidB9"> Folic acid B9: </label>
									<input type="text" id="folicAcidB9" name="folicAcidB9" class="form-control" placeholder="Folic acid B9" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="niacinB3"> Niacin B3: </label>
									<input type="text" id="niacinB3" name="niacinB3" class="form-control" placeholder="Niacin B3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pantothenicAcidB5"> Pantothenic Acid B5: </label>
									<input type="text" id="pantothenicAcidB5" name="pantothenicAcidB5" class="form-control" placeholder="Pantothenic Acid B5" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pyridoxineB6"> Pyridoxine B6: </label>
									<input type="text" id="pyridoxineB6" name="pyridoxineB6" class="form-control" placeholder="Pyridoxine B6" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="riboflavinB2"> Riboflavin B2: </label>
									<input type="text" id="riboflavinB2" name="riboflavinB2" class="form-control" placeholder="Riboflavin B2" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="thiaminB1"> Thiamin B1: </label>
									<input type="text" id="thiaminB1" name="thiaminB1" class="form-control" placeholder="Thiamin B1" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminB12"> Vitamin B12: </label>
									<input type="text" id="vitaminB12" name="vitaminB12" class="form-control" placeholder="Vitamin B12" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminC"> Vitamin C: </label>
									<input type="text" id="vitaminC" name="vitaminC" class="form-control" placeholder="Vitamin C" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminA"> Vitamin A: </label>
									<input type="text" id="vitaminA" name="vitaminA" class="form-control" placeholder="Vitamin A" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminD"> Vitamin D: </label>
									<input type="text" id="vitaminD" name="vitaminD" class="form-control" placeholder="Vitamin D" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminE"> Vitamin E: </label>
									<input type="text" id="vitaminE" name="vitaminE" class="form-control" placeholder="Vitamin E" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminK"> Vitamin K: </label>
									<input type="text" id="vitaminK" name="vitaminK" class="form-control" placeholder="Vitamin K" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="choline"> Choline: </label>
									<input type="text" id="choline" name="choline" class="form-control" placeholder="Choline" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="inositol"> Inositol: </label>
									<input type="text" id="inositol" name="inositol" class="form-control" placeholder="Inositol" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="betaCarotene"> Beta Carotene: </label>
									<input type="text" id="betaCarotene" name="betaCarotene" class="form-control" placeholder="Beta Carotene" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="xanthophylls"> Xanthophylls: </label>
									<input type="number" id="xanthophylls" name="xanthophylls" class="form-control" placeholder="Xanthophylls" maxlength="4" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="antioxidant"> Antioxidant: </label>
									<input type="text" id="antioxidant" name="antioxidant" class="form-control" placeholder="Antioxidant" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCDMFish"> ADC DM fish: </label>
									<input type="number" id="aDCDMFish" name="aDCDMFish" class="form-control" placeholder="ADC DM fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCCPFish"> ADC CP fish: </label>
									<input type="number" id="aDCCPFish" name="aDCCPFish" class="form-control" placeholder="ADC CP fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLipidFish"> ADC Lipid fish: </label>
									<input type="number" id="aDCLipidFish" name="aDCLipidFish" class="form-control" placeholder="ADC Lipid fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCGEFish"> ADC GE fish: </label>
									<input type="number" id="aDCGEFish" name="aDCGEFish" class="form-control" placeholder="ADC GE fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTotalCHOFish"> ADC Total CHO fish: </label>
									<input type="number" id="aDCTotalCHOFish" name="aDCTotalCHOFish" class="form-control" placeholder="ADC Total CHO fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchFish"> ADC Starch fish: </label>
									<input type="number" id="aDCStarchFish" name="aDCStarchFish" class="form-control" placeholder="ADC Starch fish" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchCarni"> ADC Starch Carni: </label>
									<input type="number" id="aDCStarchCarni" name="aDCStarchCarni" class="form-control" placeholder="ADC Starch Carni" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchOmni"> ADC Starch Omni: </label>
									<input type="number" id="aDCStarchOmni" name="aDCStarchOmni" class="form-control" placeholder="ADC Starch Omni" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digDMFish"> Dig DM fish: </label>
									<input type="text" id="digDMFish" name="digDMFish" class="form-control" placeholder="Dig DM fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digCPFish"> Dig CP fish: </label>
									<input type="text" id="digCPFish" name="digCPFish" class="form-control" placeholder="Dig CP fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLipidFish"> Dig Lipid fish: </label>
									<input type="text" id="digLipidFish" name="digLipidFish" class="form-control" placeholder="Dig Lipid fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digGEDEFishKcal"> Dig GE DE fish Kcal: </label>
									<input type="number" id="digGEDEFishKcal" name="digGEDEFishKcal" class="form-control" placeholder="Dig GE DE fish Kcal" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTotalCHOFish"> Dig Total CHO fish: </label>
									<input type="text" id="digTotalCHOFish" name="digTotalCHOFish" class="form-control" placeholder="Dig Total CHO fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchFish"> Dig Starch fish: </label>
									<input type="text" id="digStarchFish" name="digStarchFish" class="form-control" placeholder="Dig Starch fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchCarni"> Dig Starch carni: </label>
									<input type="text" id="digStarchCarni" name="digStarchCarni" class="form-control" placeholder="Dig Starch carni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchOmni"> Dig Starch Omni: </label>
									<input type="text" id="digStarchOmni" name="digStarchOmni" class="form-control" placeholder="Dig Starch Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCArgFish"> ADC Arg fish: </label>
									<input type="number" id="aDCArgFish" name="aDCArgFish" class="form-control" placeholder="ADC Arg fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCHisFish"> ADC His fish: </label>
									<input type="number" id="aDCHisFish" name="aDCHisFish" class="form-control" placeholder="ADC His fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCIleFish"> ADC Ile fish: </label>
									<input type="number" id="aDCIleFish" name="aDCIleFish" class="form-control" placeholder="ADC Ile fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLeuFish"> ADC Leu fish: </label>
									<input type="number" id="aDCLeuFish" name="aDCLeuFish" class="form-control" placeholder="ADC Leu fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLysFish"> ADC Lys fish: </label>
									<input type="number" id="aDCLysFish" name="aDCLysFish" class="form-control" placeholder="ADC Lys fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCMetFish"> ADC Met fish: </label>
									<input type="number" id="aDCMetFish" name="aDCMetFish" class="form-control" placeholder="ADC Met fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCPheFish"> ADC Phe fish: </label>
									<input type="number" id="aDCPheFish" name="aDCPheFish" class="form-control" placeholder="ADC Phe fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCThrFish"> ADC Thr fish: </label>
									<input type="number" id="aDCThrFish" name="aDCThrFish" class="form-control" placeholder="ADC Thr fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTrpFish"> ADC Trp fish: </label>
									<input type="number" id="aDCTrpFish" name="aDCTrpFish" class="form-control" placeholder="ADC Trp fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCValFish"> ADC Val fish: </label>
									<input type="number" id="aDCValFish" name="aDCValFish" class="form-control" placeholder="ADC Val fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCCysFish"> ADC Cys fish: </label>
									<input type="number" id="aDCCysFish" name="aDCCysFish" class="form-control" placeholder="ADC Cys fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTyrFish"> ADC Tyr fish: </label>
									<input type="number" id="aDCTyrFish" name="aDCTyrFish" class="form-control" placeholder="ADC Tyr fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="palmitic160"> Palmitic 16 0: </label>
									<input type="text" id="palmitic160" name="palmitic160" class="form-control" placeholder="Palmitic 16 0" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="stearic180"> Stearic 18 0: </label>
									<input type="text" id="stearic180" name="stearic180" class="form-control" placeholder="Stearic 18 0" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="oleic181N9"> Oleic 18 1 n 9: </label>
									<input type="text" id="oleic181N9" name="oleic181N9" class="form-control" placeholder="Oleic 18 1 n 9" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="linoleic182N6"> Linoleic 18 2 n 6: </label>
									<input type="text" id="linoleic182N6" name="linoleic182N6" class="form-control" placeholder="Linoleic 18 2 n 6" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="linolenic183N3"> Linolenic 18 3 n 3: </label>
									<input type="text" id="linolenic183N3" name="linolenic183N3" class="form-control" placeholder="Linolenic 18 3 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="arachidonic204N6"> Arachidonic 20 4 n 6: </label>
									<input type="text" id="arachidonic204N6" name="arachidonic204N6" class="form-control" placeholder="Arachidonic 20 4 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ePA205N3"> EPA 20 5 n 3: </label>
									<input type="text" id="ePA205N3" name="ePA205N3" class="form-control" placeholder="EPA 20 5 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dHA226N3"> DHA 22 6 n 3: </label>
									<input type="text" id="dHA226N3" name="dHA226N3" class="form-control" placeholder="DHA 22 6 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ePADHA"> EPA DHA: </label>
									<input type="text" id="ePADHA" name="ePADHA" class="form-control" placeholder="EPA DHA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sAFA"> SAFA: </label>
									<input type="text" id="sAFA" name="sAFA" class="form-control" placeholder="SAFA" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mUFA"> MUFA: </label>
									<input type="text" id="mUFA" name="mUFA" class="form-control" placeholder="MUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pUFA"> PUFA: </label>
									<input type="text" id="pUFA" name="pUFA" class="form-control" placeholder="PUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumN3"> Sum n 3: </label>
									<input type="text" id="sumN3" name="sumN3" class="form-control" placeholder="Sum n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumN6"> Sum n 6: </label>
									<input type="text" id="sumN6" name="sumN6" class="form-control" placeholder="Sum n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="phospholipids"> Phospholipids: </label>
									<input type="text" id="phospholipids" name="phospholipids" class="form-control" placeholder="Phospholipids" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cholesterol"> Cholesterol: </label>
									<input type="number" id="cholesterol" name="cholesterol" class="form-control" placeholder="Cholesterol" maxlength="5" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="plantSterols"> Plant sterols: </label>
									<input type="number" id="plantSterols" name="plantSterols" class="form-control" placeholder="Plant sterols" maxlength="5" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff182N6"> Coeff 18 2 n 6: </label>
									<input type="text" id="coeff182N6" name="coeff182N6" class="form-control" placeholder="Coeff 18 2 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff183N3"> Coeff 18 3 n 3: </label>
									<input type="text" id="coeff183N3" name="coeff183N3" class="form-control" placeholder="Coeff 18 3 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff204N6"> Coeff 20 4 n 6: </label>
									<input type="text" id="coeff204N6" name="coeff204N6" class="form-control" placeholder="Coeff 20 4 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff205N3"> Coeff 20 5 n 3: </label>
									<input type="text" id="coeff205N3" name="coeff205N3" class="form-control" placeholder="Coeff 20 5 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff226N3"> Coeff 22 6 n 3: </label>
									<input type="text" id="coeff226N3" name="coeff226N3" class="form-control" placeholder="Coeff 22 6 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffSAFA"> Coeff SAFA: </label>
									<input type="text" id="coeffSAFA" name="coeffSAFA" class="form-control" placeholder="Coeff SAFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffMUFA"> Coeff MUFA: </label>
									<input type="text" id="coeffMUFA" name="coeffMUFA" class="form-control" placeholder="Coeff MUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffPUFA"> Coeff PUFA: </label>
									<input type="text" id="coeffPUFA" name="coeffPUFA" class="form-control" placeholder="Coeff PUFA" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aflatoxinB"> Aflatoxin B: </label>
									<input type="text" id="aflatoxinB" name="aflatoxinB" class="form-control" placeholder="Aflatoxin B" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="deoxynivalenolDON"> Deoxynivalenol DON: </label>
									<input type="number" id="deoxynivalenolDON" name="deoxynivalenolDON" class="form-control" placeholder="Deoxynivalenol DON" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="zeralenoneZON"> Zeralenone ZON: </label>
									<input type="text" id="zeralenoneZON" name="zeralenoneZON" class="form-control" placeholder="Zeralenone ZON" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="fumonicinFUM"> Fumonicin FUM: </label>
									<input type="number" id="fumonicinFUM" name="fumonicinFUM" class="form-control" placeholder="Fumonicin FUM" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="antiTrypsicFactors"> Anti trypsic factors: </label>
									<input type="text" id="antiTrypsicFactors" name="antiTrypsicFactors" class="form-control" placeholder="Anti trypsic factors" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="gossypol"> Gossypol: </label>
									<input type="text" id="gossypol" name="gossypol" class="form-control" placeholder="Gossypol" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phyticAcid"> Phytic Acid: </label>
									<input type="text" id="phyticAcid" name="phyticAcid" class="form-control" placeholder="Phytic Acid" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="glucosinolates"> Glucosinolates: </label>
									<input type="text" id="glucosinolates" name="glucosinolates" class="form-control" placeholder="Glucosinolates" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sinapine"> Sinapine: </label>
									<input type="text" id="sinapine" name="sinapine" class="form-control" placeholder="Sinapine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="tannins"> Tannins: </label>
									<input type="text" id="tannins" name="tannins" class="form-control" placeholder="Tannins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="lectins"> Lectins: </label>
									<input type="text" id="lectins" name="lectins" class="form-control" placeholder="Lectins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cyanogens"> Cyanogens: </label>
									<input type="text" id="cyanogens" name="cyanogens" class="form-control" placeholder="Cyanogens" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pCBs"> PCBs: </label>
									<input type="text" id="pCBs" name="pCBs" class="form-control" placeholder="PCBs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dioxins"> Dioxins: </label>
									<input type="text" id="dioxins" name="dioxins" class="form-control" placeholder="Dioxins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="soyasaponins"> Soyasaponins: </label>
									<input type="text" id="soyasaponins" name="soyasaponins" class="form-control" placeholder="Soyasaponins" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="isoflavones"> Isoflavones: </label>
									<input type="text" id="isoflavones" name="isoflavones" class="form-control" placeholder="Isoflavones" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCDMPorcine"> SIDC DM porcine: </label>
									<input type="number" id="sIDCDMPorcine" name="sIDCDMPorcine" class="form-control" placeholder="SIDC DM porcine" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCPPorcine"> SIDC CP porcine: </label>
									<input type="number" id="sIDCCPPorcine" name="sIDCCPPorcine" class="form-control" placeholder="SIDC CP porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCArgPorcine"> SIDC Arg porcine: </label>
									<input type="number" id="sIDCArgPorcine" name="sIDCArgPorcine" class="form-control" placeholder="SIDC Arg porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCHisPorcine"> SIDC His porcine: </label>
									<input type="number" id="sIDCHisPorcine" name="sIDCHisPorcine" class="form-control" placeholder="SIDC His porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCIlePorcine"> SIDC Ile porcine: </label>
									<input type="number" id="sIDCIlePorcine" name="sIDCIlePorcine" class="form-control" placeholder="SIDC Ile porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLeuPorcine"> SIDC Leu porcine: </label>
									<input type="number" id="sIDCLeuPorcine" name="sIDCLeuPorcine" class="form-control" placeholder="SIDC Leu porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLysPorcine"> SIDC Lys porcine: </label>
									<input type="number" id="sIDCLysPorcine" name="sIDCLysPorcine" class="form-control" placeholder="SIDC Lys porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCMetPorcine"> SIDC Met porcine: </label>
									<input type="number" id="sIDCMetPorcine" name="sIDCMetPorcine" class="form-control" placeholder="SIDC Met porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCPhePorcine"> SIDC Phe porcine: </label>
									<input type="number" id="sIDCPhePorcine" name="sIDCPhePorcine" class="form-control" placeholder="SIDC Phe porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCThrPorcine"> SIDC Thr porcine: </label>
									<input type="number" id="sIDCThrPorcine" name="sIDCThrPorcine" class="form-control" placeholder="SIDC Thr porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTrpPorcine"> SIDC Trp porcine: </label>
									<input type="number" id="sIDCTrpPorcine" name="sIDCTrpPorcine" class="form-control" placeholder="SIDC Trp porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCValPorcine"> SIDC Val porcine: </label>
									<input type="number" id="sIDCValPorcine" name="sIDCValPorcine" class="form-control" placeholder="SIDC Val porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCysPorcine"> SIDC Cys porcine: </label>
									<input type="number" id="sIDCCysPorcine" name="sIDCCysPorcine" class="form-control" placeholder="SIDC Cys porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTyrPorcine"> SIDC Tyr porcine: </label>
									<input type="number" id="sIDCTyrPorcine" name="sIDCTyrPorcine" class="form-control" placeholder="SIDC Tyr porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCDMPoultry"> SIDC DM poultry: </label>
									<input type="number" id="sIDCDMPoultry" name="sIDCDMPoultry" class="form-control" placeholder="SIDC DM poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCPPoultry"> SIDC CP poultry: </label>
									<input type="number" id="sIDCCPPoultry" name="sIDCCPPoultry" class="form-control" placeholder="SIDC CP poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCArgPoultry"> SIDC Arg poultry: </label>
									<input type="number" id="sIDCArgPoultry" name="sIDCArgPoultry" class="form-control" placeholder="SIDC Arg poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCHisPoultry"> SIDC His poultry: </label>
									<input type="number" id="sIDCHisPoultry" name="sIDCHisPoultry" class="form-control" placeholder="SIDC His poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCIlePoultry"> SIDC Ile poultry: </label>
									<input type="number" id="sIDCIlePoultry" name="sIDCIlePoultry" class="form-control" placeholder="SIDC Ile poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLeuPoultry"> SIDC Leu poultry: </label>
									<input type="number" id="sIDCLeuPoultry" name="sIDCLeuPoultry" class="form-control" placeholder="SIDC Leu poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLysPoultry"> SIDC Lys poultry: </label>
									<input type="number" id="sIDCLysPoultry" name="sIDCLysPoultry" class="form-control" placeholder="SIDC Lys poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCMetPoultry"> SIDC Met poultry: </label>
									<input type="number" id="sIDCMetPoultry" name="sIDCMetPoultry" class="form-control" placeholder="SIDC Met poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCPhePoultry"> SIDC Phe poultry: </label>
									<input type="number" id="sIDCPhePoultry" name="sIDCPhePoultry" class="form-control" placeholder="SIDC Phe poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCThrPoultry"> SIDC Thr poultry: </label>
									<input type="number" id="sIDCThrPoultry" name="sIDCThrPoultry" class="form-control" placeholder="SIDC Thr poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTrpPoultry"> SIDC Trp poultry: </label>
									<input type="number" id="sIDCTrpPoultry" name="sIDCTrpPoultry" class="form-control" placeholder="SIDC Trp poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCValPoultry"> SIDC Val poultry: </label>
									<input type="number" id="sIDCValPoultry" name="sIDCValPoultry" class="form-control" placeholder="SIDC Val poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCysPoultry"> SIDC Cys poultry: </label>
									<input type="number" id="sIDCCysPoultry" name="sIDCCysPoultry" class="form-control" placeholder="SIDC Cys poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTyrPoultry"> SIDC Tyr poultry: </label>
									<input type="number" id="sIDCTyrPoultry" name="sIDCTyrPoultry" class="form-control" placeholder="SIDC Tyr poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDArgPorcine"> SID Arg porcine: </label>
									<input type="text" id="sIDArgPorcine" name="sIDArgPorcine" class="form-control" placeholder="SID Arg porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDHisPorcine"> SID His porcine: </label>
									<input type="text" id="sIDHisPorcine" name="sIDHisPorcine" class="form-control" placeholder="SID His porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDIlePorcine"> SID Ile porcine: </label>
									<input type="text" id="sIDIlePorcine" name="sIDIlePorcine" class="form-control" placeholder="SID Ile porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLeuPorcine"> SID Leu porcine: </label>
									<input type="text" id="sIDLeuPorcine" name="sIDLeuPorcine" class="form-control" placeholder="SID Leu porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLysPorcine"> SID Lys porcine: </label>
									<input type="text" id="sIDLysPorcine" name="sIDLysPorcine" class="form-control" placeholder="SID Lys porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDMetPorcine"> SID Met porcine: </label>
									<input type="text" id="sIDMetPorcine" name="sIDMetPorcine" class="form-control" placeholder="SID Met porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDPhePorcine"> SID Phe porcine: </label>
									<input type="text" id="sIDPhePorcine" name="sIDPhePorcine" class="form-control" placeholder="SID Phe porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDThrPorcine"> SID Thr porcine: </label>
									<input type="text" id="sIDThrPorcine" name="sIDThrPorcine" class="form-control" placeholder="SID Thr porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTrpPorcine"> SID Trp porcine: </label>
									<input type="text" id="sIDTrpPorcine" name="sIDTrpPorcine" class="form-control" placeholder="SID Trp porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDValPorcine"> SID Val porcine: </label>
									<input type="text" id="sIDValPorcine" name="sIDValPorcine" class="form-control" placeholder="SID Val porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCysPorcine"> SID Cys porcine: </label>
									<input type="text" id="sIDCysPorcine" name="sIDCysPorcine" class="form-control" placeholder="SID Cys porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTyrPorcine"> SID Tyr porcine: </label>
									<input type="text" id="sIDTyrPorcine" name="sIDTyrPorcine" class="form-control" placeholder="SID Tyr porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDArgPoultry"> SID Arg poultry: </label>
									<input type="text" id="sIDArgPoultry" name="sIDArgPoultry" class="form-control" placeholder="SID Arg poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDHisPoultry"> SID His poultry: </label>
									<input type="text" id="sIDHisPoultry" name="sIDHisPoultry" class="form-control" placeholder="SID His poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDIlePoultry"> SID Ile poultry: </label>
									<input type="text" id="sIDIlePoultry" name="sIDIlePoultry" class="form-control" placeholder="SID Ile poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLeuPoultry"> SID Leu poultry: </label>
									<input type="text" id="sIDLeuPoultry" name="sIDLeuPoultry" class="form-control" placeholder="SID Leu poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLysPoultry"> SID Lys poultry: </label>
									<input type="text" id="sIDLysPoultry" name="sIDLysPoultry" class="form-control" placeholder="SID Lys poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDMetPoultry"> SID Met poultry: </label>
									<input type="text" id="sIDMetPoultry" name="sIDMetPoultry" class="form-control" placeholder="SID Met poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDPhePoultry"> SID Phe poultry: </label>
									<input type="text" id="sIDPhePoultry" name="sIDPhePoultry" class="form-control" placeholder="SID Phe poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDThrPoultry"> SID Thr poultry: </label>
									<input type="text" id="sIDThrPoultry" name="sIDThrPoultry" class="form-control" placeholder="SID Thr poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTrpPoultry"> SID Trp poultry: </label>
									<input type="text" id="sIDTrpPoultry" name="sIDTrpPoultry" class="form-control" placeholder="SID Trp poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDValPoultry"> SID Val poultry: </label>
									<input type="text" id="sIDValPoultry" name="sIDValPoultry" class="form-control" placeholder="SID Val poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCysPoultry"> SID Cys poultry: </label>
									<input type="text" id="sIDCysPoultry" name="sIDCysPoultry" class="form-control" placeholder="SID Cys poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTyrPoultry"> SID Tyr poultry: </label>
									<input type="text" id="sIDTyrPoultry" name="sIDTyrPoultry" class="form-control" placeholder="SID Tyr poultry" >
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
	<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog"
		aria-hidden="true">
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
									<label for="ingCode"> Ing Code: </label>
									<input type="number" id="ingCode" name="ingCode" class="form-control" placeholder="Ing Code" maxlength="5" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ingDescrE"> Ing Descr E: </label>
									<input type="text" id="ingDescrE" name="ingDescrE" class="form-control" placeholder="Ing Descr E" maxlength="60" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dryMatter"> Dry Matter: </label>
									<input type="text" id="dryMatter" name="dryMatter" class="form-control" placeholder="Dry Matter" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="moisture"> Moisture: </label>
									<input type="text" id="moisture" name="moisture" class="form-control" placeholder="Moisture" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeProtein"> Crude Protein: </label>
									<input type="text" id="crudeProtein" name="crudeProtein" class="form-control" placeholder="Crude Protein" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeLipids"> Crude Lipids: </label>
									<input type="text" id="crudeLipids" name="crudeLipids" class="form-control" placeholder="Crude Lipids" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="crudeFibre"> Crude Fibre: </label>
									<input type="text" id="crudeFibre" name="crudeFibre" class="form-control" placeholder="Crude Fibre" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ash"> Ash: </label>
									<input type="text" id="ash" name="ash" class="form-control" placeholder="Ash" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nFE"> NFE: </label>
									<input type="text" id="nFE" name="nFE" class="form-control" placeholder="NFE" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nDF"> NDF: </label>
									<input type="text" id="nDF" name="nDF" class="form-control" placeholder="NDF" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDF"> ADF: </label>
									<input type="text" id="aDF" name="aDF" class="form-control" placeholder="ADF" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="totalCHO"> Total CHO: </label>
									<input type="text" id="totalCHO" name="totalCHO" class="form-control" placeholder="Total CHO" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="starch"> Starch: </label>
									<input type="text" id="starch" name="starch" class="form-control" placeholder="Starch" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sugars"> Sugars: </label>
									<input type="text" id="sugars" name="sugars" class="form-control" placeholder="Sugars" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="grossEnergyMJ"> Gross Energy MJ: </label>
									<input type="text" id="grossEnergyMJ" name="grossEnergyMJ" class="form-control" placeholder="Gross Energy MJ" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="grossEnergyKcal"> Gross energy Kcal: </label>
									<input type="number" id="grossEnergyKcal" name="grossEnergyKcal" class="form-control" placeholder="Gross energy Kcal" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEFishCarni"> DE Fish Carni: </label>
									<input type="number" id="dEFishCarni" name="dEFishCarni" class="form-control" placeholder="DE Fish Carni" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEFishOmni"> DE Fish Omni: </label>
									<input type="number" id="dEFishOmni" name="dEFishOmni" class="form-control" placeholder="DE Fish Omni" maxlength="4" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dECarp"> DE Carp: </label>
									<input type="number" id="dECarp" name="dECarp" class="form-control" placeholder="DE Carp" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEShrimp"> DE Shrimp: </label>
									<input type="number" id="dEShrimp" name="dEShrimp" class="form-control" placeholder="DE Shrimp" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEPorcine"> DE Porcine: </label>
									<input type="text" id="dEPorcine" name="dEPorcine" class="form-control" placeholder="DE Porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dEPoultry"> DE Poultry: </label>
									<input type="text" id="dEPoultry" name="dEPoultry" class="form-control" placeholder="DE Poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEFish"> ME Fish: </label>
									<input type="number" id="mEFish" name="mEFish" class="form-control" placeholder="ME Fish" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphFishCarni"> ME Guelph Fish Carni: </label>
									<input type="text" id="mEGuelphFishCarni" name="mEGuelphFishCarni" class="form-control" placeholder="ME Guelph Fish Carni" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphFishOmni"> ME Guelph Fish Omni: </label>
									<input type="text" id="mEGuelphFishOmni" name="mEGuelphFishOmni" class="form-control" placeholder="ME Guelph Fish Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphCarp"> ME Guelph Carp: </label>
									<input type="text" id="mEGuelphCarp" name="mEGuelphCarp" class="form-control" placeholder="ME Guelph Carp" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEGuelphShrimp"> ME Guelph Shrimp: </label>
									<input type="text" id="mEGuelphShrimp" name="mEGuelphShrimp" class="form-control" placeholder="ME Guelph Shrimp" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEPoultry"> ME Poultry: </label>
									<input type="text" id="mEPoultry" name="mEPoultry" class="form-control" placeholder="ME Poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="mEPorcine"> ME Porcine: </label>
									<input type="text" id="mEPorcine" name="mEPorcine" class="form-control" placeholder="ME Porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="arginine"> Arginine: </label>
									<input type="text" id="arginine" name="arginine" class="form-control" placeholder="Arginine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="histidine"> Histidine: </label>
									<input type="text" id="histidine" name="histidine" class="form-control" placeholder="Histidine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="isoleucine"> Isoleucine: </label>
									<input type="text" id="isoleucine" name="isoleucine" class="form-control" placeholder="Isoleucine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="leucine"> Leucine: </label>
									<input type="text" id="leucine" name="leucine" class="form-control" placeholder="Leucine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="lysine"> Lysine: </label>
									<input type="text" id="lysine" name="lysine" class="form-control" placeholder="Lysine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="methionine"> Methionine: </label>
									<input type="text" id="methionine" name="methionine" class="form-control" placeholder="Methionine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="phenylalanine"> Phenylalanine: </label>
									<input type="text" id="phenylalanine" name="phenylalanine" class="form-control" placeholder="Phenylalanine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="threonine"> Threonine: </label>
									<input type="text" id="threonine" name="threonine" class="form-control" placeholder="Threonine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tryptophan"> Tryptophan: </label>
									<input type="text" id="tryptophan" name="tryptophan" class="form-control" placeholder="Tryptophan" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="valine"> Valine: </label>
									<input type="text" id="valine" name="valine" class="form-control" placeholder="Valine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cystine"> Cystine: </label>
									<input type="text" id="cystine" name="cystine" class="form-control" placeholder="Cystine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tSAAMetCys"> TSAA Met Cys: </label>
									<input type="text" id="tSAAMetCys" name="tSAAMetCys" class="form-control" placeholder="TSAA Met Cys" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tyrosine"> Tyrosine: </label>
									<input type="text" id="tyrosine" name="tyrosine" class="form-control" placeholder="Tyrosine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pheTyr"> Phe Tyr: </label>
									<input type="text" id="pheTyr" name="pheTyr" class="form-control" placeholder="Phe Tyr" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="glutamic"> Glutamic: </label>
									<input type="text" id="glutamic" name="glutamic" class="form-control" placeholder="Glutamic" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aspartic"> Aspartic: </label>
									<input type="text" id="aspartic" name="aspartic" class="form-control" placeholder="Aspartic" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="glycine"> Glycine: </label>
									<input type="text" id="glycine" name="glycine" class="form-control" placeholder="Glycine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="serine"> Serine: </label>
									<input type="text" id="serine" name="serine" class="form-control" placeholder="Serine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="alanine"> Alanine: </label>
									<input type="text" id="alanine" name="alanine" class="form-control" placeholder="Alanine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumEAAs"> Sum EAAs: </label>
									<input type="text" id="sumEAAs" name="sumEAAs" class="form-control" placeholder="Sum EAAs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumNEAAs"> Sum NEAAs: </label>
									<input type="text" id="sumNEAAs" name="sumNEAAs" class="form-control" placeholder="Sum NEAAs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="taurine"> Taurine: </label>
									<input type="text" id="taurine" name="taurine" class="form-control" placeholder="Taurine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="argCoeff"> Arg Coeff: </label>
									<input type="text" id="argCoeff" name="argCoeff" class="form-control" placeholder="Arg Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="hisCoeff"> His Coeff: </label>
									<input type="text" id="hisCoeff" name="hisCoeff" class="form-control" placeholder="His Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ileCoeff"> Ile Coeff: </label>
									<input type="text" id="ileCoeff" name="ileCoeff" class="form-control" placeholder="Ile Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="leuCoeff"> Leu Coeff: </label>
									<input type="text" id="leuCoeff" name="leuCoeff" class="form-control" placeholder="Leu Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="lysCoeff"> Lys Coeff: </label>
									<input type="text" id="lysCoeff" name="lysCoeff" class="form-control" placeholder="Lys Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="metCoeff"> Met Coeff: </label>
									<input type="text" id="metCoeff" name="metCoeff" class="form-control" placeholder="Met Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pheCoeff"> Phe Coeff: </label>
									<input type="text" id="pheCoeff" name="pheCoeff" class="form-control" placeholder="Phe Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="thrCoeff"> Thr Coeff: </label>
									<input type="text" id="thrCoeff" name="thrCoeff" class="form-control" placeholder="Thr Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="trpCoeff"> Trp Coeff: </label>
									<input type="text" id="trpCoeff" name="trpCoeff" class="form-control" placeholder="Trp Coeff" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="valCoeff"> Val Coeff: </label>
									<input type="text" id="valCoeff" name="valCoeff" class="form-control" placeholder="Val Coeff" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digArgFish"> Dig Arg fish: </label>
									<input type="text" id="digArgFish" name="digArgFish" class="form-control" placeholder="Dig Arg fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digHisFish"> Dig His fish: </label>
									<input type="text" id="digHisFish" name="digHisFish" class="form-control" placeholder="Dig His fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digIleFish"> Dig Ile fish: </label>
									<input type="text" id="digIleFish" name="digIleFish" class="form-control" placeholder="Dig Ile fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLeuFish"> Dig Leu fish: </label>
									<input type="text" id="digLeuFish" name="digLeuFish" class="form-control" placeholder="Dig Leu fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLysFish"> Dig Lys fish: </label>
									<input type="text" id="digLysFish" name="digLysFish" class="form-control" placeholder="Dig Lys fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digMetFish"> Dig Met fish: </label>
									<input type="text" id="digMetFish" name="digMetFish" class="form-control" placeholder="Dig Met fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPheFish"> Dig Phe fish: </label>
									<input type="text" id="digPheFish" name="digPheFish" class="form-control" placeholder="Dig Phe fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digThrFish"> Dig Thr fish: </label>
									<input type="text" id="digThrFish" name="digThrFish" class="form-control" placeholder="Dig Thr fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTrpFish"> Dig Trp fish: </label>
									<input type="text" id="digTrpFish" name="digTrpFish" class="form-control" placeholder="Dig Trp fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digValFish"> Dig Val fish: </label>
									<input type="text" id="digValFish" name="digValFish" class="form-control" placeholder="Dig Val fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digCysFish"> Dig Cys fish: </label>
									<input type="text" id="digCysFish" name="digCysFish" class="form-control" placeholder="Dig Cys fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTSAAMetCys"> Dig TSAA Met Cys: </label>
									<input type="text" id="digTSAAMetCys" name="digTSAAMetCys" class="form-control" placeholder="Dig TSAA Met Cys" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTyrFish"> Dig Tyr fish: </label>
									<input type="text" id="digTyrFish" name="digTyrFish" class="form-control" placeholder="Dig Tyr fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="calcium"> Calcium: </label>
									<input type="text" id="calcium" name="calcium" class="form-control" placeholder="Calcium" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phosphorus"> Phosphorus: </label>
									<input type="text" id="phosphorus" name="phosphorus" class="form-control" placeholder="Phosphorus" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="caCoeff"> Ca Coeff: </label>
									<input type="number" id="caCoeff" name="caCoeff" class="form-control" placeholder="Ca Coeff" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pCoeff"> P coeff: </label>
									<input type="number" id="pCoeff" name="pCoeff" class="form-control" placeholder="P coeff" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phytateP"> Phytate P: </label>
									<input type="text" id="phytateP" name="phytateP" class="form-control" placeholder="Phytate P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="boneP"> Bone P: </label>
									<input type="text" id="boneP" name="boneP" class="form-control" placeholder="Bone P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cellularP"> Cellular P: </label>
									<input type="text" id="cellularP" name="cellularP" class="form-control" placeholder="Cellular P" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="monobasicP"> Monobasic P: </label>
									<input type="text" id="monobasicP" name="monobasicP" class="form-control" placeholder="Monobasic P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dibasicP"> Dibasic P: </label>
									<input type="text" id="dibasicP" name="dibasicP" class="form-control" placeholder="Dibasic P" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="tribasicP"> Tribasic P: </label>
									<input type="text" id="tribasicP" name="tribasicP" class="form-control" placeholder="Tribasic P" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPCarni"> Dig P Carni: </label>
									<input type="text" id="digPCarni" name="digPCarni" class="form-control" placeholder="Dig P Carni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPOmni"> Dig P Omni: </label>
									<input type="text" id="digPOmni" name="digPOmni" class="form-control" placeholder="Dig P Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPCarp"> Dig P Carp: </label>
									<input type="text" id="digPCarp" name="digPCarp" class="form-control" placeholder="Dig P Carp" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digPShrimp"> Dig P Shrimp: </label>
									<input type="text" id="digPShrimp" name="digPShrimp" class="form-control" placeholder="Dig P Shrimp" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sodium"> Sodium: </label>
									<input type="text" id="sodium" name="sodium" class="form-control" placeholder="Sodium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="chlorine"> Chlorine: </label>
									<input type="text" id="chlorine" name="chlorine" class="form-control" placeholder="Chlorine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="potassium"> Potassium: </label>
									<input type="text" id="potassium" name="potassium" class="form-control" placeholder="Potassium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="magnesium"> Magnesium: </label>
									<input type="text" id="magnesium" name="magnesium" class="form-control" placeholder="Magnesium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sulfur"> Sulfur: </label>
									<input type="text" id="sulfur" name="sulfur" class="form-control" placeholder="Sulfur" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="copper"> Copper: </label>
									<input type="text" id="copper" name="copper" class="form-control" placeholder="Copper" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="iron"> Iron: </label>
									<input type="text" id="iron" name="iron" class="form-control" placeholder="Iron" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="manganese"> Manganese: </label>
									<input type="text" id="manganese" name="manganese" class="form-control" placeholder="Manganese" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="selenium"> Selenium: </label>
									<input type="text" id="selenium" name="selenium" class="form-control" placeholder="Selenium" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="zinc"> Zinc: </label>
									<input type="text" id="zinc" name="zinc" class="form-control" placeholder="Zinc" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="iodine"> Iodine: </label>
									<input type="text" id="iodine" name="iodine" class="form-control" placeholder="Iodine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cobalt"> Cobalt: </label>
									<input type="text" id="cobalt" name="cobalt" class="form-control" placeholder="Cobalt" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="biotinB7"> Biotin B7: </label>
									<input type="text" id="biotinB7" name="biotinB7" class="form-control" placeholder="Biotin B7" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="folicAcidB9"> Folic acid B9: </label>
									<input type="text" id="folicAcidB9" name="folicAcidB9" class="form-control" placeholder="Folic acid B9" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="niacinB3"> Niacin B3: </label>
									<input type="text" id="niacinB3" name="niacinB3" class="form-control" placeholder="Niacin B3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pantothenicAcidB5"> Pantothenic Acid B5: </label>
									<input type="text" id="pantothenicAcidB5" name="pantothenicAcidB5" class="form-control" placeholder="Pantothenic Acid B5" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pyridoxineB6"> Pyridoxine B6: </label>
									<input type="text" id="pyridoxineB6" name="pyridoxineB6" class="form-control" placeholder="Pyridoxine B6" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="riboflavinB2"> Riboflavin B2: </label>
									<input type="text" id="riboflavinB2" name="riboflavinB2" class="form-control" placeholder="Riboflavin B2" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="thiaminB1"> Thiamin B1: </label>
									<input type="text" id="thiaminB1" name="thiaminB1" class="form-control" placeholder="Thiamin B1" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminB12"> Vitamin B12: </label>
									<input type="text" id="vitaminB12" name="vitaminB12" class="form-control" placeholder="Vitamin B12" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminC"> Vitamin C: </label>
									<input type="text" id="vitaminC" name="vitaminC" class="form-control" placeholder="Vitamin C" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminA"> Vitamin A: </label>
									<input type="text" id="vitaminA" name="vitaminA" class="form-control" placeholder="Vitamin A" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminD"> Vitamin D: </label>
									<input type="text" id="vitaminD" name="vitaminD" class="form-control" placeholder="Vitamin D" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminE"> Vitamin E: </label>
									<input type="text" id="vitaminE" name="vitaminE" class="form-control" placeholder="Vitamin E" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="vitaminK"> Vitamin K: </label>
									<input type="text" id="vitaminK" name="vitaminK" class="form-control" placeholder="Vitamin K" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="choline"> Choline: </label>
									<input type="text" id="choline" name="choline" class="form-control" placeholder="Choline" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="inositol"> Inositol: </label>
									<input type="text" id="inositol" name="inositol" class="form-control" placeholder="Inositol" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="betaCarotene"> Beta Carotene: </label>
									<input type="text" id="betaCarotene" name="betaCarotene" class="form-control" placeholder="Beta Carotene" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="xanthophylls"> Xanthophylls: </label>
									<input type="number" id="xanthophylls" name="xanthophylls" class="form-control" placeholder="Xanthophylls" maxlength="4" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="antioxidant"> Antioxidant: </label>
									<input type="text" id="antioxidant" name="antioxidant" class="form-control" placeholder="Antioxidant" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCDMFish"> ADC DM fish: </label>
									<input type="number" id="aDCDMFish" name="aDCDMFish" class="form-control" placeholder="ADC DM fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCCPFish"> ADC CP fish: </label>
									<input type="number" id="aDCCPFish" name="aDCCPFish" class="form-control" placeholder="ADC CP fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLipidFish"> ADC Lipid fish: </label>
									<input type="number" id="aDCLipidFish" name="aDCLipidFish" class="form-control" placeholder="ADC Lipid fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCGEFish"> ADC GE fish: </label>
									<input type="number" id="aDCGEFish" name="aDCGEFish" class="form-control" placeholder="ADC GE fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTotalCHOFish"> ADC Total CHO fish: </label>
									<input type="number" id="aDCTotalCHOFish" name="aDCTotalCHOFish" class="form-control" placeholder="ADC Total CHO fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchFish"> ADC Starch fish: </label>
									<input type="number" id="aDCStarchFish" name="aDCStarchFish" class="form-control" placeholder="ADC Starch fish" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchCarni"> ADC Starch Carni: </label>
									<input type="number" id="aDCStarchCarni" name="aDCStarchCarni" class="form-control" placeholder="ADC Starch Carni" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCStarchOmni"> ADC Starch Omni: </label>
									<input type="number" id="aDCStarchOmni" name="aDCStarchOmni" class="form-control" placeholder="ADC Starch Omni" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digDMFish"> Dig DM fish: </label>
									<input type="text" id="digDMFish" name="digDMFish" class="form-control" placeholder="Dig DM fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digCPFish"> Dig CP fish: </label>
									<input type="text" id="digCPFish" name="digCPFish" class="form-control" placeholder="Dig CP fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digLipidFish"> Dig Lipid fish: </label>
									<input type="text" id="digLipidFish" name="digLipidFish" class="form-control" placeholder="Dig Lipid fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digGEDEFishKcal"> Dig GE DE fish Kcal: </label>
									<input type="number" id="digGEDEFishKcal" name="digGEDEFishKcal" class="form-control" placeholder="Dig GE DE fish Kcal" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digTotalCHOFish"> Dig Total CHO fish: </label>
									<input type="text" id="digTotalCHOFish" name="digTotalCHOFish" class="form-control" placeholder="Dig Total CHO fish" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchFish"> Dig Starch fish: </label>
									<input type="text" id="digStarchFish" name="digStarchFish" class="form-control" placeholder="Dig Starch fish" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchCarni"> Dig Starch carni: </label>
									<input type="text" id="digStarchCarni" name="digStarchCarni" class="form-control" placeholder="Dig Starch carni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="digStarchOmni"> Dig Starch Omni: </label>
									<input type="text" id="digStarchOmni" name="digStarchOmni" class="form-control" placeholder="Dig Starch Omni" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCArgFish"> ADC Arg fish: </label>
									<input type="number" id="aDCArgFish" name="aDCArgFish" class="form-control" placeholder="ADC Arg fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCHisFish"> ADC His fish: </label>
									<input type="number" id="aDCHisFish" name="aDCHisFish" class="form-control" placeholder="ADC His fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCIleFish"> ADC Ile fish: </label>
									<input type="number" id="aDCIleFish" name="aDCIleFish" class="form-control" placeholder="ADC Ile fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLeuFish"> ADC Leu fish: </label>
									<input type="number" id="aDCLeuFish" name="aDCLeuFish" class="form-control" placeholder="ADC Leu fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCLysFish"> ADC Lys fish: </label>
									<input type="number" id="aDCLysFish" name="aDCLysFish" class="form-control" placeholder="ADC Lys fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCMetFish"> ADC Met fish: </label>
									<input type="number" id="aDCMetFish" name="aDCMetFish" class="form-control" placeholder="ADC Met fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCPheFish"> ADC Phe fish: </label>
									<input type="number" id="aDCPheFish" name="aDCPheFish" class="form-control" placeholder="ADC Phe fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCThrFish"> ADC Thr fish: </label>
									<input type="number" id="aDCThrFish" name="aDCThrFish" class="form-control" placeholder="ADC Thr fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTrpFish"> ADC Trp fish: </label>
									<input type="number" id="aDCTrpFish" name="aDCTrpFish" class="form-control" placeholder="ADC Trp fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCValFish"> ADC Val fish: </label>
									<input type="number" id="aDCValFish" name="aDCValFish" class="form-control" placeholder="ADC Val fish" maxlength="3" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCCysFish"> ADC Cys fish: </label>
									<input type="number" id="aDCCysFish" name="aDCCysFish" class="form-control" placeholder="ADC Cys fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="aDCTyrFish"> ADC Tyr fish: </label>
									<input type="number" id="aDCTyrFish" name="aDCTyrFish" class="form-control" placeholder="ADC Tyr fish" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="palmitic160"> Palmitic 16 0: </label>
									<input type="text" id="palmitic160" name="palmitic160" class="form-control" placeholder="Palmitic 16 0" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="stearic180"> Stearic 18 0: </label>
									<input type="text" id="stearic180" name="stearic180" class="form-control" placeholder="Stearic 18 0" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="oleic181N9"> Oleic 18 1 n 9: </label>
									<input type="text" id="oleic181N9" name="oleic181N9" class="form-control" placeholder="Oleic 18 1 n 9" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="linoleic182N6"> Linoleic 18 2 n 6: </label>
									<input type="text" id="linoleic182N6" name="linoleic182N6" class="form-control" placeholder="Linoleic 18 2 n 6" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="linolenic183N3"> Linolenic 18 3 n 3: </label>
									<input type="text" id="linolenic183N3" name="linolenic183N3" class="form-control" placeholder="Linolenic 18 3 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="arachidonic204N6"> Arachidonic 20 4 n 6: </label>
									<input type="text" id="arachidonic204N6" name="arachidonic204N6" class="form-control" placeholder="Arachidonic 20 4 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ePA205N3"> EPA 20 5 n 3: </label>
									<input type="text" id="ePA205N3" name="ePA205N3" class="form-control" placeholder="EPA 20 5 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="dHA226N3"> DHA 22 6 n 3: </label>
									<input type="text" id="dHA226N3" name="dHA226N3" class="form-control" placeholder="DHA 22 6 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="ePADHA"> EPA DHA: </label>
									<input type="text" id="ePADHA" name="ePADHA" class="form-control" placeholder="EPA DHA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sAFA"> SAFA: </label>
									<input type="text" id="sAFA" name="sAFA" class="form-control" placeholder="SAFA" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="mUFA"> MUFA: </label>
									<input type="text" id="mUFA" name="mUFA" class="form-control" placeholder="MUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pUFA"> PUFA: </label>
									<input type="text" id="pUFA" name="pUFA" class="form-control" placeholder="PUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumN3"> Sum n 3: </label>
									<input type="text" id="sumN3" name="sumN3" class="form-control" placeholder="Sum n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sumN6"> Sum n 6: </label>
									<input type="text" id="sumN6" name="sumN6" class="form-control" placeholder="Sum n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="phospholipids"> Phospholipids: </label>
									<input type="text" id="phospholipids" name="phospholipids" class="form-control" placeholder="Phospholipids" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cholesterol"> Cholesterol: </label>
									<input type="number" id="cholesterol" name="cholesterol" class="form-control" placeholder="Cholesterol" maxlength="5" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="plantSterols"> Plant sterols: </label>
									<input type="number" id="plantSterols" name="plantSterols" class="form-control" placeholder="Plant sterols" maxlength="5" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff182N6"> Coeff 18 2 n 6: </label>
									<input type="text" id="coeff182N6" name="coeff182N6" class="form-control" placeholder="Coeff 18 2 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff183N3"> Coeff 18 3 n 3: </label>
									<input type="text" id="coeff183N3" name="coeff183N3" class="form-control" placeholder="Coeff 18 3 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff204N6"> Coeff 20 4 n 6: </label>
									<input type="text" id="coeff204N6" name="coeff204N6" class="form-control" placeholder="Coeff 20 4 n 6" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff205N3"> Coeff 20 5 n 3: </label>
									<input type="text" id="coeff205N3" name="coeff205N3" class="form-control" placeholder="Coeff 20 5 n 3" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeff226N3"> Coeff 22 6 n 3: </label>
									<input type="text" id="coeff226N3" name="coeff226N3" class="form-control" placeholder="Coeff 22 6 n 3" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffSAFA"> Coeff SAFA: </label>
									<input type="text" id="coeffSAFA" name="coeffSAFA" class="form-control" placeholder="Coeff SAFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffMUFA"> Coeff MUFA: </label>
									<input type="text" id="coeffMUFA" name="coeffMUFA" class="form-control" placeholder="Coeff MUFA" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="coeffPUFA"> Coeff PUFA: </label>
									<input type="text" id="coeffPUFA" name="coeffPUFA" class="form-control" placeholder="Coeff PUFA" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="aflatoxinB"> Aflatoxin B: </label>
									<input type="text" id="aflatoxinB" name="aflatoxinB" class="form-control" placeholder="Aflatoxin B" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="deoxynivalenolDON"> Deoxynivalenol DON: </label>
									<input type="number" id="deoxynivalenolDON" name="deoxynivalenolDON" class="form-control" placeholder="Deoxynivalenol DON" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="zeralenoneZON"> Zeralenone ZON: </label>
									<input type="text" id="zeralenoneZON" name="zeralenoneZON" class="form-control" placeholder="Zeralenone ZON" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="fumonicinFUM"> Fumonicin FUM: </label>
									<input type="number" id="fumonicinFUM" name="fumonicinFUM" class="form-control" placeholder="Fumonicin FUM" maxlength="4" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="antiTrypsicFactors"> Anti trypsic factors: </label>
									<input type="text" id="antiTrypsicFactors" name="antiTrypsicFactors" class="form-control" placeholder="Anti trypsic factors" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="gossypol"> Gossypol: </label>
									<input type="text" id="gossypol" name="gossypol" class="form-control" placeholder="Gossypol" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="phyticAcid"> Phytic Acid: </label>
									<input type="text" id="phyticAcid" name="phyticAcid" class="form-control" placeholder="Phytic Acid" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="glucosinolates"> Glucosinolates: </label>
									<input type="text" id="glucosinolates" name="glucosinolates" class="form-control" placeholder="Glucosinolates" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sinapine"> Sinapine: </label>
									<input type="text" id="sinapine" name="sinapine" class="form-control" placeholder="Sinapine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="tannins"> Tannins: </label>
									<input type="text" id="tannins" name="tannins" class="form-control" placeholder="Tannins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="lectins"> Lectins: </label>
									<input type="text" id="lectins" name="lectins" class="form-control" placeholder="Lectins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cyanogens"> Cyanogens: </label>
									<input type="text" id="cyanogens" name="cyanogens" class="form-control" placeholder="Cyanogens" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="pCBs"> PCBs: </label>
									<input type="text" id="pCBs" name="pCBs" class="form-control" placeholder="PCBs" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="dioxins"> Dioxins: </label>
									<input type="text" id="dioxins" name="dioxins" class="form-control" placeholder="Dioxins" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="soyasaponins"> Soyasaponins: </label>
									<input type="text" id="soyasaponins" name="soyasaponins" class="form-control" placeholder="Soyasaponins" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="isoflavones"> Isoflavones: </label>
									<input type="text" id="isoflavones" name="isoflavones" class="form-control" placeholder="Isoflavones" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCDMPorcine"> SIDC DM porcine: </label>
									<input type="number" id="sIDCDMPorcine" name="sIDCDMPorcine" class="form-control" placeholder="SIDC DM porcine" maxlength="3" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCPPorcine"> SIDC CP porcine: </label>
									<input type="number" id="sIDCCPPorcine" name="sIDCCPPorcine" class="form-control" placeholder="SIDC CP porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCArgPorcine"> SIDC Arg porcine: </label>
									<input type="number" id="sIDCArgPorcine" name="sIDCArgPorcine" class="form-control" placeholder="SIDC Arg porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCHisPorcine"> SIDC His porcine: </label>
									<input type="number" id="sIDCHisPorcine" name="sIDCHisPorcine" class="form-control" placeholder="SIDC His porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCIlePorcine"> SIDC Ile porcine: </label>
									<input type="number" id="sIDCIlePorcine" name="sIDCIlePorcine" class="form-control" placeholder="SIDC Ile porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLeuPorcine"> SIDC Leu porcine: </label>
									<input type="number" id="sIDCLeuPorcine" name="sIDCLeuPorcine" class="form-control" placeholder="SIDC Leu porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLysPorcine"> SIDC Lys porcine: </label>
									<input type="number" id="sIDCLysPorcine" name="sIDCLysPorcine" class="form-control" placeholder="SIDC Lys porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCMetPorcine"> SIDC Met porcine: </label>
									<input type="number" id="sIDCMetPorcine" name="sIDCMetPorcine" class="form-control" placeholder="SIDC Met porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCPhePorcine"> SIDC Phe porcine: </label>
									<input type="number" id="sIDCPhePorcine" name="sIDCPhePorcine" class="form-control" placeholder="SIDC Phe porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCThrPorcine"> SIDC Thr porcine: </label>
									<input type="number" id="sIDCThrPorcine" name="sIDCThrPorcine" class="form-control" placeholder="SIDC Thr porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTrpPorcine"> SIDC Trp porcine: </label>
									<input type="number" id="sIDCTrpPorcine" name="sIDCTrpPorcine" class="form-control" placeholder="SIDC Trp porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCValPorcine"> SIDC Val porcine: </label>
									<input type="number" id="sIDCValPorcine" name="sIDCValPorcine" class="form-control" placeholder="SIDC Val porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCysPorcine"> SIDC Cys porcine: </label>
									<input type="number" id="sIDCCysPorcine" name="sIDCCysPorcine" class="form-control" placeholder="SIDC Cys porcine" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTyrPorcine"> SIDC Tyr porcine: </label>
									<input type="number" id="sIDCTyrPorcine" name="sIDCTyrPorcine" class="form-control" placeholder="SIDC Tyr porcine" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCDMPoultry"> SIDC DM poultry: </label>
									<input type="number" id="sIDCDMPoultry" name="sIDCDMPoultry" class="form-control" placeholder="SIDC DM poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCPPoultry"> SIDC CP poultry: </label>
									<input type="number" id="sIDCCPPoultry" name="sIDCCPPoultry" class="form-control" placeholder="SIDC CP poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCArgPoultry"> SIDC Arg poultry: </label>
									<input type="number" id="sIDCArgPoultry" name="sIDCArgPoultry" class="form-control" placeholder="SIDC Arg poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCHisPoultry"> SIDC His poultry: </label>
									<input type="number" id="sIDCHisPoultry" name="sIDCHisPoultry" class="form-control" placeholder="SIDC His poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCIlePoultry"> SIDC Ile poultry: </label>
									<input type="number" id="sIDCIlePoultry" name="sIDCIlePoultry" class="form-control" placeholder="SIDC Ile poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLeuPoultry"> SIDC Leu poultry: </label>
									<input type="number" id="sIDCLeuPoultry" name="sIDCLeuPoultry" class="form-control" placeholder="SIDC Leu poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCLysPoultry"> SIDC Lys poultry: </label>
									<input type="number" id="sIDCLysPoultry" name="sIDCLysPoultry" class="form-control" placeholder="SIDC Lys poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCMetPoultry"> SIDC Met poultry: </label>
									<input type="number" id="sIDCMetPoultry" name="sIDCMetPoultry" class="form-control" placeholder="SIDC Met poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCPhePoultry"> SIDC Phe poultry: </label>
									<input type="number" id="sIDCPhePoultry" name="sIDCPhePoultry" class="form-control" placeholder="SIDC Phe poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCThrPoultry"> SIDC Thr poultry: </label>
									<input type="number" id="sIDCThrPoultry" name="sIDCThrPoultry" class="form-control" placeholder="SIDC Thr poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTrpPoultry"> SIDC Trp poultry: </label>
									<input type="number" id="sIDCTrpPoultry" name="sIDCTrpPoultry" class="form-control" placeholder="SIDC Trp poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCValPoultry"> SIDC Val poultry: </label>
									<input type="number" id="sIDCValPoultry" name="sIDCValPoultry" class="form-control" placeholder="SIDC Val poultry" maxlength="2" number="true" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCCysPoultry"> SIDC Cys poultry: </label>
									<input type="number" id="sIDCCysPoultry" name="sIDCCysPoultry" class="form-control" placeholder="SIDC Cys poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCTyrPoultry"> SIDC Tyr poultry: </label>
									<input type="number" id="sIDCTyrPoultry" name="sIDCTyrPoultry" class="form-control" placeholder="SIDC Tyr poultry" maxlength="2" number="true" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDArgPorcine"> SID Arg porcine: </label>
									<input type="text" id="sIDArgPorcine" name="sIDArgPorcine" class="form-control" placeholder="SID Arg porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDHisPorcine"> SID His porcine: </label>
									<input type="text" id="sIDHisPorcine" name="sIDHisPorcine" class="form-control" placeholder="SID His porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDIlePorcine"> SID Ile porcine: </label>
									<input type="text" id="sIDIlePorcine" name="sIDIlePorcine" class="form-control" placeholder="SID Ile porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLeuPorcine"> SID Leu porcine: </label>
									<input type="text" id="sIDLeuPorcine" name="sIDLeuPorcine" class="form-control" placeholder="SID Leu porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLysPorcine"> SID Lys porcine: </label>
									<input type="text" id="sIDLysPorcine" name="sIDLysPorcine" class="form-control" placeholder="SID Lys porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDMetPorcine"> SID Met porcine: </label>
									<input type="text" id="sIDMetPorcine" name="sIDMetPorcine" class="form-control" placeholder="SID Met porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDPhePorcine"> SID Phe porcine: </label>
									<input type="text" id="sIDPhePorcine" name="sIDPhePorcine" class="form-control" placeholder="SID Phe porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDThrPorcine"> SID Thr porcine: </label>
									<input type="text" id="sIDThrPorcine" name="sIDThrPorcine" class="form-control" placeholder="SID Thr porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTrpPorcine"> SID Trp porcine: </label>
									<input type="text" id="sIDTrpPorcine" name="sIDTrpPorcine" class="form-control" placeholder="SID Trp porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDValPorcine"> SID Val porcine: </label>
									<input type="text" id="sIDValPorcine" name="sIDValPorcine" class="form-control" placeholder="SID Val porcine" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCysPorcine"> SID Cys porcine: </label>
									<input type="text" id="sIDCysPorcine" name="sIDCysPorcine" class="form-control" placeholder="SID Cys porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTyrPorcine"> SID Tyr porcine: </label>
									<input type="text" id="sIDTyrPorcine" name="sIDTyrPorcine" class="form-control" placeholder="SID Tyr porcine" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDArgPoultry"> SID Arg poultry: </label>
									<input type="text" id="sIDArgPoultry" name="sIDArgPoultry" class="form-control" placeholder="SID Arg poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDHisPoultry"> SID His poultry: </label>
									<input type="text" id="sIDHisPoultry" name="sIDHisPoultry" class="form-control" placeholder="SID His poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDIlePoultry"> SID Ile poultry: </label>
									<input type="text" id="sIDIlePoultry" name="sIDIlePoultry" class="form-control" placeholder="SID Ile poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLeuPoultry"> SID Leu poultry: </label>
									<input type="text" id="sIDLeuPoultry" name="sIDLeuPoultry" class="form-control" placeholder="SID Leu poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDLysPoultry"> SID Lys poultry: </label>
									<input type="text" id="sIDLysPoultry" name="sIDLysPoultry" class="form-control" placeholder="SID Lys poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDMetPoultry"> SID Met poultry: </label>
									<input type="text" id="sIDMetPoultry" name="sIDMetPoultry" class="form-control" placeholder="SID Met poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDPhePoultry"> SID Phe poultry: </label>
									<input type="text" id="sIDPhePoultry" name="sIDPhePoultry" class="form-control" placeholder="SID Phe poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDThrPoultry"> SID Thr poultry: </label>
									<input type="text" id="sIDThrPoultry" name="sIDThrPoultry" class="form-control" placeholder="SID Thr poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTrpPoultry"> SID Trp poultry: </label>
									<input type="text" id="sIDTrpPoultry" name="sIDTrpPoultry" class="form-control" placeholder="SID Trp poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDValPoultry"> SID Val poultry: </label>
									<input type="text" id="sIDValPoultry" name="sIDValPoultry" class="form-control" placeholder="SID Val poultry" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDCysPoultry"> SID Cys poultry: </label>
									<input type="text" id="sIDCysPoultry" name="sIDCysPoultry" class="form-control" placeholder="SID Cys poultry" >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sIDTyrPoultry"> SID Tyr poultry: </label>
									<input type="text" id="sIDTyrPoultry" name="sIDTyrPoultry" class="form-control" placeholder="SID Tyr poultry" >
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://adminlte.io/themes/v3/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
	$('#data_table').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
		"ajax": {
			"url": '<?php echo base_url($controller.'/getAll') ?>',			
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
		highlight: function(element) {
			$(element).addClass('is-invalid').removeClass('is-valid');
		},
		unhighlight: function(element) {
			$(element).removeClass('is-invalid').addClass('is-valid');
		},
		errorElement: 'div ',
		errorClass: 'invalid-feedback',
		errorPlacement: function(error, element) {
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

		submitHandler: function(form) {
			
			var form = $('#add-form');
			// remove the text-danger
			$(".text-danger").remove();

			$.ajax({
				url: '<?php echo base_url($controller.'/add') ?>',						
				type: 'post',
				data: form.serialize(), // /converting the form data into array and sending it to server
				dataType: 'json',
				beforeSend: function() {
					$('#add-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
				},					
				success: function(response) {

					if (response.success === true) {

						Swal.fire({
							position: 'bottom-end',
							icon: 'success',
							title: response.messages,
							showConfirmButton: false,
							timer: 1500
						}).then(function() {
							$('#data_table').DataTable().ajax.reload(null, false).draw(false);
							$('#add-modal').modal('hide');
						})

					} else {

						if (response.messages instanceof Object) {
							$.each(response.messages, function(index, value) {
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
		url: '<?php echo base_url($controller.'/getOne') ?>',
		type: 'post',
		data: {
			id: id
		},
		dataType: 'json',
		success: function(response) {
			// reset the form 
			$("#edit-form")[0].reset();
			$(".form-control").removeClass('is-invalid').removeClass('is-valid');				
			$('#edit-modal').modal('show');	

			$("#edit-form #id").val(response.id);
			$("#edit-form #ingCode").val(response.Ing_Code);
			$("#edit-form #ingDescrE").val(response.Ing_Descr_E);
			$("#edit-form #dryMatter").val(response.Dry_Matter);
			$("#edit-form #moisture").val(response.Moisture);
			$("#edit-form #crudeProtein").val(response.Crude_Protein);
			$("#edit-form #crudeLipids").val(response.Crude_Lipids);
			$("#edit-form #crudeFibre").val(response.Crude_Fibre);
			$("#edit-form #ash").val(response.Ash);
			$("#edit-form #nFE").val(response.NFE);
			$("#edit-form #nDF").val(response.NDF);
			$("#edit-form #aDF").val(response.ADF);
			$("#edit-form #totalCHO").val(response.Total_CHO);
			$("#edit-form #starch").val(response.Starch);
			$("#edit-form #sugars").val(response.Sugars);
			$("#edit-form #grossEnergyMJ").val(response.Gross_Energy_MJ);
			$("#edit-form #grossEnergyKcal").val(response.Gross_energy_Kcal);
			$("#edit-form #dEFishCarni").val(response.DE_Fish_Carni);
			$("#edit-form #dEFishOmni").val(response.DE_Fish_Omni);
			$("#edit-form #dECarp").val(response.DE_Carp);
			$("#edit-form #dEShrimp").val(response.DE_Shrimp);
			$("#edit-form #dEPorcine").val(response.DE_Porcine);
			$("#edit-form #dEPoultry").val(response.DE_Poultry);
			$("#edit-form #mEFish").val(response.ME_Fish);
			$("#edit-form #mEGuelphFishCarni").val(response.ME_Guelph_Fish_Carni);
			$("#edit-form #mEGuelphFishOmni").val(response.ME_Guelph_Fish_Omni);
			$("#edit-form #mEGuelphCarp").val(response.ME_Guelph_Carp);
			$("#edit-form #mEGuelphShrimp").val(response.ME_Guelph_Shrimp);
			$("#edit-form #mEPoultry").val(response.ME_Poultry);
			$("#edit-form #mEPorcine").val(response.ME_Porcine);
			$("#edit-form #arginine").val(response.Arginine);
			$("#edit-form #histidine").val(response.Histidine);
			$("#edit-form #isoleucine").val(response.Isoleucine);
			$("#edit-form #leucine").val(response.Leucine);
			$("#edit-form #lysine").val(response.Lysine);
			$("#edit-form #methionine").val(response.Methionine);
			$("#edit-form #phenylalanine").val(response.Phenylalanine);
			$("#edit-form #threonine").val(response.Threonine);
			$("#edit-form #tryptophan").val(response.Tryptophan);
			$("#edit-form #valine").val(response.Valine);
			$("#edit-form #cystine").val(response.Cystine);
			$("#edit-form #tSAAMetCys").val(response.TSAA_Met_Cys);
			$("#edit-form #tyrosine").val(response.Tyrosine);
			$("#edit-form #pheTyr").val(response.Phe_Tyr);
			$("#edit-form #glutamic").val(response.Glutamic);
			$("#edit-form #aspartic").val(response.Aspartic);
			$("#edit-form #glycine").val(response.Glycine);
			$("#edit-form #serine").val(response.Serine);
			$("#edit-form #alanine").val(response.Alanine);
			$("#edit-form #sumEAAs").val(response.Sum_EAAs);
			$("#edit-form #sumNEAAs").val(response.Sum_NEAAs);
			$("#edit-form #taurine").val(response.Taurine);
			$("#edit-form #argCoeff").val(response.Arg_Coeff);
			$("#edit-form #hisCoeff").val(response.His_Coeff);
			$("#edit-form #ileCoeff").val(response.Ile_Coeff);
			$("#edit-form #leuCoeff").val(response.Leu_Coeff);
			$("#edit-form #lysCoeff").val(response.Lys_Coeff);
			$("#edit-form #metCoeff").val(response.Met_Coeff);
			$("#edit-form #pheCoeff").val(response.Phe_Coeff);
			$("#edit-form #thrCoeff").val(response.Thr_Coeff);
			$("#edit-form #trpCoeff").val(response.Trp_Coeff);
			$("#edit-form #valCoeff").val(response.Val_Coeff);
			$("#edit-form #digArgFish").val(response.Dig_Arg_fish);
			$("#edit-form #digHisFish").val(response.Dig_His_fish);
			$("#edit-form #digIleFish").val(response.Dig_Ile_fish);
			$("#edit-form #digLeuFish").val(response.Dig_Leu_fish);
			$("#edit-form #digLysFish").val(response.Dig_Lys_fish);
			$("#edit-form #digMetFish").val(response.Dig_Met_fish);
			$("#edit-form #digPheFish").val(response.Dig_Phe_fish);
			$("#edit-form #digThrFish").val(response.Dig_Thr_fish);
			$("#edit-form #digTrpFish").val(response.Dig_Trp_fish);
			$("#edit-form #digValFish").val(response.Dig_Val_fish);
			$("#edit-form #digCysFish").val(response.Dig_Cys_fish);
			$("#edit-form #digTSAAMetCys").val(response.Dig_TSAA_Met_Cys);
			$("#edit-form #digTyrFish").val(response.Dig_Tyr_fish);
			$("#edit-form #calcium").val(response.Calcium);
			$("#edit-form #phosphorus").val(response.Phosphorus);
			$("#edit-form #caCoeff").val(response.Ca_Coeff);
			$("#edit-form #pCoeff").val(response.P_coeff);
			$("#edit-form #phytateP").val(response.Phytate_P);
			$("#edit-form #boneP").val(response.Bone_P);
			$("#edit-form #cellularP").val(response.Cellular_P);
			$("#edit-form #monobasicP").val(response.Monobasic_P);
			$("#edit-form #dibasicP").val(response.Dibasic_P);
			$("#edit-form #tribasicP").val(response.Tribasic_P);
			$("#edit-form #digPCarni").val(response.Dig_P_Carni);
			$("#edit-form #digPOmni").val(response.Dig_P_Omni);
			$("#edit-form #digPCarp").val(response.Dig_P_Carp);
			$("#edit-form #digPShrimp").val(response.Dig_P_Shrimp);
			$("#edit-form #sodium").val(response.Sodium);
			$("#edit-form #chlorine").val(response.Chlorine);
			$("#edit-form #potassium").val(response.Potassium);
			$("#edit-form #magnesium").val(response.Magnesium);
			$("#edit-form #sulfur").val(response.Sulfur);
			$("#edit-form #copper").val(response.Copper);
			$("#edit-form #iron").val(response.Iron);
			$("#edit-form #manganese").val(response.Manganese);
			$("#edit-form #selenium").val(response.Selenium);
			$("#edit-form #zinc").val(response.Zinc);
			$("#edit-form #iodine").val(response.Iodine);
			$("#edit-form #cobalt").val(response.Cobalt);
			$("#edit-form #biotinB7").val(response.Biotin_B7);
			$("#edit-form #folicAcidB9").val(response.Folic_acid_B9);
			$("#edit-form #niacinB3").val(response.Niacin_B3);
			$("#edit-form #pantothenicAcidB5").val(response.Pantothenic_Acid_B5);
			$("#edit-form #pyridoxineB6").val(response.Pyridoxine_B6);
			$("#edit-form #riboflavinB2").val(response.Riboflavin_B2);
			$("#edit-form #thiaminB1").val(response.Thiamin_B1);
			$("#edit-form #vitaminB12").val(response.Vitamin_B12);
			$("#edit-form #vitaminC").val(response.Vitamin_C);
			$("#edit-form #vitaminA").val(response.Vitamin_A);
			$("#edit-form #vitaminD").val(response.Vitamin_D);
			$("#edit-form #vitaminE").val(response.Vitamin_E);
			$("#edit-form #vitaminK").val(response.Vitamin_K);
			$("#edit-form #choline").val(response.Choline);
			$("#edit-form #inositol").val(response.Inositol);
			$("#edit-form #betaCarotene").val(response.Beta_Carotene);
			$("#edit-form #xanthophylls").val(response.Xanthophylls);
			$("#edit-form #antioxidant").val(response.Antioxidant);
			$("#edit-form #aDCDMFish").val(response.ADC_DM_fish);
			$("#edit-form #aDCCPFish").val(response.ADC_CP_fish);
			$("#edit-form #aDCLipidFish").val(response.ADC_Lipid_fish);
			$("#edit-form #aDCGEFish").val(response.ADC_GE_fish);
			$("#edit-form #aDCTotalCHOFish").val(response.ADC_Total_CHO_fish);
			$("#edit-form #aDCStarchFish").val(response.ADC_Starch_fish);
			$("#edit-form #aDCStarchCarni").val(response.ADC_Starch_Carni);
			$("#edit-form #aDCStarchOmni").val(response.ADC_Starch_Omni);
			$("#edit-form #digDMFish").val(response.Dig_DM_fish);
			$("#edit-form #digCPFish").val(response.Dig_CP_fish);
			$("#edit-form #digLipidFish").val(response.Dig_Lipid_fish);
			$("#edit-form #digGEDEFishKcal").val(response.Dig_GE_DE_fish_Kcal);
			$("#edit-form #digTotalCHOFish").val(response.Dig_Total_CHO_fish);
			$("#edit-form #digStarchFish").val(response.Dig_Starch_fish);
			$("#edit-form #digStarchCarni").val(response.Dig_Starch_carni);
			$("#edit-form #digStarchOmni").val(response.Dig_Starch_Omni);
			$("#edit-form #aDCArgFish").val(response.ADC_Arg_fish);
			$("#edit-form #aDCHisFish").val(response.ADC_His_fish);
			$("#edit-form #aDCIleFish").val(response.ADC_Ile_fish);
			$("#edit-form #aDCLeuFish").val(response.ADC_Leu_fish);
			$("#edit-form #aDCLysFish").val(response.ADC_Lys_fish);
			$("#edit-form #aDCMetFish").val(response.ADC_Met_fish);
			$("#edit-form #aDCPheFish").val(response.ADC_Phe_fish);
			$("#edit-form #aDCThrFish").val(response.ADC_Thr_fish);
			$("#edit-form #aDCTrpFish").val(response.ADC_Trp_fish);
			$("#edit-form #aDCValFish").val(response.ADC_Val_fish);
			$("#edit-form #aDCCysFish").val(response.ADC_Cys_fish);
			$("#edit-form #aDCTyrFish").val(response.ADC_Tyr_fish);
			$("#edit-form #palmitic160").val(response.Palmitic_16_0);
			$("#edit-form #stearic180").val(response.Stearic_18_0);
			$("#edit-form #oleic181N9").val(response.Oleic_18_1_n_9);
			$("#edit-form #linoleic182N6").val(response.Linoleic_18_2_n_6);
			$("#edit-form #linolenic183N3").val(response.Linolenic_18_3_n_3);
			$("#edit-form #arachidonic204N6").val(response.Arachidonic_20_4_n_6);
			$("#edit-form #ePA205N3").val(response.EPA_20_5_n_3);
			$("#edit-form #dHA226N3").val(response.DHA_22_6_n_3);
			$("#edit-form #ePADHA").val(response.EPA_DHA);
			$("#edit-form #sAFA").val(response.SAFA);
			$("#edit-form #mUFA").val(response.MUFA);
			$("#edit-form #pUFA").val(response.PUFA);
			$("#edit-form #sumN3").val(response.Sum_n_3);
			$("#edit-form #sumN6").val(response.Sum_n_6);
			$("#edit-form #phospholipids").val(response.Phospholipids);
			$("#edit-form #cholesterol").val(response.Cholesterol);
			$("#edit-form #plantSterols").val(response.Plant_sterols);
			$("#edit-form #coeff182N6").val(response.Coeff_18_2_n_6);
			$("#edit-form #coeff183N3").val(response.Coeff_18_3_n_3);
			$("#edit-form #coeff204N6").val(response.Coeff_20_4_n_6);
			$("#edit-form #coeff205N3").val(response.Coeff_20_5_n_3);
			$("#edit-form #coeff226N3").val(response.Coeff_22_6_n_3);
			$("#edit-form #coeffSAFA").val(response.Coeff_SAFA);
			$("#edit-form #coeffMUFA").val(response.Coeff_MUFA);
			$("#edit-form #coeffPUFA").val(response.Coeff_PUFA);
			$("#edit-form #aflatoxinB").val(response.Aflatoxin_B);
			$("#edit-form #deoxynivalenolDON").val(response.Deoxynivalenol_DON);
			$("#edit-form #zeralenoneZON").val(response.Zeralenone_ZON);
			$("#edit-form #fumonicinFUM").val(response.Fumonicin_FUM);
			$("#edit-form #antiTrypsicFactors").val(response.Anti_trypsic_factors);
			$("#edit-form #gossypol").val(response.Gossypol);
			$("#edit-form #phyticAcid").val(response.Phytic_Acid);
			$("#edit-form #glucosinolates").val(response.Glucosinolates);
			$("#edit-form #sinapine").val(response.Sinapine);
			$("#edit-form #tannins").val(response.Tannins);
			$("#edit-form #lectins").val(response.Lectins);
			$("#edit-form #cyanogens").val(response.Cyanogens);
			$("#edit-form #pCBs").val(response.PCBs);
			$("#edit-form #dioxins").val(response.Dioxins);
			$("#edit-form #soyasaponins").val(response.Soyasaponins);
			$("#edit-form #isoflavones").val(response.Isoflavones);
			$("#edit-form #sIDCDMPorcine").val(response.SIDC_DM_porcine);
			$("#edit-form #sIDCCPPorcine").val(response.SIDC_CP_porcine);
			$("#edit-form #sIDCArgPorcine").val(response.SIDC_Arg_porcine);
			$("#edit-form #sIDCHisPorcine").val(response.SIDC_His_porcine);
			$("#edit-form #sIDCIlePorcine").val(response.SIDC_Ile_porcine);
			$("#edit-form #sIDCLeuPorcine").val(response.SIDC_Leu_porcine);
			$("#edit-form #sIDCLysPorcine").val(response.SIDC_Lys_porcine);
			$("#edit-form #sIDCMetPorcine").val(response.SIDC_Met_porcine);
			$("#edit-form #sIDCPhePorcine").val(response.SIDC_Phe_porcine);
			$("#edit-form #sIDCThrPorcine").val(response.SIDC_Thr_porcine);
			$("#edit-form #sIDCTrpPorcine").val(response.SIDC_Trp_porcine);
			$("#edit-form #sIDCValPorcine").val(response.SIDC_Val_porcine);
			$("#edit-form #sIDCCysPorcine").val(response.SIDC_Cys_porcine);
			$("#edit-form #sIDCTyrPorcine").val(response.SIDC_Tyr_porcine);
			$("#edit-form #sIDCDMPoultry").val(response.SIDC_DM_poultry);
			$("#edit-form #sIDCCPPoultry").val(response.SIDC_CP_poultry);
			$("#edit-form #sIDCArgPoultry").val(response.SIDC_Arg_poultry);
			$("#edit-form #sIDCHisPoultry").val(response.SIDC_His_poultry);
			$("#edit-form #sIDCIlePoultry").val(response.SIDC_Ile_poultry);
			$("#edit-form #sIDCLeuPoultry").val(response.SIDC_Leu_poultry);
			$("#edit-form #sIDCLysPoultry").val(response.SIDC_Lys_poultry);
			$("#edit-form #sIDCMetPoultry").val(response.SIDC_Met_poultry);
			$("#edit-form #sIDCPhePoultry").val(response.SIDC_Phe_poultry);
			$("#edit-form #sIDCThrPoultry").val(response.SIDC_Thr_poultry);
			$("#edit-form #sIDCTrpPoultry").val(response.SIDC_Trp_poultry);
			$("#edit-form #sIDCValPoultry").val(response.SIDC_Val_poultry);
			$("#edit-form #sIDCCysPoultry").val(response.SIDC_Cys_poultry);
			$("#edit-form #sIDCTyrPoultry").val(response.SIDC_Tyr_poultry);
			$("#edit-form #sIDArgPorcine").val(response.SID_Arg_porcine);
			$("#edit-form #sIDHisPorcine").val(response.SID_His_porcine);
			$("#edit-form #sIDIlePorcine").val(response.SID_Ile_porcine);
			$("#edit-form #sIDLeuPorcine").val(response.SID_Leu_porcine);
			$("#edit-form #sIDLysPorcine").val(response.SID_Lys_porcine);
			$("#edit-form #sIDMetPorcine").val(response.SID_Met_porcine);
			$("#edit-form #sIDPhePorcine").val(response.SID_Phe_porcine);
			$("#edit-form #sIDThrPorcine").val(response.SID_Thr_porcine);
			$("#edit-form #sIDTrpPorcine").val(response.SID_Trp_porcine);
			$("#edit-form #sIDValPorcine").val(response.SID_Val_porcine);
			$("#edit-form #sIDCysPorcine").val(response.SID_Cys_porcine);
			$("#edit-form #sIDTyrPorcine").val(response.SID_Tyr_porcine);
			$("#edit-form #sIDArgPoultry").val(response.SID_Arg_poultry);
			$("#edit-form #sIDHisPoultry").val(response.SID_His_poultry);
			$("#edit-form #sIDIlePoultry").val(response.SID_Ile_poultry);
			$("#edit-form #sIDLeuPoultry").val(response.SID_Leu_poultry);
			$("#edit-form #sIDLysPoultry").val(response.SID_Lys_poultry);
			$("#edit-form #sIDMetPoultry").val(response.SID_Met_poultry);
			$("#edit-form #sIDPhePoultry").val(response.SID_Phe_poultry);
			$("#edit-form #sIDThrPoultry").val(response.SID_Thr_poultry);
			$("#edit-form #sIDTrpPoultry").val(response.SID_Trp_poultry);
			$("#edit-form #sIDValPoultry").val(response.SID_Val_poultry);
			$("#edit-form #sIDCysPoultry").val(response.SID_Cys_poultry);
			$("#edit-form #sIDTyrPoultry").val(response.SID_Tyr_poultry);

			// submit the edit from 
			$.validator.setDefaults({
				highlight: function(element) {
					$(element).addClass('is-invalid').removeClass('is-valid');
				},
				unhighlight: function(element) {
					$(element).removeClass('is-invalid').addClass('is-valid');
				},
				errorElement: 'div ',
				errorClass: 'invalid-feedback',
				errorPlacement: function(error, element) {
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

				submitHandler: function(form) {
					var form = $('#edit-form');
					$(".text-danger").remove();
					$.ajax({
						url: '<?php echo base_url($controller.'/edit') ?>' ,						
						type: 'post',
						data: form.serialize(), 
						dataType: 'json',
						beforeSend: function() {
							$('#edit-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
						},								
						success: function(response) {

							if (response.success === true) {

								Swal.fire({
									position: 'bottom-end',
									icon: 'success',
									title: response.messages,
									showConfirmButton: false,
									timer: 1500
								}).then(function() {
									$('#data_table').DataTable().ajax.reload(null, false).draw(false);
									$('#edit-modal').modal('hide');
								})
								
							} else {

								if (response.messages instanceof Object) {
									$.each(response.messages, function(index, value) {
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
			url: '<?php echo base_url($controller.'/remove') ?>',
			type: 'post',
			data: {
				id: id
			},
			dataType: 'json',
			success: function(response) {

				if (response.success === true) {
					Swal.fire({
						position: 'bottom-end',
						icon: 'success',
						title: response.messages,
						showConfirmButton: false,
						timer: 1500
					}).then(function() {
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
</body>
</html>
