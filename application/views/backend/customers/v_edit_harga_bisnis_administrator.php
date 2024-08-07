
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>harga/harga_bisnis/<?php echo $records['user_bisnis_session'] ?>"><small>Daftar Harga</small></a></li>
            <li class="breadcrumb-item active"><small>Perbarui Harga Paket</small></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
       <?php $users= $this->Crud_m->view_where('user', array('id_session'=> $this->session->id_session))->row_array(); ?>
          
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card">
           
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 d-flex">
                  <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                  echo form_open_multipart('harga/edit_harga_bisnis',$attributes); ?>
                  <h4><b>Perbarui Harga Paket</b></h4>
                  <div class="row">                    
                    <input type="hidden" name="id_bisnis" value="<?=$records['user_bisnis_session'] ?>">
                    <input type="hidden" name="id_harga" value="<?=$records['id_harga_session'] ?>">
                    <div class="col-12 col-sm-12">
                      <label class="col-6 col-xs-4 col-form-label">Judul</label>
                      <div class="col-12 col-xs-10">
                        <input type="text" class="form-control"  name ="judul" required="required" value="<?php echo $records['judul'] ?>">
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <label class="col-12 col-xs-12 col-form-label">Detail Harga</label>
                      <div class="col-md-12 col-sm-12">
                          <select class="form-control" name="harga_spec">
                            <?php if(empty($records['harga_spec'])) { ?>
                              <option class="drop-list" value="" selected>Pilih<i class="fa fa-angle-down"></i></option>
                              <option class="drop-list" value="Harga mulai dari">Harga mulai dari</option>
                              <option class="drop-list" value="Harga terbaik hanya">Harga Terbaik Hanya</option>
                            <?php }elseif($records['harga_spec'] == 'Harga mulai dari') { ?>
                              <option class="drop-list" value="Harga mulai dari" selected>Harga mulai dari</option>
                              <option class="drop-list" value="Harga terbaik hanya">Harga terbaik hanya</option>
                            <?php }else { ?>
                              <option class="drop-list" value="Harga mulai dari" >Harga mulai dari</option>
                              <option class="drop-list" value="Harga terbaik hanya" selected>Harga terbaik hanya</option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <label class="col-6 col-xs-4 col-form-label">Harga</label>
                      <div class="col-12 col-xs-10">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input type="number" class="form-control"  name ="harga" value="<?php echo $records['harga'] ?>" >
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <label class="col-12 col-xs-12 col-form-label">Harga Terbawah</label>
                      <div class="col-12 col-xs-10">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input type="number" class="form-control"  name ="harga_modal" value="<?php echo $records['harga_modal'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <label class="col-12 col-xs-12 col-form-label">Promo Diskon</label>
                      <div class="col-12 col-xs-10">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                          </div>
                          <input type="number" class="form-control"  name ="harga_diskon" value="<?php echo $records['harga_diskon'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12">
                      <label class="col-6 col-xs-4 col-form-label">Deskripsi</label>
                      <div class="col-12 col-xs-10">
                        <textarea id="default" name="deskripsi" rows="5" value=""><?php echo $records['deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <label class="col-6 col-xs-4 col-form-label">Meta Deskripsi</label>
                      <div class="col-12 col-xs-10">
                           <textarea class="form-control" name="meta_deskripsi" rows="2"><?php echo $records['meta_deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label class="col-4 col-xs-2 col-form-label">Kata kunci</label>
                        <div class="col-12 col-xs-10">
                          <input type="text" class="form-control"  name ="keyword" value="<?php echo $records['keyword'] ?>" >
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <label class="col-4 col-xs-2 col-form-label">Gambar</label>
                      <div class="col-12 col-xs-10">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foto_h">
                          <label class="custom-file-label" for="exampleInputFile"><?php echo $records['foto_h'] ?></label>
                        </div>
                      </div>
                      <br>
                      <div class="col-12 col-xs-10">
                          <img src="<?php echo base_url()?>assets/frontend/harga/<?php echo $records['foto_h'] ?>" class="img-fluid mb-3">
                      </div>
                      <br>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12 col-sm-6">
                      <label class="col-4 col-xs-2 col-form-label"> </label>
                      <div class="col-12 col-xs-10">
                        <button type="submit" name ="submit" class="btn btn-success"><i class="fas fa-file-upload"></i> Simpan</button>
                        <a class="btn btn-outline-info" title="batal" href="<?php echo base_url()?>harga/harga_bisnis/<?php echo $records['user_bisnis_session'] ?>"><i class="fab fa-creative-commons-sa"></i> Batal</a>

                      </div>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
              <br>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
   <script type="text/javascript">
      function loadKabupaten()
      {
          var propinsi = $("#provinsiArea").val();
          $.ajax({
              type:'GET',
              url:"<?php echo base_url(); ?>pengaturan/kabupaten",
              data:"id=" + propinsi,
              success: function(msg)
              {
                 $("#kabupatenArea").html(msg);
                 loadKecamatan();
              }
          });
      }
      function loadKecamatan()
      {
          var kabupaten = $("#kabupatenArea").val();
          $.ajax({
              type:'GET',
              url:"<?php echo base_url(); ?>pengaturan/kecamatan",
              data:"id=" + kabupaten,
              success: function(msg)
              {
                  $("#kecamatanArea").html(msg);
              }
          });
      }
  </script>

<?php $this->load->view('backend/bottom')?>
