<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pendaftars Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pendaftar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Jenkel</th>
						<th>Namapendaftar</th>
						<th>Tempatlahir</th>
						<th>Tgllahir</th>
						<th>Agama</th>
						<th>Alamatlengkap</th>
						<th>Kodealamat</th>
						<th>Namaayah</th>
						<th>Namaibu</th>
						<th>Pekerjaanayah</th>
						<th>Pekerjaanibu</th>
						<th>Nomorhp</th>
						<th>Asalsekolah</th>
						<th>Tgldaftar</th>
						<th>Filefoto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pendaftars as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['jenkel']; ?></td>
						<td><?php echo $t['namapendaftar']; ?></td>
						<td><?php echo $t['tempatlahir']; ?></td>
						<td><?php echo $t['tgllahir']; ?></td>
						<td><?php echo $t['agama']; ?></td>
						<td><?php echo $t['alamatlengkap']; ?></td>
						<td><?php echo $t['kodealamat']; ?></td>
						<td><?php echo $t['namaayah']; ?></td>
						<td><?php echo $t['namaibu']; ?></td>
						<td><?php echo $t['pekerjaanayah']; ?></td>
						<td><?php echo $t['pekerjaanibu']; ?></td>
						<td><?php echo $t['nomorhp']; ?></td>
						<td><?php echo $t['asalsekolah']; ?></td>
						<td><?php echo $t['tgldaftar']; ?></td>
						<td><?php echo $t['filefoto']; ?></td>
						<td>
                            <a href="<?php echo site_url('pendaftar/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pendaftar/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
