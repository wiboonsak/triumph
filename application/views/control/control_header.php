<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Control Backend - Triumph</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('asset/control/assets/images/favicon.ico') ?>">
        <!-- Custom box css -->
        <link href="<?php echo base_url('asset/control/plugins/custombox/css/custombox.min.css') ?>" rel="stylesheet">
        <!-- Sweet Alert css -->
         <link href="<?php echo base_url('asset/control/plugins/switchery/switchery.min.css') ?>" rel="stylesheet" />

        <script src="<?php echo base_url('asset/control/assets/js/modernizr.min.js') ?>"></script>

        <script src="<?php echo base_url('asset/control/assets/js/modernizr.min.js') ?>"></script>
        <!-- Toastr css -->
        <link href="<?php echo base_url('asset/control/plugins/jquery-toastr/jquery.toast.min.css') ?>" rel="stylesheet" />

        <!-- Sweet Alert css -->
        <link href="<?php echo base_url('asset/control/plugins/sweet-alert/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
       <!-- App css -->
        <link href="<?php echo base_url('asset/control/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a  class="logo">
                            <img src="<?php echo base_url('asset/www/images/triumph.png') ?>" alt="" height="40" class="logo-small">
                            <img src="<?php echo base_url('asset/www/images/triumph.png') ?>" alt="" height="40" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>



                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url('asset/control/assets/images/users/avatar-1.jpg') ?>" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name"><?php echo $this->session->userdata('name') ?><i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" onClick="cangePassForm()" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Change Password</span>
                                    </a>


                                    <!-- item-->
                                    <a href="<?php echo base_url('logout') ?>" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">


                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Motorcycle</a>
                                <ul class="submenu">
                                   
                                    <li><a href="<?php echo base_url('control/motocycle_category') ?>">หมวดสินค้า</a></li>
                                    <li><a href="<?php echo base_url('control/motocycle_add') ?>">เพิ่มสินค้า</a></li>
                                    <li><a href="<?php echo base_url('control/motocycle_list') ?>">รายการสินค้า</a></li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Accessories</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('control/accessories_category') ?>">หมวดสินค้า</a></li>
                                    <li><a href="<?php echo base_url('control/accessories_add') ?>">เพิ่มสินค้า</a></li>
                                    <li><a href="<?php echo base_url('control/accessories_list') ?>">รายการสินค้า</a></li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>News & Activities</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo base_url('control/news_add') ?>">เพิ่มข้อมูล</a></li>
                                            <li><a href="<?php echo base_url('control/news_list') ?>">ข้อมูล News& Activities</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>Service & Support</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo base_url('control/service_add') ?>">เพิ่มข้อมูล</a></li>
                                            <li><a href="<?php echo base_url('control/service_list') ?>">ข้อมูล Service & Support</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-fire"></i>Slide Show</a>
                                <ul class="submenu">
                                    <li >
                                        <a href="<?php echo base_url('control/slide_add') ?>">เพิ่มข้อมูล</a>
                                    </li>
                                    <li><a href="<?php echo base_url('control/slide_list') ?>">ข้อมูล Slide Show</a></li>




                                </ul>
                            </li>


                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->