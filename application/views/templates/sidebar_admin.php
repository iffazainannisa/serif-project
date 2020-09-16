<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-hmif-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3"><img class="img-profile rounded-circle" src="<?php echo base_url('assets/img/logo2.png');?>" width="100%"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item btn-nero">
                <a class="nav-link" href="<?php echo base_url('admin/home') ?>">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h6>Menu</h6>
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item btn-nero">
                <a class="nav-link" href="<?php echo base_url('admin/anggota') ?>">
                    <i class="fas fa-users"></i>
                    <span>Anggota</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item btn-nero">
                <a class="nav-link" href="<?php echo base_url('admin/proker') ?>">
                    <i class="far fa-calendar-check"></i>
                    <span>Program Kerja</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item btn-nero">
                <a class="nav-link" href="<?php echo base_url('admin/birthday') ?>">
                    <i class="fas fa-birthday-cake"></i>
                    <span>Birthday Alert</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item btn-nero">
                <a class="nav-link" href="<?php echo base_url('admin/kelola_user'); ?>">
                    <i class="far fa-address-card"></i>
                    <span>Kelola User</span></a>
            </li>

            <hr class="sidebar-divider my-0"><br />
            <!-- Divider -->

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
                <nav class="navbar navbar-expand navbar-light bg-white navbar-fixed-top topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- <div>Tahun Kepengurusan &nbsp;</div>
                    <form method="post" action="<?php echo base_url('admin'); ?>">
                    <select name="thn" class="form_input" id="pos_select">
                        <?php
                            foreach ($tahun as $th) {
                                $getTahun = $th->tahun;
                                echo '<option value ='.$getTahun.'>'.$getTahun.'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" name="submit" value="pilih">
                    </form> -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $anggota['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url('assets/img/profile/').$anggota['foto']; ?>" width=40%;>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <?php echo anchor('admin/home/edit_profile/'.$anggota['nim'], '<div class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile</div>'); ?>
                                <?php echo anchor('admin/home/lihat_pengurus/'.$anggota['nim'], '<div class="dropdown-item"><i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Kepengurusan</div>'); ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<script type="text/javascript">
$(document).ready(function() {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
});
</script>