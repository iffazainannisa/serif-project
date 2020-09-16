    <!-- Begin Page Content -->
    <!-- <?php var_dump($member);?> -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: tomatoes;">
              <li class="breadcrumb-item">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/anggota','<i class="fas fa-back"></i> Anggota'); ?>
                <?php }elseif($anggota['user_level'] == 2){ ?>
                <?php echo anchor('member/anggota','<i class="fas fa-back"></i> Anggota'); ?>
                <?php }elseif($anggota['user_level'] == 3){ ?>
                <?php echo anchor('alumni/anggota','<i class="fas fa-back"></i> Anggota'); ?>
                <?php } ?>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Tahun PH</li>
            </ol>
        </nav>
      <div class="row">
      <div class="col-lg-12">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary pilih">Pilih Periode Kepengurusan <?php echo $div['nama_divisi']; ?></h4>

          </div>
          <div class="card mb-4 py-3 border-bottom-primary">
            <div class="row">
              <div class="col-md-6 animated fadeInRight">
                <img src="<?php echo base_url('assets/img/this.png') ?>" width="100%">
              </div>
              <div class="col-md-6">
                <br />
                <?php foreach ($tahun as $th) : ?>
                <?php $a ='<span class="icon text-white-50">
                          <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">'.$th->tahun.'</span>';  ?>
                <?php if($anggota['user_level'] == 1){ ?>
                  <?=anchor('admin/anggota/detail_ph/'.$th->tahun."/".$jabatan['id_jabatan'],$a,array("rel" => "bookmark", 'class'=>'btn btn-primary btn-icon-split btn-lg center pilihan'));?>
                <?php } elseif($anggota['user_level'] == 2) {?>
                  <?=anchor('member/anggota/detail_ph/'.$th->tahun."/".$jabatan['id_jabatan'],$a,array("rel" => "bookmark", 'class'=>'btn btn-primary btn-icon-split btn-lg center pilihan'));?>
                <?php } elseif($anggota['user_level'] == 3) {?>
                  <?=anchor('alumni/anggota/detail_ph/'.$th->tahun."/".$jabatan['id_jabatan'],$a,array("rel" => "bookmark", 'class'=>'btn btn-primary btn-icon-split btn-lg center pilihan'));?>
                <?php } ?>
                <br /><br />
              <?php   endforeach; ?>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
    <!-- End of Content Wrapper -->



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