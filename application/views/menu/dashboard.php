    <!-- Begin Page Content -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div class="container-fluid">
        <div class="halo">
          <center><img src="<?php echo base_url('assets/img/logo2.png')?>" style="width: 70%; height: auto;" class="dbo animated bounceInDown"></center>
          <hr />
          <h4 class="animated fadeInLeft">Halo, <strong><?php echo $anggota["nama"]; ?></strong></h4>
          <p class="animated fadeInLeft">Selamat Datang di DATABASE ORGANISASI HMIF UNDIP</p>
          <hr />
        </div>
        <!-- Content Row -->
        <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="
          <?php if ($anggota['user_level'] == 1){
            echo base_url('admin/anggota');
          } else if ($anggota['user_level'] == 2){
            echo base_url('member/anggota');
          } else if ($anggota['user_level'] == 3){
            echo base_url('alumni/anggota');
          }
          ?>" style="text-decoration: none;">
            <div class="card bg-success shadow h-100 py-2 home animated pulse" style="width: 100%; height: auto;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="h6 font-weight-bold text-light text-uppercase mb-1">Anggota</div>
                    <div class="h3 mb-0 font-weight-bold text-light"><?=$count_data['totalanggota']?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-4x text-light"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <!-- Earnings (Monthly) Card Example -->
          <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="
          <?php if ($anggota['user_level'] == 1){
            echo base_url('admin/proker');
          } else if ($anggota['user_level'] == 2){
            echo base_url('member/proker');
          } else if ($anggota['user_level'] == 3){
            echo base_url('alumni/proker');
          }
          ?>" style="text-decoration: none;">
            <div class="card bg-danger shadow h-100 py-2 home animated pulse" style="width: 100%; height: auto;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="h6 font-weight-bold text-light text-uppercase mb-1">Program Kerja</div>
                    <div class="h3 mb-0 font-weight-bold text-light"><?=$count_data['totalproker']?></div>
                  </div>
                  <div class="col-auto">
                    <i class="far fa-calendar-check fa-4x text-light"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <!-- Earnings (Monthly) Card Example -->
          <?php if ($anggota['user_level'] == 1){?>
          <a class="col-xl-3 col-md-6 mb-4 btn-nero" href="<?php echo base_url('admin/kelola_user') ?>" style="text-decoration: none;">
            <div class="card bg-primary shadow h-100 py-2 home animated pulse" style="width: 100%; height: auto;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="h6 font-weight-bold text-light text-uppercase mb-1">Kelola User</div>
                    <div class="h3 mb-0 font-weight-bold text-light"><?=$count_data['totaluser']?></div>
                    <div class="font-weight-bold text-light" style="font-size: 12pt;"><i>Need Confirmation</i></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-plus fa-4x text-light"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <?php } ?>

      </div>
      <!-- End of Main Content -->
    </div>


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Modal -->
    <div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    </div>