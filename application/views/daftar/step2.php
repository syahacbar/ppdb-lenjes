<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>PPDB-SMP Online Kabupaten Sorong</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('resources/themes/regform1/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('resources/themes/regform1/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('resources/themes/regform1/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('resources/themes/regform1/vendor/datepicker/daterangepicker.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('resources/themes/regform1/css/main.css');?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-70 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Formulir Penerimaan Peserta Didik Baru</h2>
                    <form method="POST"  action="<?php echo base_url('daftar/step2');?>" enctype="multipart/form-data">
                    <input name="nisn" type="hidden" value="<?php echo $casis['nisn'];?>">
                    <input name="tgldaftar" type="hidden" value="<?php echo date('Y-m-d H:i:s')?>">
                    <?php 
                    if($_POST && $this->input->post('sekolahtujuan')==NULL) { 
                    ?>
                    <div style="color:red;">Anda harus memilih sekolah tujuan!</div>
                    <?php } ?>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sekolahtujuan" class="select2">
                                <option disabled="disabled" selected="selected">Pilih SMP</option>
                                    <?php foreach($sql_sekolahtujuan as $smp) { 
                                        $selected = ($smp['nama_smp'] == $this->input->post('sekolahtujuan')) ? ' selected="selected"' : "";
                                    ?>
                                    <option value="<?php echo $smp['nama_smp'];?>" <?php echo $selected;?>><?php echo $smp['nama_smp'];?></option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <?php 
                        if($_POST) {
                            if($this->input->post('nik')==NULL) { 
                                echo '<div style="color:red;">Anda harus memasukkan Nomor Induk Kependudukan!</div>';
                            } elseif(strlen($this->input->post('nik'))<>16) {
                                echo '<div style="color:red;">NIK Yang Anda Masukkan Tidak Benar. Periksa Kembali!</div>';
                            }
                        } 
                        ?>
                        <div class="input-group">
                            <input value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : '');?>" class="input--style-1" type="number" placeholder="Nomor Induk Kependudukan" name="nik" maxlength="16">
                        </div>
                        
                        <div class="input-group">
                            <input readonly value="<?php echo ($this->input->post('namapendaftar') ? $this->input->post('namapendaftar') : $casis['nama']); ?>" class="input--style-1" type="text" placeholder="Nama Lengkap" name="namapendaftar">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input readonly value="<?php echo ($this->input->post('tempatlahir') ? $this->input->post('tempatlahir') : $casis['tempatlahir']); ?>" class="input--style-1" type="text" placeholder="Tempat Lahir" name="tempatlahir">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input readonly id="tgllahir" value="<?php echo ($this->input->post('tgllahir') ? $this->input->post('tgllahir') : $casis['tgllahir']); ?>" class="input--style-1" type="text" placeholder="Tanggal Lahir" name="tgllahir">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <!--
                                        <select readonly name="jenkel" class="select2">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <?php 
                                            /*
                                                $jk = array(
                                                    'Laki-laki'=>'Laki-laki',
                                                    'Perempuan'=>'Perempuan',
                                                );
                                                foreach($jk as $value => $display_text)
                                                {
                                                    $selected = ($value == $casis['jenkel']) ? ' selected="selected"' : "";
                                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                                } 
                                                */
                                            ?>
                                        </select>
                                        -->
                                        <input readonly value="<?php echo ($this->input->post('jenkel') ? $this->input->post('jenkel') : $casis['jenkel']); ?>" class="input--style-1" type="text" name="jenkel">
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('agama')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih agama!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="agama" class="select2">
                                            <option disabled="disabled" selected="selected">Agama</option>
                                            <?php 
                                             $agama = array(
                                                'Islam'=>'Islam',
                                                'Kristen Protestan'=>'Kristen Protestan',
                                                'Katolik'=>'Katolik',
                                                'Hindu'=>'Hindu',
                                                'Budha'=>'Budha',
                                                'Budha'=>'Budha',
                                                'Kong Hu Cu'=>'Kong Hu Cu',
                                            );
                                            foreach($agama as $value => $display_text)
                                            {
                                                $selected = ($value == $this->input->post('agama')) ? ' selected="selected"' : "";
                                                echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                            } 
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('namaayah')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memasukkan Nama Ayah!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <input value="<?php echo ($this->input->post('namaayah') ? $this->input->post('namaayah') : '');?>" class="input--style-1" type="text" placeholder="Nama Ayah" name="namaayah">
                                </div>
                            </div>
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('pekerjaanayah')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Pekerjaan Ayah!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pekerjaanayah" class="select2">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <?php 
                                            foreach($sql_pekerjaan as $pekerjaan) { 
                                            $selected = ($pekerjaan['pekerjaan'] == $this->input->post('pekerjaanayah')) ? ' selected="selected"' : "";
                                            ?>
                                                <option value="<?php echo $pekerjaan['pekerjaan'];?>" <?php echo $selected;?>><?php echo $pekerjaan['pekerjaan'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('namaibu')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memasukkan Nama Ibu!</div>
                                <?php } ?>                            
                                <div class="input-group">
                                    <input value="<?php echo ($this->input->post('namaibu') ? $this->input->post('namaibu') : '');?>" class="input--style-1" type="text" placeholder="Nama Ibu" name="namaibu">
                                </div>
                            </div>
                            <div class="col-2">                            
                            <?php 
                                if($_POST && $this->input->post('pekerjaanibu')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Pekerjaan Ibu!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="pekerjaanibu" class="select2">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <?php 
                                            foreach($sql_pekerjaan as $pekerjaan) { 
                                            $selected = ($pekerjaan['pekerjaan'] == $this->input->post('pekerjaanibu')) ? ' selected="selected"' : "";
                                            ?>
                                                <option value="<?php echo $pekerjaan['pekerjaan'];?>" <?php echo $selected;?>><?php echo $pekerjaan['pekerjaan'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                        
                        <?php 
                                if($_POST && $this->input->post('alamatlengkap')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memasukkan Alamat Lengkap!</div>
                                <?php } ?>   
                        <div class="input-group">
                            <input value="<?php echo ($this->input->post('alamatlengkap') ? $this->input->post('alamatlengkap') : '');?>" class="input--style-1" type="text" placeholder="Tuliskan Alamat Lengkap: Nama Jalan/Nomor Rumah/RT/RW" name="alamatlengkap">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            
                            <?php 
                                if($_POST && $this->input->post('provinsi')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Provinsi!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="provinsi" id="provinsi" class="select2">
                                            <option disabled="disabled" selected="selected">Provinsi</option>
                                            <?php
                                            foreach($sql_provinsi as $prov) { 
                                            $selected = ($prov['kode'] == $this->input->post('provinsi')) ? ' selected="selected"' : "";
                                            ?>
                                            <option value="<?php echo $prov['kode'];?>" <?php echo $selected;?>><?php echo $prov['nama'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">                            
                            <?php 
                                if($_POST && $this->input->post('kabupaten')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Kabupaten!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="kabupaten" id="kabupaten" class="select2">
                                            <option disabled="disabled" selected="selected">Kabupaten/Kota</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                        
                        <div class="row row-space">
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('distrik')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Kecamatan!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="distrik" id="distrik" class="select2">
                                            <option disabled="disabled" selected="selected">Kecamatan/Distrik</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('desa')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Desa!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="desa" id="desa" class="select2">
                                            <option disabled="disabled" selected="selected">Kelurahan/Desa</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        
                        <div class="row row-space">
                            <div class="col-2">
                            <?php 
                                if($_POST && $this->input->post('nomorhp')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memasukkan Nomor HP!</div>
                                <?php } ?>
                                <div class="input-group">
                                    <input value="<?php echo ($this->input->post('nomorhp') ? $this->input->post('nomorhp') : '');?>" class="input--style-1" type="number" placeholder="Nomor HP" name="nomorhp">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="file" placeholder="Pas Foto" name="filefoto" value="C:/password.txt">
                                </div>
                            </div>
                        </div>  
                        <div class="input-group">
                            <?php 
                                if($_POST && $this->input->post('asalsekolah')==NULL) { 
                                ?>
                                <div style="color:red;">Anda harus memilih Asal Sekolah!</div>
                                <?php } ?>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="asalsekolah" class="select2">
                                    <option disabled="disabled" selected="selected">Asal SD</option>
                                    <?php 
                                    foreach($sql_asalsekolah as $sd) { 
                                    $selected = ($sd['namasekolah'] == $this->input->post('asalsekolah')) ? ' selected="selected"' : "";
                                    ?>
                                        <option value="<?php echo $sd['namasekolah'];?>" <?php echo $selected;?>><?php echo $sd['namasekolah'];?></option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                                <a href="<?php echo base_url('daftar');?>" class="btn btn--radius"  style="text-decoration:none; background: #c10606;">
                                    Kembali
                                </a>
                                <button class="btn btn--radius btn--green" type="submit">Selanjutnya</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('resources/themes/regform1/vendor/jquery/jquery.min.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('resources/themes/regform1/vendor/select2/select2.min.js');?>"></script>
    <script src="<?php echo base_url('resources/themes/regform1/vendor/datepicker/moment.min.js');?>"></script>
    <script src="<?php echo base_url('resources/themes/regform1/vendor/datepicker/daterangepicker.js');?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('resources/themes/regform1/js/global.js');?>"></script>
    
<script type="text/javascript">

 $(document).ready(function() {
    $('.select2').select2();
    $("#provinsi").change(function(){
       var id_provinsi = $(this).val(); 
       $.ajax({
          type: "POST",
          dataType: "html",
          url: "<?php echo base_url('Daftar/getKabupaten');?>",
          data: "id_provinsi="+id_provinsi,
          success: function(msg){
             $("select#kabupaten").html(msg);   
             getAjaxKabupaten();                                                        
          }
       });                    
     });  

     $("#kabupaten").change(getAjaxKabupaten);
     function getAjaxKabupaten(){
          var id_kabupaten = $(this).val();
          $.ajax({
             type: "POST",
             dataType: "html",
             url: "<?php echo base_url('Daftar/getDistrik');?>",
             data: "id_kabupaten="+id_kabupaten,
             success: function(msg){
                $("select#distrik").html(msg);     
                getAjaxDistrik();                                                    
             }
          });
     }

     $("#distrik").change(getAjaxDistrik);
     function getAjaxDistrik(){
          var id_distrik = $("#distrik").val();
          $.ajax({
             type: "POST",
             dataType: "html",
             url: "<?php echo base_url('Daftar/getDesa');?>",
             data: "id_distrik="+id_distrik,
             success: function(msg){
                $("select#desa").html(msg);                                                   
             }
          });
     }
});
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
