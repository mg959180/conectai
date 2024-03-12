<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= SITE_ADMIN_URL ?>">
            <div class="sidebar-brand-icon">
                <!-- <i class="fas fa-laugh-wink"></i> -->
                <img src="<?= SITE_URL ?>public/front/assets/images/conect_png_logo.png" style="height:50px;width:50px;" />
            </div>
            <div class="sidebar-brand-text mx-3">Conect Ai <sup><i class="fas fa-lightbulb" aria-hidden="true"></i></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= SITE_ADMIN_URL ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= SITE_ADMIN_URL ?>orders">
                <i class="fas fa-fw fa-table"></i>
                <span>Orders</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= SITE_ADMIN_URL ?>pricing">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Pricing</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= SITE_ADMIN_URL ?>contact-enquiry">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Contact Enquiry</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Setting
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Website Setting</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Website Setting:</h6>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>settings">Main Setting</a>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>settings/general-setting">General Setting</a>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>settings/payment-info-setting">Payment Info. Setting</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Meta Data:</h6>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>meta-details">Meta Details</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Pages Data</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pages:</h6>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>blogs">Blogs</a>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>Clients">Clients</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Countries & Taxes:</h6>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>countries">Countries</a>
                    <a class="collapse-item" href="<?= SITE_ADMIN_URL ?>taxes">Taxes</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="<?= SITE_URL ?>" id="alertsDropdown" title="visit Website">
                            <i class="fas fa-globe fa-fw"></i>
                        </a>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" title="View Messages" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <?= count($recent_contact_us_data) > 0 ? '<span class="badge badge-danger badge-counter">' . count($recent_contact_us_data) . '</span>' : '' ?>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <?php if (count($recent_contact_us_data) > 0) { ?>
                                <?php foreach ($recent_contact_us_data as $cv) { ?>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><?= $cv['cmessage'] ?></div>
                                            <div class="small text-gray-500"><?= $cv['cname'] ?> on <?= change_to_custom_date($cv['cdate'], DATE_TIME_FORMAT_LONG_A) ?></div>
                                        </div>
                                    </a>
                                <?php } ?>
                                <a class="dropdown-item text-center small text-gray-500" href="<?= SITE_ADMIN_URL ?>contact-enquiry">Read More Messages</a>
                            <?php } else { ?>
                                <div class="font-weight-bold">
                                    <div class="small text-gray-500">No Messages</div>
                                </div>
                            <?php } ?>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $admin_data['s_name'] ?></span>
                            <img class="img-profile rounded-circle" src="<?= ($admin_data['pic'] ? UPLOAD_URL . 'admin/profile_images/' . $admin_data['pic'] : '#') ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= SITE_ADMIN_URL ?>auth/profile">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="<?= SITE_ADMIN_URL ?>auth/change-password">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Change Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <?php echo display_alert(); ?>