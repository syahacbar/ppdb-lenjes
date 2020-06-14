<html>
<head>
<title>PPDB-SMP Online Kabupaten Sorong</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="<?php echo base_url('resources/css/form.css');?>">

</head>
<body>

<div class="container">
<br>  





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 700px;">
	<h4 class="card-title mt-3 text-center">PORTAL SATU PINTU PPDB-SMP KABUPATEN SORONG</h4>
	<p class="text-center">Penerimaan Peserta Didik Baru Sekolah Menengah Pertama (SMP)</p>
	
	<form method="POST" action="<?php echo base_url('daftar/ceknisn');?>">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-hashtag"></i> </span>
		 </div>
        <input value="<?php echo ($this->input->post('nisn') ? $this->input->post('nisn') : $casis['nisn']); ?>" name="nisn" class="form-control" placeholder="Masukkan NISN" type="number" maxlength="8">
		
	</div> <!-- form-group// -->   
	<?php if(isset($error) && $error == TRUE) { ?>
	<div class="alert alert-danger  alert-dismissible fade show" role="alert">
		<?php echo $msg; ?> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div> 
	<?php } ?>   
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Selanjutnya  </button>
    </div> <!-- form-group// -->                                                                    
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


</body>
</html>