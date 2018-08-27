<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="#">
                <img src="<?= base_url('assets/img/logo.png'); ?>" class="logo" alt="" height="41" width="130">
            </a>
            <!-- END LOGO -->
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="javascript:void()" class="" id="layout-condensed-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <ul class="nav quick-section">
                   <li class="dropdown">
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="notifications">
                           <!-- <li>
                               <a href="<?= base_url('admin/account'); ?>"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
                           </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="quicklinks dropdown log-in">
                        <a onclick="adminAccountOpen()" class="pull-right " href="javascript:void(0)" id="user_options">
                            <?= $admin->name; ?>
                            <img  class="img img-circle profile-img" src="<?= base_url('assets/img/default.png'); ?>" alt=""/>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user_options">
                            <!-- <li>
                                <a href="<?= base_url('admin/account'); ?>"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
          <!-- END CHAT TOGGLER -->
        </div>
    <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<br>
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar " id="main-menu">
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <!-- BEGIN SIDEBAR MENU -->
            <ul>
                <li <?php if($active == 'tourist') echo 'class=active'; ?>> <a href="<?= base_url('admin'); ?>"><i class="fa fa-home"></i> <span class="title">Tourist</span></a></li>
                <li <?php if($active == 'spot') echo 'class=active'; ?>> <a href="<?= base_url('admin/tourist-spot'); ?>"><i class="fa fa-globe"></i> <span class="title">Spot</span></a></li>
                <li <?php if($active == 'hotel') echo 'class=active'; ?>> <a href="<?= base_url('admin/tourist-hotel'); ?>"><i class="fa fa-h-square"></i> <span class="title">Hotel</span></a></li>
                <li <?php if($active == 'hotel-booking-history') echo 'class=active'; ?>> <a href="<?= base_url('admin/tourist-hotel-booking-history'); ?>"><i class="fa fa-history"></i> <span class="title">Hotel Booking History</span></a></li>
            </ul>
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <div class="page-content">