<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Sampel Add</h3>
            </div>
            <?php echo form_open('tb_sampel/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="status_sampel" class="control-label">Status Sampel</label>
						<div class="form-group">
							<select name="status_sampel" class="form-control">
								<option value="">select</option>
								<?php 
								$status_sampel_values = array(
									'Ringan'=>'Sampel Ringan',
									'Sedang'=>'Sampel Sedang',
									'Berbahaya'=>'Sampel Berbahaya',
								);

								foreach($status_sampel_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status_sampel')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomer_pasien" class="control-label">Nomer Pasien</label>
						<div class="form-group">
							<input type="text" name="nomer_pasien" value="<?php echo $this->input->post('nomer_pasien'); ?>" class="form-control" id="nomer_pasien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kategori_sampel" class="control-label">Kategori Sampel</label>
						<div class="form-group">
							<input type="text" name="kategori_sampel" value="<?php echo $this->input->post('kategori_sampel'); ?>" class="form-control" id="kategori_sampel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_ambil_sampel" class="control-label">Tgl Ambil Sampel</label>
						<div class="form-group">
							<input type="text" name="tgl_ambil_sampel" value="<?php echo $this->input->post('tgl_ambil_sampel'); ?>" class="has-datetimepicker form-control" id="tgl_ambil_sampel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
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