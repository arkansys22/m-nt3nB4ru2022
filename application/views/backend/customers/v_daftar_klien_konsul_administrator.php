
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
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>customer/daftar_klien"><small>Daftar Klien</small></a></li>
            <li class="breadcrumb-item active"><small>Konsul Offline</small></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-danger" href="<?php echo base_url()?>customer/daftar_klien">
                  <div class="d-block d-sm-none"><i class="nav-icon fas fa-exclamation-circle"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fas fa-exclamation-circle"></i> Daftar Klien</div>
                </a>
                <a class="btn btn-outline-danger" href="<?php echo base_url()?>customer/daftar_klien_hot">
                  <div class="d-block d-sm-none"><i class="nav-icon fab fa-hotjar"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fab fa-hotjar"></i> Klien Hot</div>
                </a>                 
                <a class="btn btn-danger" href="<?php echo base_url()?>customer/daftar_klien_konsul">
                  <div class="d-block d-sm-none"><i class="nav-icon fas fa-hands-helping"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fas fa-hands-helping"></i> Klien Konsul Offline</div>
                </a>
                <a class="btn btn-outline-danger" href="<?php echo base_url()?>customer/daftar_klien_kuncitgl">
                  <div class="d-block d-sm-none"><i class="nav-icon fas fa-calendar-check"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fas fa-calendar-check"></i> Kunci Tanggal</div>
                </a>
                <a class="btn btn-outline-danger" href="<?php echo base_url()?>customer/daftar_klien_uangmuka">
                  <div class="d-block d-sm-none"><i class="nav-icon fas fa-handshake"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fas fa-handshake"></i> Uang Muka</div>
                </a>
                <a class="btn btn-outline-danger" href="<?php echo base_url()?>customer/daftar_klien_lunas">
                  <div class="d-block d-sm-none"><i class="nav-icon fas fa-trophy"></i></div>
                  <div class="d-md-block d-none d-sm-block"><i class="nav-icon fas fa-trophy"></i> Pelunasan</div>
                </a>
                <br><br>
                <center><h3>Klien Konsul Offline</h3></center>
            </div><!-- /.card-header -->
            <br>

            <div class="card-body table-responsive">              
              <table id="example1" class="table table-responsive-xl col-12 table-bordered table-striped p-0">
                <thead>
                <tr>
                  <th>Aksi</th>
                  <th>No</th>
                  <th>Nama Klien</th>
                  <th>Nomer HP</th>
                  <th>Tanggal & Lokasi Acara</th>                  
                  <th>Chat Pertama</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){

                  ?>

                <tr>
                  <td>
                    <?php
                    echo"
                    <a class='btn btn-primary btn-sm' title='Detail' href='#'><i class='fas fa-eye'></i></a>
                    <a class='btn btn-primary btn-sm' title='Perbarui' href='".base_url()."customer/edit_klien/$row[customers_id_session]'><i class='fas fa-edit'></i></a>
                    ";
                    ?>
                  </td>
                  <td><?=$no++?></td>
                  <td><?=$row['customers_nama']?></td>
                  <td><a href="https://wa.me/<?php echo $row['customers_nohp']?>"><?php echo $row['customers_nohp']?></a></td>
                  <td><?php echo tgl_indo($row['customers_tanggal_acara'])?>, <?php echo $row['customers_lokasi']?></td>                  
                  <td><?= tgl_indo($row['customers_tglawal'])?></td>
                </tr>
              <?php } ?>

                </tbody>
              </table>
            </div>
            
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

<?php $this->load->view('backend/bottom')?>
