<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo ""; ?>" class="logo">
                            <i class="zmdi zmdi-toys icon-c-logo"></i><span>CMS<span> ADMIN</span></span>
                            <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href="#"><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline m-b-0">
                                            <li>
                                                <!-- <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="zmdi zmdi-notifications-none"></i>
                                                </a> -->
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="dropdown user-box">
                                    <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                        Hi <?php echo $this->session->userdata('username'); ?> , you login as  <?php 
                                        $rold_id = $this->session->userdata('role_id');
                                        if ($rold_id == 1 ) {
                                            echo "<strong>Super Admin</strong>  ";
                                        }else if ($rold_id == 2){
                                            echo "<strong>Admin</strong>";
                                        }
                                        else {
                                            echo "<strong>Service</strong>";
                                        } ?>
                                        <img src="<?php echo base_url('admin-assets/images/users/avatar-1.png') ?>" alt="user-img" class="img-circle user-img">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <!-- <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li> -->
                                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
