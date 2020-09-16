    <!-- Begin Page Content -->
    <!-- <?php //var_dump($pengurus);?> -->
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
      <div class="cards-7 section gray">
        <div class="container">
          <div class="row">
            <?php  
              foreach ($member as $mbr) :
            ?>
            <div class="col-md-2">
              <div class="card card-profile ml-2 mr-2">
                <div class="card-image">
                    <img class="img" src="<?php echo base_url('assets/img/profile/').$mbr->foto; ?>" width="100%">
                  <div class="table">
                    <br />
                    <h6 class="card-caption" style="font-size: 11px;"><b><?php echo $mbr->nama; ?></b></h6>
                    <p class="category text-gray" style="font-size: 9px;"><?php echo $mbr->nama_jabatan; ?></p>
                    <a href="" id="detail" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-detail" data-nim="<?php echo $mbr->nim;?>" data-tahun="<?php echo $mbr->tahun;?>" data-nama="<?php echo $mbr->nama; ?>" data-jabatan="<?php echo $mbr->nama_jabatan; ?>" data-tgl="<?php echo $mbr->tgl_lahir; ?>" data-alamat="<?php echo $mbr->alamat; ?>" data-telp="<?php echo $mbr->telepon; ?>" data-email="<?php echo $mbr->email; ?>" data-pj="<?php echo $mbr->penanggung_jawab; ?>" data-foto="<?php echo $mbr->foto; ?>"><i class="fas fa-eye"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
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


   
 <!-- Detail Modal -->
              <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Detail Profile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img class="img-profile circle" src="<?php echo base_url('assets/img/profile/').$mbr->foto; ?>" width="100%">
                          <hr />
                          <p style="font-size: 14px; text-align: center; line-height: 80%"><b><?php echo $mbr->nama; ?></b></p>
                          <p style="font-size: 10px; text-align: center; line-height: 80%"><b><?php echo $mbr->nama_jabatan; ?></b></p>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-4 py-3 border-bottom-primary">
                            <p style="font-size: 14px; line-height: 1.6; ">&nbsp;<b>NIM</b> : &nbsp;<?php echo $mbr->nim; ?><br/>
                            &nbsp;<b>Tanggal Lahir</b> : &nbsp;<?php echo $mbr->tgl_lahir; ?><br />
                            &nbsp;<b>Alamat</b> : &nbsp;<?php echo $mbr->alamat; ?><br />
                            &nbsp;<b>Telepon</b> : &nbsp;<?php echo $mbr->telepon; ?><br />
                            &nbsp;<b>Email</b> : &nbsp;<?php echo $mbr->email; ?><br />
                            </p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
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

    <!-- Modal Detail -->
    <div id="modal-detail" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fa fa-search"></i> Detail Pengurus</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
        </div>
        <center>
          <br />
           <img src="" name="image" id="foto" width="40%">
           <hr width="80%" />
            <p style="font-size: 16px; font-weight: bold;" id="nama"></p>
            <p style="font-size: 14px" id="nama_jabatan"></p>
        </center>
        <div class="modal-body table-responsive">
          <table class="table table-bordered table-striped" style="font-size: 14px;">
            <tbody>
              <tr>
                <th style="">NIM</th>
                <td><span id="nim"></span></td>
              </tr>
              <tr>
                <th style="">Tanggal Lahir</th>
                <td><span id="tgl_lahir"></span></td>
              </tr>
              <tr>
                <th style="">Alamat</th>
                <td><span id="alamat"></span></td>
              </tr>
              <tr>
                <th style="">Telepon</th>
                <td><span id="telepon"></span></td>
              </tr>
              <tr>
                <th style="">Email</th>
                <td><span id="email"></span></td>
              </tr>
              <tr>
                <th style="">Penanggung Jawab</th>
                <td><span id="penanggung_jawab"></span></td>
              </tr>
            </tbody>
         </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>

 <!-- Ajax -->
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click', '#detail', function(){
        var nim = $(this).data('nim');
        var tahun = $(this).data('tahun');
        var nama = $(this).data('nama');
        var jabatan = $(this).data('jabatan');
        var tgl = $(this).data('tgl');
        var alamat = $(this).data('alamat');
        var telp = $(this).data('telp');
        var email = $(this).data('email');
        var pj = $(this).data('pj');
        var foto = $(this).data('foto');
        $('#nim').text(nim);
        $('#tahun').text(tahun);
        $('#nama').text(nama);
        $('#nama_jabatan').text(jabatan);
        $('#tgl_lahir').text(tgl);
        $('#alamat').text(alamat);
        $('#telepon').text(telp);
        $('#email').text(email);
        $('#penanggung_jawab').text(pj);
        $('#foto').prop('src','<?php echo base_url()?>assets/img/profile/'+foto);
      })
    })
  </script>