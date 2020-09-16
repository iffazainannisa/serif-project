<div class="container-fluid">

      <!-- Page Heading -->
      <p class="h4 mb-4 text-gray-800"><i class="fas fa-user-edit"></i> Edit Profile</p>
      <!-- End of Main Content -->
      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-12">
          <?php echo $this->session->flashdata('message');?>
        </div>
      </div>
      <div class="row">
        <div class="card mb-4 py-3 border-bottom-primary">
        <div class="col-lg-11">
         <?php 
         if($anggota['user_level']== 1){
          echo form_open_multipart('admin/home/update2');
         } elseif($anggota['user_level']== 2){
          echo form_open_multipart('member/home/update2');
         } elseif($anggota['user_level']== 3){
          echo form_open_multipart('alumni/home/update2');
         }
         ?>
            <?php echo form_hidden('Nimku', $mhs->nim); ?>
            <div class="form-group row">
              <div class="col-sm-2"> &nbsp;&nbsp;Foto</div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-3 foto">
                    <img src="<?php echo base_url('assets/img/profile/').$mhs->foto ; ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" name="foto" class="upload" value="<?= $mhs->foto; ?>" >
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6" style="margin-left: 17%;">
                <button type="submit" name="edit" class="btn btn-success" size="50px">Ganti Foto</button>
              </div>
            </div>
       <?php echo form_close(); ?>
         <form method="post" action="<?php 
          if($anggota['user_level']== 1){
            echo base_url('admin/home/update');
          }elseif($anggota['user_level']==2){
            echo base_url('member/home/update');
          }elseif($anggota['user_level']==3){
            echo base_url('alumni/home/update');
          }
           ?>">
            <div class="isi form-group row isiku">
              <label for="inputnim" class="col-sm-2 col-form-label"> &nbsp;&nbsp;NIM</label>
              <div class="col-sm-6">
                <input type="text" class="form-control isi" name="inputnim" placeholder="NIM" value="<?= $mhs->nim; ?>"readonly>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputnama" class="col-sm-2 col-form-label"> &nbsp;&nbsp;Nama</label>
              <div class="col-sm-6">
                <input type="text" class="form-control isi" name="inputnama" placeholder="Nama" value="<?php echo $mhs->nama; ?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputtgl" class="col-sm-2 col-form-label"> &nbsp;&nbsp;Tanggal Lahir</label>
              <div class="col-sm-6">
                <input type="date" class="form-control isi" name="inputtgl" placeholder="Tanggal Lahir" value="<?php echo $mhs->tgl_lahir;?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputalmt" class="col-sm-2 col-form-label"> &nbsp;&nbsp;Alamat</label>
              <div class="col-sm-6">
                <textarea class="form-control isi" id="inputalmt" name="inputalmt" rows="3" required><?php echo $mhs->alamat; ?></textarea>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputtlp" class="col-sm-2 col-form-label"> &nbsp;&nbsp;Telepon</label>
              <div class="col-sm-6">
                <input type="number" class="form-control isi" name="inputtlp" placeholder="Telepon" value="<?php echo $mhs->telepon; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputemail" class="col-sm-2 col-form-label isi"> &nbsp;&nbsp;Email</label>
              <div class="col-sm-6">
                <input type="email" class="form-control isi" name="inputemail" placeholder="Email" value="<?php echo $mhs->email; ?>" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6" style="margin-left: 60%;">
                <button type="submit" name="edit" class="btn btn-primary" size="50px">Edit</button>
              </div>
            </div>
          </form>
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
