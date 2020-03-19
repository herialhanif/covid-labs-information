<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Lab Edit</h3>
            </div>
			<?php echo form_open('tb_lab/edit/'.$tb_lab['id_lab']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_lab" class="control-label">Nama Lab</label>
						<div class="form-group">
							<input type="text" name="nama_lab" value="<?php echo ($this->input->post('nama_lab') ? $this->input->post('nama_lab') : $tb_lab['nama_lab']); ?>" class="form-control" id="nama_lab" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tb_lab['keterangan']); ?></textarea>
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