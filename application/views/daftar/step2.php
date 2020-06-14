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
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Pilih SMP</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
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
                                        <select name="gender">
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
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Agama</option>
                                            <option>Islam</option>
                                            <option>Female</option>
                                            <option>Other</option>
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
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <option>Islam</option>
                                            <option>Female</option>
                                            <option>Other</option>
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
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Pekerjaan</option>
                                            <option>Islam</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tuliskan Alamat Lengkap: Nama Jalan/Nomor Rumah/RT/RW" name="res_code">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Kabupaten/Kota</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Kecamatan/Distrik</option>
                                            <option>Islam</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Kelurahan/Desa</option>
                                            <option>Islam</option>
                                            <option>Female</option>
                                            <option>Other</option>
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
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Asal SD</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
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
