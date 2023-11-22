<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pike Admin - Free Bootstrap 4 Admin Template</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>templet/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/') ?>templet/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="<?= base_url('assets/') ?>templet/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/') ?>templet/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <!-- END CSS for this page -->

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left" style="color: white;">
                <!-- <a href="index.html" class="logo"><img alt="logo" src="templet/images/logo.png" /> <span>admin</span></a> -->
                <h1>BPF-1</h1>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-fw fa-question-circle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><small>Help and Support</small></h5>
                            </div>

                            <!-- item-->
                            <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Do you want custom development to integrate this theme?</b>
                                    <span>Contact Us</span>
                                </p>
                            </a>

                            <!-- item-->
                            <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                    <span>Try Pike Admin PRO</span>
                                </p>
                            </a>

                            <!-- All-->
                            <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                <i class="fa fa-link"></i> Visit Pike Admin Website
                            </a>

                        </div>
                    </li>
                    <a class="nav-item dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-black-50 small"><?= $user['nama']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/templet/images/profile/') . $user['gambar']; ?>" width="30" height="30">
                    </a>
                    <!-- <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">LOGOUT</a> -->


                    <li class="nav-item dropdown no-arrow">


                        <!-- <a class="nav-item dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/templet/images/profile/') . $user['gambar']; ?>" width="30" height="30">
                            </a>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">LOGOUT</a> -->

                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="pro-profile.html" class="dropdown-item notify-item">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                            </a>

                            <!-- item-->
                            <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- End Navigation -->


        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <?php
                        if ($user['role'] == 'Admin') { ?>



                            <li class="submenu">
                                <a class="active" href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="submenu">
                                <a href="<?= site_url('Mahasiswa/') ?>"><i class="fa fa-fw fa-area-chart"></i><span> Mahasiswa </span> </a>
                            </li>

                            <li class="submenu">
                                <a href="<?= site_url('Prodi/') ?>"><i class="fa fa-fw fa-area-chart"></i><span> Prodi </span> </a>
                            </li>
                        <?php } else { ?>

                            <li class="submenu">
                                <a class="active" href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="submenu">
                                <a href="<?= site_url('Profil/') ?>"><i class="fa fa-fw fa-area-chart"></i><span> Profile </span> </a>
                            </li>

                            <li class="submenu">
                                <a href="<?= site_url('Auth/logout') ?>"><i class="fa fa-fw fa-area-chart"></i><span> Logout </span> </a>
                            </li>


                        <?php    } ?>



                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->