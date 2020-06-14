<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pendaftar Edit</h3>
            </div>
			<?php echo form_open('pendaftar/edit/'.$pendaftar['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="jenkel" class="control-label"><span class="text-danger">*</span>Jenkel</label>
						<div class="form-group">
							<select name="jenkel" class="form-control">
								<option value="">select</option>
								<?php 
								$jenkel_values = array(
									'L'=>'Laki-laki',
									'P'=>'Perempuan',
								);

								foreach($jenkel_values as $value => $display_text)
								{
									$selected = ($value == $pendaftar['jenkel']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('jenkel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="namapendaftar" class="control-label"><span class="text-danger">*</span>Namapendaftar</label>
						<div class="form-group">
							<input type="text" name="namapendaftar" value="<?php echo ($this->input->post('namapendaftar') ? $this->input->post('namapendaftar') : $pendaftar['namapendaftar']); ?>" class="form-control" id="namapendaftar" />
							<span class="text-danger"><?php echo form_error('namapendaftar');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempatlahir" class="control-label"><span class="text-danger">*</span>Tempatlahir</label>
						<div class="form-group">
							<input type="text" name="tempatlahir" value="<?php echo ($this->input->post('tempatlahir') ? $this->input->post('tempatlahir') : $pendaftar['tempatlahir']); ?>" class="form-control" id="tempatlahir" />
							<span class="text-danger"><?php echo form_error('tempatlahir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgllahir" class="control-label"><span class="text-danger">*</span>Tgllahir</label>
						<div class="form-group">
							<input type="text" name="tgllahir" value="<?php echo ($this->input->post('tgllahir') ? $this->input->post('tgllahir') : $pendaftar['tgllahir']); ?>" class="has-datepicker form-control" id="tgllahir" />
							<span class="text-danger"><?php echo form_error('tgllahir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agama" class="control-label"><span class="text-danger">*</span>Agama</label>
						<div class="form-group">
							<input type="text" name="agama" value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $pendaftar['agama']); ?>" class="form-control" id="agama" />
							<span class="text-danger"><?php echo form_error('agama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamatlengkap" class="control-label"><span class="text-danger">*</span>Alamatlengkap</label>
						<div class="form-group">
							<input type="text" name="alamatlengkap" value="<?php echo ($this->input->post('alamatlengkap') ? $this->input->post('alamatlengkap') : $pendaftar['alamatlengkap']); ?>" class="form-control" id="alamatlengkap" />
							<span class="text-danger"><?php echo form_error('alamatlengkap');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kodealamat" class="control-label">Kodealamat</label>
						<div class="form-group">
							<input type="text" name="kodealamat" value="<?php echo ($this->input->post('kodealamat') ? $this->input->post('kodealamat') : $pendaftar['kodealamat']); ?>" class="form-control" id="kodealamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="namaayah" class="control-label"><span class="text-danger">*</span>Namaayah</label>
						<div class="form-group">
							<input type="text" name="namaayah" value="<?php echo ($this->input->post('namaayah') ? $this->input->post('namaayah') : $pendaftar['namaayah']); ?>" class="form-control" id="namaayah" />
							<span class="text-danger"><?php echo form_error('namaayah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="namaibu" class="control-label"><span class="text-danger">*</span>Namaibu</label>
						<div class="form-group">
							<input type="text" name="namaibu" value="<?php echo ($this->input->post('namaibu') ? $this->input->post('namaibu') : $pendaftar['namaibu']); ?>" class="form-control" id="namaibu" />
							<span class="text-danger"><?php echo form_error('namaibu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pekerjaanayah" class="control-label"><span class="text-danger">*</span>Pekerjaanayah</label>
						<div class="form-group">
							<input type="text" name="pekerjaanayah" value="<?php echo ($this->input->post('pekerjaanayah') ? $this->input->post('pekerjaanayah') : $pendaftar['pekerjaanayah']); ?>" class="form-control" id="pekerjaanayah" />
							<span class="text-danger"><?php echo form_error('pekerjaanayah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pekerjaanibu" class="control-label"><span class="text-danger">*</span>Pekerjaanibu</label>
						<div class="form-group">
							<input type="text" name="pekerjaanibu" value="<?php echo ($this->input->post('pekerjaanibu') ? $this->input->post('pekerjaanibu') : $pendaftar['pekerjaanibu']); ?>" class="form-control" id="pekerjaanibu" />
							<span class="text-danger"><?php echo form_error('pekerjaanibu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomorhp" class="control-label"><span class="text-danger">*</span>Nomorhp</label>
						<div class="form-group">
							<input type="text" name="nomorhp" value="<?php echo ($this->input->post('nomorhp') ? $this->input->post('nomorhp') : $pendaftar['nomorhp']); ?>" class="form-control" id="nomorhp" />
							<span class="text-danger"><?php echo form_error('nomorhp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asalsekolah" class="control-label"><span class="text-danger">*</span>Asalsekolah</label>
						<div class="form-group">
							<input type="text" name="asalsekolah" value="<?php echo ($this->input->post('asalsekolah') ? $this->input->post('asalsekolah') : $pendaftar['asalsekolah']); ?>" class="form-control" id="asalsekolah" />
							<span class="text-danger"><?php echo form_error('asalsekolah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgldaftar" class="control-label">Tgldaftar</label>
						<div class="form-group">
							<input type="text" name="tgldaftar" value="<?php echo ($this->input->post('tgldaftar') ? $this->input->post('tgldaftar') : $pendaftar['tgldaftar']); ?>" class="has-datepicker form-control" id="tgldaftar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="filefoto" class="control-label">Filefoto</label>
						<div class="form-group">
							<input type="text" name="filefoto" value="<?php echo ($this->input->post('filefoto') ? $this->input->post('filefoto') : $pendaftar['filefoto']); ?>" class="form-control" id="filefoto" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>