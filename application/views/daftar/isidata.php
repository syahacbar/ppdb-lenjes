<html>
<head>
<title>PPDB-SMP Online Kabupaten Sorong</title>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="<?php echo base_url('resources/js/bootstrap-datepicker.min.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container">
<br>  

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 700px;">

    <?php if(isset($error) && $error == TRUE) { ?>
	<div class="alert alert-danger  alert-dismissible fade show" role="alert">
		<?php echo validation_errors(); ?> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div> 
	<?php } ?>   
    
	<h4 class="card-title mt-3 text-center">PORTAL SATU PINTU PPDB-SMP KABUPATEN SORONG</h4>
	<p class="text-center">Penerimaan Peserta Didik Baru Sekolah Menengah Pertama (SMP)</p>
	
	<form method="post" action="<?php echo base_url('daftar/isidata');?>">
    <input name="nisn" type="hidden" value="<?php echo $casis['nisn'];?>">
    <input name="tgldaftar" type="hidden" value="<?php echo date('Y-m-d H:i:s')?>">
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
     </div>
        <select name="sekolahtujuan" class="form-control select2" id="sekolahtujuan" style="width: 90%;">
		    <option selected="">Ketik Untuk Mencari Sekolah Tujuan</option>
            <?php foreach($sql_sekolahtujuan as $smp) { ?>
            <option value="<?php echo $smp['nama_smp'];?>"><?php echo $smp['nama_smp'];?></option>
            <?php } ?>
        </select>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $casis['nama']); ?>" name="namapendaftar" class="form-control" placeholder="Nama Lengkap (Sesuai Ijasah/Akta Lahir)" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
		 </div>
        <input name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" type="number"  maxlength="16">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
		</div>
		<input value="<?php echo ($this->input->post('tempatlahir') ? $this->input->post('tempatlahir') : $casis['tempatlahir']); ?>" style="width:50%" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" type="text">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		</div>
		<input value="<?php echo ($this->input->post('tgllahir') ? $this->input->post('tgllahir') : $casis['tgllahir']); ?>" style="width:30%" name="tgllahir" class="form-control datepicker" placeholder="Tanggal Lahir" type="text">
    	
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
        <select name="jenkel" class="custom-select" style="width: 40%;">
		    <option selected="">Jenis Kelamin</option>
            <?php 
                $jk = array(
					'Laki-laki'=>'Laki-laki',
					'Perempuan'=>'Perempuan',
				);
				foreach($jk as $value => $display_text)
				{
					$selected = ($value == $casis['jenkel']) ? ' selected="selected"' : "";
					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
			?>
		</select>
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<select name="agama" class="custom-select" style="width: 40%;">
		    <option selected="">Agama</option>
		    <option value="Islam">Islam</option>
		    <option value="Kristen Protestan">Kristen Protestan</option>
		    <option value="Katolik">Katolik</option>
		    <option value="Hindu">Hindu</option>
		    <option value="Budha">Budha</option>
		    <option value="Kong Hu Cu">Kong Hu Cu</option>
		</select>
    	
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
		 </div>
        <input name="namaayah" class="form-control" placeholder="Nama Ayah" type="text">
        <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		 </div>
        <select name="pekerjaanayah" class="form-control select2">
			<option selected="">Pekerjaan</option>
            <?php foreach($sql_pekerjaan as $pekerjaan) { ?>
			    <option value="<?php echo $pekerjaan['pekerjaan'];?>"><?php echo $pekerjaan['pekerjaan'];?></option>
            <?php } ?>
		</select>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
		 </div>
        <input name="namaibu" class="form-control" placeholder="Nama Ibu" type="text">
        <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		 </div>
        <select name="pekerjaanibu" class="form-control select2">
			<option selected="">Pekerjaan</option>
            <?php foreach($sql_pekerjaan as $pekerjaan) { ?>
			    <option value="<?php echo $pekerjaan['pekerjaan'];?>"><?php echo $pekerjaan['pekerjaan'];?></option>
            <?php } ?>
		</select>
    </div> <!-- form-group// -->    
    <div class="form-group input-group">
        <textarea name="alamatlengkap" placeholder="Tuliskan Alamat Lengkap: Nama Jalan, Nomor Rumah, RT/RW" class="form-control"></textarea>
    </div> <!-- form-group// -->
                               
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map"></i> </span>
		 </div>
        <select name="kabupaten" class="form-control" id="kabupaten">
            <option selected="">Pilih Kabupaten/Kota</option>
            <?php foreach($sql_kabupaten as $kab) { ?>
			<option value="<?php echo $kab['kode'];?>"><?php echo $kab['nama'];?></option>
            <?php } ?>
		</select>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map"></i> </span>
		 </div>
        <select name="distrik" class="form-control"  id="distrik">
			<option selected="">Pilih Kecamatan/Distrik</option>
		</select>
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map"></i> </span>
		 </div>
        <select name="desa" class="form-control"  id="desa">
			<option selected="">Pilih Kelurahan/Desa</option>
		</select>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input style="width:40%" name="nomorhp" class="form-control" placeholder="Nomor HP" type="number">
        <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
         <select name="asalsekolah" class="form-control select2" id="asalsekolah" style="width: 40%;">
		    <option selected="">Ketik Untuk Mencari Sekolah Tujuan</option>
            <?php foreach($sql_asalsekolah as $sd) { ?>
            <option value="<?php echo $sd['namasekolah'];?>"><?php echo $sd['namasekolah'];?></option>
            <?php } ?>
        </select>
        
    </div> <!-- form-group// -->
            
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Selanjutnya  </button>
    </div> <!-- form-group// -->                                                                  
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
  $('.select2').select2({ width: 'resolve' });       
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
          var id_kabupaten = $("#kabupaten").val();
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
</body>
</html>