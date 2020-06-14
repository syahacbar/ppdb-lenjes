<html>
<head>
<title>Form PPDB</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="<?php echo base_url('resources/css/form.css');?>">
<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap-datepicker.min.css');?>">
<style>
.select2-selection__rendered {
    line-height: 31px !important;
}
.select2-container .select2-selection--single {
    height: 35px !important;
}
.select2-selection__arrow {
    height: 34px !important;
}
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="<?php echo base_url('resources/js/bootstrap-datepicker.min.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container">
<br>  

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 700px;">
	<h4 class="card-title mt-3 text-center">PORTAL SATU PINTU PPDB-SMP KABUPATEN TELUK BINTUNI</h4>
	<p class="text-center">Penerimaan Peserta Didik Baru Sekolah Menengah Pertama (SMP)</p>
	
	<div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> NISN : <?php echo $pendaftar['nisn'];?></span>
                    <span class="input-group-text" style="width:50%;"> NIK : <?php echo $pendaftar['nik'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:100%;"> Nama Lengkap : <?php echo $pendaftar['namapendaftar'];?> </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:100%;"> Tempat Tanggal Lahir : <?php echo $pendaftar['tempatlahir'].' '.$pendaftar['tgllahir'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;">Jenis Kelamin : <?php echo $pendaftar['jenkel'];?>  </span>
                    <span class="input-group-text" style="width:50%;">Agama : <?php echo $pendaftar['agama'];?> </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:100%;"> Alamat : <?php echo $pendaftar['alamatlengkap'];?>  </span>
                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> Provinsi : Papua Barat  </span>
                    <span class="input-group-text" style="width:50%;"> Kabupaten/Kota : <?php echo $kabupaten['nama'];?>  </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> Kecamatan/Distrik : <?php echo $distrik['nama'];?> </span>
                    <span class="input-group-text" style="width:50%;"> Kelurahan/Desa :  <?php echo $desa['nama'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> Nama Ayah : <?php echo $pendaftar['namaayah'];?> </span>
                    <span class="input-group-text" style="width:50%;"> Pekerjaan : <?php echo $pendaftar['pekerjaanayah'];?> </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> Nama Ibu : <?php echo $pendaftar['namaibu'];?> </span>
                    <span class="input-group-text" style="width:50%;"> Pekerjaan : <?php echo $pendaftar['pekerjaanibu'];?> </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:50%;"> Nomor HP : <?php echo $pendaftar['nomorhp'];?> </span>
                    <span class="input-group-text" style="width:50%;"> Tgl Mendaftar : <?php echo $pendaftar['tgldaftar'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:100%;"> Asal Sekolah : <?php echo $pendaftar['asalsekolah'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group input-group">
                    <span class="input-group-text" style="width:100%;"> Sekolah Tujuan : <?php echo $pendaftar['sekolahtujuan'];?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                <form method="post" action="<?php echo base_url('daftar/konfirmasidata');?>">
                    <button name="btnKonfirmasi" type="submit" class="btn btn-primary btn-block"> Simpan dan Cetak Formulir </button>
                </form>
                </div> <!-- form-group// -->   
            </div>
        </div>
    </div>
</body>
</html>