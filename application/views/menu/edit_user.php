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
              <li class="breadcrumb-item">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/anggota/tampil_edit','<i class="fas fa-back"></i> Daftar Anggota'); ?>
                <?php }elseif($anggota['user_level'] == 2){ ?>
                <?php echo anchor('member/anggota/tampil_edit','<i class="fas fa-back"></i> Daftar Anggota'); ?>
                <?php }elseif($anggota['user_level'] == 3){ ?>
                <?php echo anchor('alumni/anggota/tampil_edit','<i class="fas fa-back"></i> Daftar Anggota'); ?>
                <?php } ?>
              </li>
              <?php if($anggota['user_level'] == 1){ ?>
              <li class="breadcrumb-item active" aria-current="page">Edit Anggota</li>
              <?php } ?>

            </ol>
        </nav>

      <!-- Page Heading -->
      <p class="h3 mb-4 text-gray-800"><i class="fas fa-user-edit"></i> Edit Anggota</p>
      <!-- End of Main Content -->
      <!-- Content Row -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->session->flashdata('message');?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="card mb-4 py-3 border-bottom-primary" style="padding: 5%;">
          <form method="post" action="<?php echo base_url() . 'admin/anggota/update_anggota' ?>">
            <?php echo form_hidden('nim', $mhs->nim); ?>
            <div class="form-group row isiku">
              <label for="inputnim" class="col-sm-3 col-form-label">NIM</label>
              <div class="col-sm-8">
                <input type="text" class="form-control isi" name="inputnim" placeholder="NIM" value="<?= $mhs->nim; ?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputnama" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control isi" name="inputnama" placeholder="Nama" value="<?php echo $mhs->nama; ?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputtgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <input type="date" class="form-control isi" name="inputtgl" placeholder="Tanggal Lahir" value="<?php echo $mhs->tgl_lahir;?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputalmt" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-8">
                <textarea class="form-control isi" id="inputalmt" name="inputalmt" rows="3" required><?php echo $mhs->alamat; ?></textarea>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputtlp" class="col-sm-3 col-form-label">Telepon</label>
              <div class="col-sm-8">
                <input type="number" class="form-control isi" name="inputtlp" placeholder="Telepon" value="<?php echo $mhs->telepon; ?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputemail" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control isi" name="inputemail" placeholder="Email" value="<?php echo $mhs->email; ?>" required>
              </div>
            </div>
            <div class="form-group row isiku">
              <label for="inputthn" class="col-sm-3 col-form-label">User Level</label>
              <div class="col-sm-8">
              <select class="form-control isi" name="level" id="level" value="<?php echo $mhs->user_level; ?>">
                <option value="<?php echo $mhs->user_level;?>"><?php echo $mhs->user_level;?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <button type="submit" name="edit" class="btn btn-primary" size="50px">Edit</button>
              </div>
            </div>
        </form>
        </div>
      </div>

        <div class="col-md-5">
        <div class="card mb-4 py-3 border-bottom-primary" style="padding: 5%;">
        <?php echo form_open_multipart('admin/anggota/update_anggota2') ?>
          <?php echo form_hidden('nimku', $mhs->nim); ?>
          <?php echo form_hidden('levelku', $mhs->user_level); ?>
          <?php echo form_hidden('before', $mhs->username); ?>
          <label for="pswrd" class="col-form-label"><h5><b>Edit Username dan Password</b></h5></label><br/><br/>
          <div class="form-group row isiku">
              <label for="inputusr" class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-6">
                <input type="text" class="form-control isi" name="inputusr" placeholder="Username" value="<?php echo $mhs->username; ?>" minlength="5" maxlength="15" required>
              </div>
            </div>
          <div class="form-group row">
              <label for="pswrd" class="col-sm-3 col-form-label isi">Password</label>
              <div class="col-sm-6">
                <input type="password" class="form-control isi" name="pswrd" placeholder="Password" minlength="6" required>
              </div>
            </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <button type="submit" name="edit2" class="btn btn-success" size="50px">Edit</button>
            </div>
          </div>
        <!-- </form> -->
       <?php echo form_close(); ?>
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
