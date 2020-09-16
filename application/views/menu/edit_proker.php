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
              <li class="breadcrumb-item">
                <?php if($anggota['user_level'] == 1){ ?>
                <?php echo anchor('admin/proker/tampil/'.$pr->tahun,'<i class="fas fa-back"></i> Daftar Proker'); ?>
                <?php }elseif($anggota['user_level'] == 2){ ?>
                <?php echo anchor('member/proker/tampil/'.$pr->tahun,'<i class="fas fa-back"></i> Daftar Proker'); ?>
                <?php }elseif($anggota['user_level'] == 3){ ?>
                <?php echo anchor('alumni/proker/tampil/'.$pr->tahun,'<i class="fas fa-back"></i> Daftar Proker'); ?>
                <?php } ?>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Edit Proker</li>
            </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->session->flashdata('message');?>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Edit Program Kerja</h5>

        <div class="card-body">

                <?php echo form_open_multipart('admin/proker/update') ?>
                    <div class="col">
                        <table class="table">
                            <tr class="for-group ">
                                <td><label>Nama Program Kerja</label></td>
                                <?php echo form_hidden('id_proker', $pr->id_proker); ?>
                                <td><input type="text" name="nama_proker" class="form-control form-control-sm" value="<?php echo $pr->nama_proker ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Divisi</label></td>
                                <td><select class="form-control select2" style="width: 100%" name="divisi" id="divisiall" value="<?php echo $pr->nama_divisi; ?>" required>
                                    <option value="<?php echo $pr->id_divisi;?>"><?php echo $pr->nama_divisi;?></option>
                                    <?php foreach($divisi as $div) : ?>
                                    <option value="<?php echo $div->id_divisi;?>"><?php echo $div->nama_divisi;?></option>
                                    <?php endforeach;  ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo $pr->deskripsi; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Dokumentasi <b>*pdf</b></td>
                                <td><input type="file" name="userfile" class="form-control form-control-sm" value="<?php echo $pr->dokumentasi;?>">
                                </td>
                            </tr>
                        </table>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm mt-3" style="margin-right: 6%;">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

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