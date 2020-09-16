    <!-- Begin Page Content -->
    <!-- <?php //var_dump($pengurus);?> -->
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: tomatoes;">
              <li class="breadcrumb-item">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/birthday','<i class="fas fa-back"></i> Pilih Tahun'); ?>
                <?php }elseif($anggota['user_level'] == 2){ ?>
                <?php echo anchor('member/birthday','<i class="fas fa-back"></i> Pilih Tahun'); ?>
                <?php }elseif($anggota['user_level'] == 3){ ?>
                <?php echo anchor('alumni/birthday','<i class="fas fa-back"></i> Pilih Tahun'); ?>
                <?php } ?>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Birthday List</li>
            </ol>
        </nav>
      <div class="row">
        <div class="col-md-12">
          <h5 class="animated bounceInDown" style="background: #2E6B86; color: white; padding: 2%; text-align: center;">Birthday Group Periode <?php echo $tahun; ?></h5><br/>
          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; JANUARI
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($jan as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Januari' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>

            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; FEBRUARI
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($feb as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Februari' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>

          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; MARET
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($mar as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Maret' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>

            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; APRIL
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($apr as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' April' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>

          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; MEI
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($mei as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Mei' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; JUNI
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($jun as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Juni' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>

          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; JULI
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($jul as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Juli' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; AGUSTUS
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($agu as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Agustus' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>

          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; SEPTEMBER
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black;margin-top: -1.5%;">
                <hr />
                <?php foreach ($sep as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' September' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; OKTOBER
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($okt as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Oktober' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>

          <div class="row ultah">
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; NOVEMBER
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($nov as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' November' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
            <div class="col-md-6 animated pulse">
              <div class="alert" role="alert" style="background: #53ddfc; color: black;">
                <i class="fas fa-smile-wink"></i>&nbsp; DESEMBER
              </div>
              <div class="alert" role="alert" style="background: #879efa; color: black; margin-top: -1.5%;">
                <hr />
                <?php foreach ($des as $j) : ?>
                  <?php $tgl = date('d', strtotime($j->tgl_lahir)); ?>
                  <?php echo $tgl.' Desember' ?>&emsp; | &emsp;&emsp;<b><?php echo $j->nama; ?></b> (<?php echo $j->nama_divisi; ?>)<br />
                <?php endforeach; ?>
                <hr />
              </div>
            </div>
          </div>
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kominfo 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->



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