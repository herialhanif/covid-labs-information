<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Pasien Edit</h3>
            </div>
			<?php echo form_open('tb_pasien/edit/'.$tb_pasien['id_pasien']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomer_pasien" class="control-label">Nomer Pasien</label>
						<div class="form-group">
							<input type="text" name="nomer_pasien" value="<?php echo ($this->input->post('nomer_pasien') ? $this->input->post('nomer_pasien') : $tb_pasien['nomer_pasien']); ?>" class="form-control" id="nomer_pasien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_pasien" class="control-label">Nama Pasien</label>
						<div class="form-group">
							<input type="text" name="nama_pasien" value="<?php echo ($this->input->post('nama_pasien') ? $this->input->post('nama_pasien') : $tb_pasien['nama_pasien']); ?>" class="form-control" id="nama_pasien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $tb_pasien['alamat']); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp" class="control-label">No Hp</label>
						<div class="form-group">
							<input type="text" name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $tb_pasien['no_hp']); ?>" class="form-control" id="no_hp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp_wali" class="control-label">No Hp Wali</label>
						<div class="form-group">
							<input type="text" name="no_hp_wali" value="<?php echo ($this->input->post('no_hp_wali') ? $this->input->post('no_hp_wali') : $tb_pasien['no_hp_wali']); ?>" class="form-control" id="no_hp_wali" />
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