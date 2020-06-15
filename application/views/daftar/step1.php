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
                    <h3 class="title">Daftar Menggunakan NISN</h3>
                    <form method="POST" action="<?php echo base_url('daftar/step1');?>">
                    
                    <?php if(isset($error) && $error == TRUE) { ?>
                        <div style="color:red;">
                            <?php echo $msg; ?> 
                        </div> 
                        <?php } ?>  
                        <div class="input-group">
                            <input value="<?php echo $this->input->post('nisn'); ?>" class="input--style-1" type="text" placeholder="Masukkan NISN" name="nisn">
                        </div> 
                        
                        <div class="row row-space">
                                <a href="http://103.125.7.51" class="btn btn--radius"  style="text-decoration:none;background: #c10606;">
                                    Batal
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
