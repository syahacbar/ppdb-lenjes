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
                    <h2 class="title">Formulir Calon Siswa Baru</h2>
                    <form method="POST">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="sekolahtujuan" class="select2">
                                <option disabled="disabled" selected="selected">Pilih SMP</option>
                                    <?php foreach($sql_sekolahtujuan as $smp) { ?>
                                    <option value="<?php echo $smp['nama_smp'];?>"><?php echo $smp['nama_smp'];?></option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Nomor Induk Kependudukan" name="nik" maxlength="16">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Lengkap" name="namapendaftar">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Tempat Lahir" name="tempatlahir">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Lahir" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" class="select2">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" class="select2">
                                            <option disabled="disabled" selected="selected">Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen Protestan</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Kong Hu Cu</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Nama Ayah" name="namaayah">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pekerjaanayah" class="select2">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <?php foreach($sql_pekerjaan as $pekerjaan) { ?>
                                                <option value="<?php echo $pekerjaan['pekerjaan'];?>"><?php echo $pekerjaan['pekerjaan'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Nama Ibu" name="namaibu">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="pekerjaanibu" class="select2">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <?php foreach($sql_pekerjaan as $pekerjaan) { ?>
                                                <option value="<?php echo $pekerjaan['pekerjaan'];?>"><?php echo $pekerjaan['pekerjaan'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tuliskan Alamat Lengkap: Nama Jalan/Nomor Rumah/RT/RW" name="res_code">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="provinsi" id="provinsi" class="select2">
                                            <option disabled="disabled" selected="selected">Provinsi</option>
                                            <?php foreach($sql_provinsi as $prov) { ?>
                                            <option value="<?php echo $prov['kode'];?>"><?php echo $prov['nama'];?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
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
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Nomor HP" name="nomorhp">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="file" placeholder="Nomor HP" name="nomorhp">
                                </div>
                            </div>
                        </div>  
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="asalsekolah" class="select2">
                                    <option disabled="disabled" selected="selected">Asal SD</option>
                                    <?php foreach($sql_asalsekolah as $sd) { ?>
                                        <option value="<?php echo $sd['namasekolah'];?>"><?php echo $sd['namasekolah'];?></option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-20">
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
 $(function(){
   $('.select2').select2();       
 });

 $(document).ready(function() {
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
