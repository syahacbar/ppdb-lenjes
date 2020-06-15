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
                <div class="card-body">
                    <div style="font-size:22px; font-weight:bold; text-align:center; text-decoration:underline">Formulir Penerimaan Peserta Didik Baru</div>
                    <div style="font-size:16px; font-weight:bold; text-align:center;"><?php echo "No. Pendaftaran: ".$nopendaftaran;?></div>
                    <br />
                   <center> <img width=150 height=200 src="<?php echo $pendaftar['filefoto']?>"></center>
                    <form method="POST"  action="<?php echo base_url('daftar/step3');?>" enctype="multipart/form-data">                    
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="nisn" class="input--style-1"  type="text" value="<?php echo 'NISN : '.$pendaftar['nisn'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="nik" class="input--style-1"  type="text" value="<?php echo 'NIK : '.$pendaftar['nik'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input readonly name="namapendaftar" class="input--style-1"  type="text" value="<?php echo 'Nama : '.$pendaftar['namapendaftar'];?>">
                    </div>
                    <div class="input-group">
                        <input readonly class="input--style-1"  type="text" value="<?php echo 'Tempat Tgl Lahir : '.$pendaftar['tempatlahir'].', '.$pendaftar['tgllahir'];?>">
                        <input name="tempatlahir" type="hidden" value="<?php echo $pendaftar['tempatlahir'];?>">
                        <input name="tgllahir" type="hidden" value="<?php echo $pendaftar['tgllahir'];?>">
                    </div>
                    
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="jenkel" class="input--style-1"  type="text" value="<?php echo 'Jenis Kelamin : '.$pendaftar['jenkel'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="agama" class="input--style-1"  type="text" value="<?php echo 'Agama : '.$pendaftar['agama'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="namaayah" class="input--style-1"  type="text" value="<?php echo 'Nama Ayah : '.$pendaftar['namaayah'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="pekerjaanayah" class="input--style-1"  type="text" value="<?php echo 'Pekerjaan : '.$pendaftar['pekerjaanayah'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="namaibu" class="input--style-1"  type="text" value="<?php echo 'NISN : '.$pendaftar['namaibu'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly name="pekerjaanibu" class="input--style-1"  type="text" value="<?php echo 'Pekerjaan : '.$pendaftar['pekerjaanibu'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input readonly name="alamatlengkap" class="input--style-1"  type="text" value="<?php echo 'Alamat : '.$pendaftar['alamatlengkap'];?>">
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly class="input--style-1"  type="text" value="<?php echo 'Provinsi : '. $provinsi['nama'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                            <input readonly class="input--style-1"  type="text" value="<?php echo 'Kabupaten/Kota : '. $kabupaten['nama'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input readonly class="input--style-1"  type="text" value="<?php echo 'Kecamatan/Distrik : '. $distrik['nama'];?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                            <input readonly class="input--style-1"  type="text" value="<?php echo 'Kelurahan/Desa : '. $desa['nama'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input readonly name="asalsekolah" class="input--style-1"  type="text" value="<?php echo 'Asal Sekolah : '.$pendaftar['asalsekolah'];?>">
                    </div>
                    <div class="input-group">
                        <input readonly name="sekolahtujuan" class="input--style-1"  type="text" value="<?php echo 'Sekolah Tujuan : '.$pendaftar['sekolahtujuan'];?>">
                    </div>
                    <div class="input-group">
                        <input readonly name="tgldaftar" class="input--style-1"  type="text" value="<?php echo 'Tanggal Mendaftar : '.$pendaftar['tgldaftar'];?>">
                    </div>
                    <div style="color:red;">Dengan ini saya menyatakan akan melakukan pendaftaran peserta didik baru</div>
                    <br/>
                        <div class="row row-space">
                                <a href="<?php echo base_url('daftar/step2');?>" class="btn btn--radius"  style="text-decoration:none; background: #c10606;">
                                    Kembali
                                </a>
                                <button name="btnKonfirmasi" class="btn btn--radius btn--green" type="submit">Daftar</button>
                            
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
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
