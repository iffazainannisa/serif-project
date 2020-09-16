    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->

      <!-- Begin Page Content -->
      <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('message');?>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary pilih"><?php echo $title;  ?></h4>
            </div>
            <div class="card-body kotak">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                      $no = 1;
                      foreach ($baru as $br) :
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $br->nim; ?></td>
                      <td><?php echo $br->nama; ?></td>
                      <td><?php echo anchor('admin/kelola_user/setuju/'.$br->nim, '<div class="btn btn-primary btn-sm"><i class="fas fa-check"></i></div>'); ?> <?php echo anchor('admin/kelola_user/batal/'.$br->nim, '<div class="btn btn-danger btn-sm"><i class="fas fa-times"></i></div>'); ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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