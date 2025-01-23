<!DOCTYPE html>
<html lang="id">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Data Pengantin | Mantenbaru Wedding Organizer</title>
  <meta name="title" content="Vendor Pernikahan Terlengkap | Mantenbaru Wedding Organizer">
  <meta name="site_url" content="<?php echo base_url()?>">
  <meta name="description" content="">
  <meta name="keywords" content="mantenbaru.com, mantenbaru, perencanaan investasi, vendor pernikahan, wedding organizer, wedding planner">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="web_author" content="dhawyarkan.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta property="og:site_name" content="Mantenbaru">
  <meta property="og:title" content="Vendor Pernikahan Terlengkap | Mantenbaru Wedding Organizer">
  <meta property="og:description" content="">
  <meta property="og:url" content="<?php echo base_url()?>">
  <meta property="og:image" content="<?php echo base_url()?>asset/frontend/aspanel/img/logo.png">
  <meta property="og:image:url" content="<?php echo base_url()?>asset/frontend/aspanel/img/logo.png">
  <meta property="og:type" content="article">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url()?>asset/frontend/aspanel/img/fav.png" type="image/x-icon">
  <?php $this->load->view('fronts/css')?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body data-color="theme-1">
  <?php $this->load->view('fronts/loader')?>
  <img class="center-image" src="assets/frontend/campur/bg-1.jpg" alt="">
  <div class="container">
  	<div class="login-fullpage">
  		<div class="row">
  			<div class="login-logo"><img class="center-image" src="assets/frontend/campur/login.jpg" alt=""></div>
  			<div class="col-xs-12 col-sm-7">
          <div class="f-login-content">
                   
  					<div class="f-login-header">
  						<div class="f-login-title color-dr-blue-2">Data Pengantin</div>
  						<div class="f-login-desc color-grey">Silahkan lengkapi data dibawah ini :</div>
  					</div>
        
            <div class="container mt-5">
            <p style="font-size:12px"><b>Pilih Salah Satu :</b> </p>
            <!-- Radio Button 1 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="options" id="option1" value="islam">
              <label class="form-check-label" for="option1">
              <p style="font-size:12px">Islam</p>
              </label>
            </div>
  
            <!-- Radio Button 2 -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="options" id="option2" value="lainnya">
              <label class="form-check-label" for="option2">
              <p style="font-size:12px">Lainnya</p>
              </label>
            </div>
            </div>
            <br>

  					<form class="f-login-form" id="form-data-islam">
            <!-- Data Pengantin Ibu Batas Awal -->
            <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Lengkap Pengantin Wanita</b> </p>
    							<input name='customers_islam_cpw_namaleng' type="text" placeholder="Nama Lengkap Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()">            
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_namaleng'); ?></small>
    						</div>
              </div>
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Panggilan Pengantin Wanita</b> </p>
                  <input name='customers_islam_cpw_namapang' type="text" placeholder="Nama Panggilan Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()">
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_namapang'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pengantin Wanita Anak Ke</b> </p>
                    <input name='customers_islam_cpw_anakke' type="text" placeholder="Pengantin Wanita Anak Ke" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_anakke'); ?></small>
                  </div>
              </div>              
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Dari Berapa Bersaudara</b> </p>
                    <input name='customers_islam_cpw_anakdari' type="text" placeholder="Dari Berapa Bersaudara" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_anakdari'); ?></small>
                  </div>
              </div> 
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Bapak Pengantin Wanita</b> </p>
                  <input name='customers_islam_cpw_namabpk' type="text" placeholder="Nama Bapak Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_namabpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Wanita ke Bapak</b> </p>
                  <input name='customers_islam_cpw_panggilkebpk' type="text" placeholder="Panggilan Pengantin Wanita ke Bapak" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_panggilkebpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Ibu Pengantin Wanita</b> </p>
                  <input name='customers_islam_cpw_namaibu' type="text" placeholder="Nama Ibu Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_namaibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Wanita ke Ibu</b> </p>
                  <input name='customers_islam_cpw_panggilkeibu' type="text" placeholder="Panggilan Pengantin Wanita ke Ibu" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_panggilkeibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Nama Saudara Kandung Pengantin Wanita</b> </p>
                    <input name='customers_islam_cpw_saudara' type="text" placeholder="Nama Saudara Kandung Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_saudara'); ?></small>
                  </div>
              </div>         
            <!-- Data Pengantin Ibu Batas Akhir -->
            <!-- Data Pengantin Pria Batas Awal -->
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Lengkap Pengantin Pria</b> </p>
                  <input name='customers_islam_cpp_namaleng' type="text" placeholder="Nama Lengkap Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()">            
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_namaleng'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Panggilan Pengantin Pria</b> </p>
                  <input name='customers_islam_cpp_namapang' type="text" placeholder="Nama Panggilan Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()">
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_namapang'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pengantin Pria Anak Ke</b> </p>
                    <input name='customers_islam_cpp_anakke' type="text" placeholder="Pengantin Pria Anak Ke" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_anakke'); ?></small>
                  </div>
              </div>              
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Dari Berapa Bersaudara</b> </p>
                    <input name='customers_islam_cpp_anakdari' type="text" placeholder="Dari Berapa Bersaudara" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_anakdari'); ?></small>
                  </div>
              </div> 
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Bapak Pengantin Pria</b> </p>
                  <input name='customers_islam_cpp_namabpk' type="text" placeholder="Nama Bapak Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_namabpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Pria ke Bapak</b> </p>
                  <input name='customers_islam_cpp_panggilkebpk' type="text" placeholder="Panggilan Pengantin Pria ke Bapak" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_panggilkebpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Ibu Pengantin Pria</b> </p>
                  <input name='customers_islam_cpp_namaibu' type="text" placeholder="Nama Ibu Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_namaibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Pria ke Ibu</b> </p>
                  <input name='customers_islam_cpp_panggilkeibu' type="text" placeholder="Panggilan Pengantin Pria ke Ibu" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_panggilkeibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Nama Saudara Kandung Pengantin Pria</b> </p>
                    <input name='customers_islam_cpp_saudara' type="text" placeholder="Nama Saudara Kandung Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_saudara'); ?></small>
                  </div>
              </div>         
            <!-- Data Pengantin Pria Batas Akhir -->
            <!-- Data Panitia Pernikahan Batas Awal -->
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Mahar Pernikahan</b> </p>
                  <input name='customers_islam_mahar' type="text" placeholder="Mahar Pernikahan" onkeyup="this.value = this.value.toLowerCase()">            
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_mahar'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Simbolis Seserahan</b> </p>
                  <input name='customers_islam_seserahan' type="text" placeholder="Simbolis Seserahan" onkeyup="this.value = this.value.toLowerCase()">
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_seserahan'); ?></small>
                </div>
              </div>              
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Koordinator Keluarga Pengantin Wanita</b> </p>
                    <input name='customers_islam_cpw_koor' type="text" placeholder="Nama Koordinator Keluarga Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_koor'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Koordinator Keluarga Pengantin Pria</b> </p>
                    <input name='customers_islam_cpp_koor' type="text" placeholder="Nama Koordinator Keluarga Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_koor'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Jubir Keluarga Pengantin Wanita</b> </p>
                    <input name='customers_islam_cpw_jubir' type="text" placeholder="Nama Jubir Keluarga Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_jubir'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Jubir Keluarga Pengantin Pria</b> </p>
                    <input name='customers_islam_cpp_jubir' type="text" placeholder="Nama Jubir Keluarga Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_jubir'); ?></small>
                  </div>
              </div> 
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Penghulu</b> </p>
                    <input name='customers_islam_namapenghulu' type="text" placeholder="Nama Penghulu" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_namapenghulu'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Wali Nikah</b> </p>
                    <input name='customers_islam_namawali' type="text" placeholder="Nama Wali Nikah" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_namawali'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Saksi Pengantin Wanita</b> </p>
                    <input name='customers_islam_cpw_saksi' type="text" placeholder="Nama Saksi Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpw_saksi'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Saksi Pengantin Pria</b> </p>
                    <input name='customers_islam_cpp_saksi' type="text" placeholder="Nama Saksi Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_cpp_saksi'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Qori atau Saritilawah</b> </p>
                    <input name='customers_islam_qori' type="text" placeholder="Nama Qori atau Saritilawah" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_qori'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Nasehat dan Doa Pernikahan</b> </p>
                    <input name='customers_islam_nasehat' type="text" placeholder="Nama Nasehat dan Doa Pernikahan" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_nasehat'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pengapit Pengantin Wanita dari Keluarga</b> </p>
                    <input name='customers_islam_pengapit' type="text" placeholder="Nama Pengapit Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_pengapit'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pembawa Nampan Kalung Bunga Melati</b> </p>
                    <input name='customers_islam_nampan' type="text" placeholder="Nama Pembawa Nampan Kalung Bunga Melati" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_nampan'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pembawa Mas Kawin/Mahar</b> </p>
                    <input name='customers_islam_pemmas' type="text" placeholder="Nama Pembawa Mas Kawin/Mahar" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_pemmas'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pembawa Cincin Kawin</b> </p>
                    <input name='customers_islam_pemcin' type="text" placeholder="Nama Pembawa Cincin Kawin" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_islam_pemcin'); ?></small>
                  </div>
              </div>         
            <!-- Data Panitia Pernikahan Batas Akhir -->
             
            
  						<div class="input-style-1 b-50 type-2 color-5">
  						<span style="font-size: 12px; color:grey;">Dengan mengklik Daftar, Anda menyetujui <a href="#"><span style ="color:blue;">Syarat dan Ketentuan</span></a> Mantenbaru.</span>
  						</div>
              <br><br><br>
  						<input name='submit' type="submit" class="login-btn c-button full b-60 bg-dr-blue-2 hv-dr-blue-2-o" value="SUBMIT">
              <br><br><br>
              <div class="input-style-1 b-50 type-2 color-5">
  						<span style="font-size: 15px; color:grey;">Sudah punya akun Mantenbaru? Langsung <a href="<?php echo base_url()?>login"><span style ="color:blue;">Masuk</span></a> yuk!</span>
  						</div>
  					</form>

            <form class="f-login-form" id="form-data-lainnya">
            <!-- Data Pengantin Ibu Batas Awal -->
            <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Lengkap Pengantin Wanita</b> </p>
    							<input name='customers_lain_cpw_namaleng' type="text" placeholder="Nama Lengkap Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()">            
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_namaleng'); ?></small>
    						</div>
              </div>
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Panggilan Pengantin Wanita</b> </p>
                  <input name='customers_lain_cpw_namapang' type="text" placeholder="Nama Panggilan Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()">
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_namapang'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pengantin Wanita Anak Ke</b> </p>
                    <input name='customers_lain_cpw_anakke' type="text" placeholder="Pengantin Wanita Anak Ke" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_anakke'); ?></small>
                  </div>
              </div>              
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Dari Berapa Bersaudara</b> </p>
                    <input name='customers_lain_cpw_anakdari' type="text" placeholder="Dari Berapa Bersaudara" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_anakdari'); ?></small>
                  </div>
              </div> 
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Bapak Pengantin Wanita</b> </p>
                  <input name='customers_lain_cpw_namabpk' type="text" placeholder="Nama Bapak Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_namabpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Wanita ke Bapak</b> </p>
                  <input name='customers_lain_cpw_panggilkebpk' type="text" placeholder="Panggilan Pengantin Wanita ke Bapak" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_panggilkebpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Ibu Pengantin Wanita</b> </p>
                  <input name='customers_lain_cpw_namaibu' type="text" placeholder="Nama Ibu Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_namaibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Wanita ke Ibu</b> </p>
                  <input name='customers_lain_cpw_panggilkeibu' type="text" placeholder="Panggilan Pengantin Wanita ke Ibu" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_panggilkeibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Nama Saudara Kandung Pengantin Wanita</b> </p>
                    <input name='customers_lain_cpw_saudara' type="text" placeholder="Nama Saudara Kandung Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_saudara'); ?></small>
                  </div>
              </div>         
            <!-- Data Pengantin Ibu Batas Akhir -->
            <!-- Data Pengantin Pria Batas Awal -->
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Lengkap Pengantin Pria</b> </p>
                  <input name='customers_lain_cpp_namaleng' type="text" placeholder="Nama Lengkap Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()">            
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_namaleng'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Panggilan Pengantin Pria</b> </p>
                  <input name='customers_lain_cpp_namapang' type="text" placeholder="Nama Panggilan Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()">
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_namapang'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pengantin Pria Anak Ke</b> </p>
                    <input name='customers_lain_cpp_anakke' type="text" placeholder="Pengantin Pria Anak Ke" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_anakke'); ?></small>
                  </div>
              </div>              
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Dari Berapa Bersaudara</b> </p>
                    <input name='customers_lain_cpp_anakdari' type="text" placeholder="Dari Berapa Bersaudara" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_anakdari'); ?></small>
                  </div>
              </div> 
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Bapak Pengantin Pria</b> </p>
                  <input name='customers_lain_cpp_namabpk' type="text" placeholder="Nama Bapak Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_namabpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Pria ke Bapak</b> </p>
                  <input name='customers_lain_cpp_panggilkebpk' type="text" placeholder="Panggilan Pengantin Pria ke Bapak" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_panggilkebpk'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Nama Ibu Pengantin Pria</b> </p>
                  <input name='customers_lain_cpp_namaibu' type="text" placeholder="Nama Ibu Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_namaibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                <div class="input-style-1 b-50 type-2 color-5">
                <p style="font-size:12px"><b>Panggilan Pengantin Pria ke Ibu</b> </p>
                  <input name='customers_lain_cpp_panggilkeibu' type="text" placeholder="Panggilan Pengantin Pria ke Ibu" onkeyup="this.value = this.value.toLowerCase()"> 
                  <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_panggilkeibu'); ?></small>
                </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Nama Saudara Kandung Pengantin Pria</b> </p>
                    <input name='customers_lain_cpp_saudara' type="text" placeholder="Nama Saudara Kandung Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_saudara'); ?></small>
                  </div>
              </div>         
            <!-- Data Pengantin Pria Batas Akhir -->
            <!-- Data Panitia Pernikahan Batas Awal -->
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Koordinator Keluarga Pengantin Wanita</b> </p>
                    <input name='customers_lain_cpw_koor' type="text" placeholder="Nama Koordinator Keluarga Pengantin Wanita" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpw_koor'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Koordinator Keluarga Pengantin Pria</b> </p>
                    <input name='customers_lain_cpp_koor' type="text" placeholder="Nama Koordinator Keluarga Pengantin Pria" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_cpp_koor'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pendeta</b> </p>
                    <input name='customers_lain_namapendeta' type="text" placeholder="Nama Pendeta" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_namapendeta'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Gereja Pendeta</b> </p>
                    <input name='customers_lain_gereja' type="text" placeholder="Nama Gereja Pendeta" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_gereja'); ?></small>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 1px">                
                  <div class="input-style-1 b-50 type-2 color-5">
                  <p style="font-size:12px"><b>Pemimpin Doa</b> </p>
                    <input name='customers_lain_doa' type="text" placeholder="Nama Pemimpin Doa" onkeyup="this.value = this.value.toLowerCase()"> 
                    <small style="font-size: 15px; color:grey; margin-bottom: -15px"><?php echo form_error('customers_lain_doa'); ?></small>
                  </div>
              </div>
            <!-- Data Panitia Pernikahan Batas Akhir -->
             
            
  						<div class="input-style-1 b-50 type-2 color-5">
  						<span style="font-size: 12px; color:grey;">Dengan mengklik Daftar, Anda menyetujui <a href="#"><span style ="color:blue;">Syarat dan Ketentuan</span></a> Mantenbaru.</span>
  						</div>
              <br><br><br>
  						<input name='submit' type="submit" class="login-btn c-button full b-60 bg-dr-blue-2 hv-dr-blue-2-o" value="SUBMIT">
              <br><br><br>
              <div class="input-style-1 b-50 type-2 color-5">
  						<span style="font-size: 15px; color:grey;">Sudah punya akun Mantenbaru? Langsung <a href="<?php echo base_url()?>login"><span style ="color:blue;">Masuk</span></a> yuk!</span>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="full-copy">© 2022 All rights reserved. <a href="<?php echo base_url()?>">Mantenbaru</a></div>
  </div>
  <?php $this->load->view('fronts/js')?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      $(document).ready(function() {
        $('input[name="options"]').change(function() {
          if ($(this).val() === 'islam') {
            $('#form-data-islam').show();
            $('#form-data-lainnya').hide();
          } else if ($(this).val() === 'lainnya') {
            $('#form-data-islam').hide();
            $('#form-data-lainnya').show();
          }
        });
        $('#form-data-islam').hide(); // Hide form by default
        $('#form-data-lainnya').hide(); // Hide form by default
      });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
