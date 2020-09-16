
<div class="container-fluid">

      <!-- Page Heading -->
      <p class="h4 mb-4 text-gray-800"><i class="fas fa-user-edit"></i> Edit Pengurus</p>
      <?php if(($hitung<2)&&($anggota['user_level'] != 3)){ ?>
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pengurus"><i class="fas fa-plus fa-sm"> Tambah Kepengurusan</i></button>
      <?php } ?>
      <!-- End of Main Content -->
      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-12">
          <?php echo $this->session->flashdata('message');?>
        </div>
      </div>
      <div class="card mb-4 py-3 border-bottom-primary">
      <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <!-- Collapsable Card Example -->
            <br />
            <div class="card shadow mb-4 pengurus">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat Kepengurusan</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                <?php foreach($mahasiswa as $mhs) :?>
                    <hr />
                    <h6 class="m-0 font-weight-bold text-success">PERIODE <?php echo $mhs->tahun; ?></h6>
                    <hr />
                    <div class="form-group row isiku">
                      <label for="thn" class="col-sm-3 col-form-label kiri">Tahun</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <input type="text" class="form-control isi" value="<?php echo $mhs->tahun; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row isiku">
                      <label for="inputdvs" class="col-sm-3 col-form-label kiri">Divisi</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <input type="text" class="form-control isi" value="<?php echo $mhs->nama_divisi; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row isiku">
                      <label for="inputjbtn" class="col-sm-3 col-form-label kiri">Jabatan</b></label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <input type="text" class="form-control isi" value="<?php echo $mhs->nama_jabatan; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row isiku">
                      <label for="thn" class="col-sm-3 col-form-label kiri">Penanggung Jawab</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <input type="text" class="form-control isi" value="<?php echo $mhs->penanggung_jawab; ?>" readonly>
                      </div>
                    </div>
                  <br />
                  <?php endforeach ?>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-1"></div>
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

    <!-- Form Tambah Pengurus -->
        <div class="modal fade" id="tambah_pengurus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kepengurusan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php if($anggota['user_level']== 1){echo base_url('admin/home/tambah');} elseif($anggota['user_level']== 2){echo base_url('member/home/tambah');}?>" method="post" enctype="multipart/form-data">
                  <?php echo form_hidden('nimku', $anggota['nim']); ?>
                  <div class="form-group row">
                      <label for="thn" class="col-sm-3 col-form-label">Tahun</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <input type="number" class="form-control" name="tahun" placeholder="Tahun Kepengurusan" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputdvs" class="col-sm-3 col-form-label">Divisi</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <select class="form-control select2" name="divisi" style="width: 100%;" required>
                          <option value="">--Pilih Divisi--</option>
                          <?php foreach($divisi as $div) : ?>
                            <option value="<?php echo $div->id_divisi;?>"><?php echo $div->nama_divisi;?></option>
                          <?php endforeach;  ?>
                        </select>
                   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputjbtn" class="col-sm-3 col-form-label">Jabatan</b></label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <select class="form-control select2" name="jabatan" style="width: 100%;" required>
                          <option value="">--Pilih Jabatan--</option>
                          <?php foreach($jabatan as $jab) : ?>
                            <option value="<?php echo $jab->id_jabatan;?>"><?php echo $jab->nama_jabatan;?></option>
                          <?php endforeach;  ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="thn" class="col-sm-3 col-form-label">PJ</label>
                      <div class="col-sm-6" style="margin-left: 5%;">
                        <textarea class="form-control" id="pj" name="pj" rows="3" placeholder="Penanggung Jawab"></textarea>
                      </div>
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
