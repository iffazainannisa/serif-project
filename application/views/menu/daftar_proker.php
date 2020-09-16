        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: tomatoes;">
              <li class="breadcrumb-item">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/proker','<i class="fas fa-back"></i> Tahun Proker'); ?>
                <?php }elseif($anggota['user_level'] == 2){ ?>
                <?php echo anchor('member/proker','<i class="fas fa-back"></i> Tahun Proker'); ?>
                <?php }elseif($anggota['user_level'] == 3){ ?>
                <?php echo anchor('alumni/proker','<i class="fas fa-back"></i> Tahun Proker'); ?>
                <?php } ?>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Daftar Proker</li>
            </ol>
        </nav>
          <div class="row">
            <div class="col-md-12">
              <?php echo $this->session->flashdata('message');?>
            </div>
          </div>

          <?php if($anggota['user_level'] == 1){ ?>
          <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_proker"><i class="fas fa-plus fa-sm"> Tambah Proker</i></button>
          <?php } ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 kotak">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Divisi</th>
                      <th>Nama Proker</th>
                      <th>Deskripsi</th>
                      <th>Dokumentasi</th>
                      <th>Tahun</th>
                      <?php if($anggota['user_level'] == 1){ ?>
                      <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($proker as $pr) :
                      ?>
                      <tr>
                        <td><?php echo $pr->nama_divisi; ?></td>
                        <td><?php echo $pr->nama_proker; ?></td>
                        <td><?php echo $pr->deskripsi; ?></td>
                        <td><center><?php if($pr->dokumentasi != ""){?>
                          <a href="<?php echo base_url('assets/doc/').$pr->dokumentasi; ?>" style="text-decoration: none; background-color: aqua" target="_blank"><div class="btn btn-success btn-md"><i class="fas fa-file"></i></div></a>
                        <?php } ?></center>
                        </td>
                        <td><?php echo $pr->tahun; ?></td>
                        <?php if($anggota['user_level'] == 1){ ?>
                        <td><span class="badge">
                          <?php echo anchor('admin/proker/edit/' . $pr->id_proker, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                          <?php $onclick = array('onclick'=>"return confirm('Anda yakin untuk menghapus data?')");?>
                          <?php echo anchor('admin/proker/hapus/'.$pr->id_proker.'/'.$pr->tahun, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>',$onclick); ?>
                          </span>
                        </td>
                        <?php } ?>

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

        <!-- Form Tambah Proker -->
        <div class="modal fade" id="tambah_proker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Program Kerja Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/proker/tambah'; ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label>Nama Proker</label>
                    <input type="text" name="judul" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                  </div>

                  <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" value ="<?php echo $thn; ?>" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label>Divisi</label>
                     <select class="form-control select2" style="width: 100%;" name="divisi" id="divisi" value="<?php echo $mhs->nama_divisi; ?>" required>
                        <option value="">--Pilih Divisi--</option>
                        <?php foreach($divisi as $div) : ?>
                        <option value="<?php echo $div->id_divisi;?>"><?php echo $div->nama_divisi;?></option>
                        <?php endforeach;  ?>
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
              </form>
            </div>
          </div>
        </div>