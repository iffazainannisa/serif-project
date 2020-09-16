    <!-- Begin Page Content -->
    <!-- <?php //var_dump($pengurus);?> -->
    <div class="container-fluid">
        <?php if($anggota['user_level'] == 1){ ?>
        <a class="btn btn-success btn-sm right" href="<?php echo base_url('admin/anggota/tampil_edit');?>"><i class="fas fa-edit"></i> Kelola Anggota</a>
        <a class="btn btn-primary btn-sm right" href="<?php echo base_url('admin/anggota/tampil_edit_pengurus');?>"><i class="fas fa-edit"></i> Kelola Pengurus</a>
        <br /><br />
        <?php } ?>
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <div class="card mb-4 py-3 border-bottom-primary">
            <center>
            <img src="<?php echo base_url('assets/img/bagan.gif');?>" id="map-image" style="width: 4134px; max-width: 80%; height: auto;" alt="" usemap="#map" /></center>
            <map name="map">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/anggota/ph/'.'1'."/".'101','<area shape="rect" coords="1681, 133, 2421, 401" alt="ketua">') ?>
                <?php echo anchor('admin/anggota/ph/'.'1'."/".'102','<area shape="rect" coords="893, 709, 1625, 985" alt="wakil">') ?>
                <?php echo anchor('admin/anggota/sekben/'.'1'."/".'103'."/".'104','<area shape="rect" coords="763, 1173, 1491, 1445" alt="sekretaris">') ?>
                <?php echo anchor('admin/anggota/sekben/'.'1'."/".'105'."/".'106','<area shape="rect" coords="2607, 1169, 3355, 1453" alt="bendahara">') ?>
                <?php echo anchor('admin/anggota/divisi/'.'2', '<area shape="rect" coords="2107, 713, 2821, 989" alt="litbang">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'3', '<area shape="rect" coords="2897, 713, 3621, 993" alt="kominfo">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'4', '<area shape="rect" coords="105, 1081, 833, 2077" alt="diklat">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'5', '<area shape="rect" coords="889, 1797, 1617, 2069" alt="psdm">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'6', '<area shape="rect" coords="1681, 1789, 2409, 2073" alt="sosial">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'7', '<area shape="rect" coords="2447, 1797, 3171, 2065" alt="ekokeu">'); ?>
                <?php echo anchor('admin/anggota/divisi/'.'8', '<area shape="rect" coords="3267, 1789, 4003, 2061" alt="mikat">'); ?>
              <?php } elseif($anggota['user_level'] == 2) {?>
                <?php echo anchor('member/anggota/ph/'.'1'."/".'101','<area shape="rect" coords="1681, 133, 2421, 401" alt="ketua">') ?>
                <?php echo anchor('member/anggota/ph/'.'1'."/".'102','<area shape="rect" coords="893, 709, 1625, 985" alt="wakil">') ?>
                <?php echo anchor('member/anggota/sekben/'.'1'."/".'103'."/".'104','<area shape="rect" coords="763, 1173, 1491, 1445" alt="sekretaris">') ?>
                <?php echo anchor('member/anggota/sekben/'.'1'."/".'105'."/".'106','<area shape="rect" coords="2607, 1169, 3355, 1453" alt="bendahara">') ?>
                <?php echo anchor('member/anggota/divisi/'.'2', '<area shape="rect" coords="2107, 713, 2821, 989" alt="litbang">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'3', '<area shape="rect" coords="2897, 713, 3621, 993" alt="kominfo">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'4', '<area shape="rect" coords="105, 1081, 833, 2077" alt="diklat">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'5', '<area shape="rect" coords="889, 1797, 1617, 2069" alt="psdm">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'6', '<area shape="rect" coords="1681, 1789, 2409, 2073" alt="sosial">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'7', '<area shape="rect" coords="2447, 1797, 3171, 2065" alt="ekokeu">'); ?>
                <?php echo anchor('member/anggota/divisi/'.'8', '<area shape="rect" coords="3267, 1789, 4003, 2061" alt="mikat">'); ?>
              <?php } elseif($anggota['user_level'] == 3) {?>
                <?php echo anchor('alumni/anggota/ph/'.'1'."/".'101','<area shape="rect" coords="1681, 133, 2421, 401" alt="ketua">') ?>
                <?php echo anchor('alumni/anggota/ph/'.'1'."/".'102','<area shape="rect" coords="893, 709, 1625, 985" alt="wakil">') ?>
                <?php echo anchor('alumni/anggota/sekben/'.'1'."/".'103'."/".'104','<area shape="rect" coords="763, 1173, 1491, 1445" alt="sekretaris">') ?>
                <?php echo anchor('alumni/anggota/sekben/'.'1'."/".'105'."/".'106','<area shape="rect" coords="2607, 1169, 3355, 1453" alt="bendahara">') ?>
                <?php echo anchor('alumni/anggota/divisi/'.'2', '<area shape="rect" coords="2107, 713, 2821, 989" alt="litbang">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'3', '<area shape="rect" coords="2897, 713, 3621, 993" alt="kominfo">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'4', '<area shape="rect" coords="105, 1081, 833, 2077" alt="diklat">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'5', '<area shape="rect" coords="889, 1797, 1617, 2069" alt="psdm">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'6', '<area shape="rect" coords="1681, 1789, 2409, 2073" alt="sosial">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'7', '<area shape="rect" coords="2447, 1797, 3171, 2065" alt="ekokeu">'); ?>
                <?php echo anchor('alumni/anggota/divisi/'.'8', '<area shape="rect" coords="3267, 1789, 4003, 2061" alt="mikat">'); ?>
              <?php } ?>
            </map>
            <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
            <!-- <script src="http://davidjbradshaw.com/imagemap-resizer/js/imageMapResizer.min.js"></script> -->
           <script>
              jQuery(function($) {
                  $('map').imageMapResize();
              });
            </script>
          </div>
      </div>
      <div class="col-md-1"></div>
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