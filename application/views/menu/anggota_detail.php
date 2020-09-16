    <!-- Begin Page Content -->
    <!-- <?php //var_dump($pengurus);?> -->
    <div class="container-fluid">
      <div class="cards-7 section gray">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
                          <img class="img-profile circle" src="<?php echo base_url('assets/img/profile/').$mbr->foto; ?>" width="100%">
                          <hr />
                          <p style="font-size: 14px; text-align: center; line-height: 80%"><b><?php echo $mbr->nama; ?></b></p>
                          <p style="font-size: 10px; text-align: center; line-height: 80%"><b><?php echo $mbr->nama_jabatan; ?></b></p>
                        </div>
                        <div class="col-md-9 detail">
                          <div class="card mb-4 py-3 border-bottom-primary">
                            <table>
                              <tr>
                                <td>&nbsp; <b>NIM</b></td>
                                <td>: <?php echo $mbr->nim; ?></td>
                              </tr>
                              <tr>
                                <td>&nbsp; <b>Tgl Lahir</b></td>
                                <td>: <?php echo $mbr->tgl_lahir; ?></td>
                              </tr>
                              <tr>
                                <td>&nbsp; <b>Alamat</b></td>
                                <td>: <?php echo $mbr->alamat; ?></td>
                              </tr>
                              <tr>
                                <td>&nbsp; <b>Telepon</b></td>
                                <td>: <?php echo $mbr->telepon; ?></td>
                              </tr>
                              <tr>
                                <td>&nbsp; <b>Email</b></td>
                                <td>: <?php echo $mbr->email; ?></td>
                              </tr>
                              <tr>
                                <td>&nbsp; <b>PJ</b></td>
                                <td>: <?php echo $mbr->penanggung_jawab; ?></td>
                              </tr>
                            </table>
                          </div>
                        </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Content Wrapper -->
   
      <!-- End of Footer -->



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