    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->

      <!-- Begin Page Content -->
      <div class="row">
        <!-- Begin Page Content -->
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
              <li class="breadcrumb-item active" aria-current="page">Daftar Anggota</li>
            </ol>
        </nav>
          <div class="row">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('message');?>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 kotak">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Daftar Anggota</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0.5">
                  <thead>
                    <tr>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                      foreach ($member as $br) :
                    ?>
                    <tr style="font-size: 11px;">
                      <td><?php echo $br->nim; ?></td>
                      <td><?php echo $br->nama; ?></td>
                      <td><?php echo $br->tgl_lahir; ?></td>
                      <td><?php echo $br->alamat; ?></td>
                      <td><?php echo $br->telepon; ?></td>
                      <td><?php echo $br->user_level; ?></td>
                      <td><span class="badge">
                        <?php echo anchor('admin/anggota/edit_anggota/'.$br->nim, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?> <span onclick="javascript : return confirm('Anda yakin hapus?')"><?php echo anchor('admin/anggota/hapus_anggota/'.$br->nim, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?></span>
                      </span>
                      </td>
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
           <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    </div>