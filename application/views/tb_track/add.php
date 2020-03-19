<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Track Add</h3>
            </div>
            <?php echo form_open('tb_track/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="status_pemeriksaan" class="control-label">Status Pemeriksaan</label>
						<div class="form-group">
							<select name="status_pemeriksaan" class="form-control">
								<option value="">select</option>
								<?php 
								$status_pemeriksaan_values = array(
									'Proses'=>'Proses Pemeriksaan',
									'Selesai'=>'Selasai Pemeriksaan',
								);

								foreach($status_pemeriksaan_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status_pemeriksaan')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_sampel" class="control-label">Id Sampel</label>
						<div class="form-group">
							<input type="text" name="id_sampel" value="<?php echo $this->input->post('id_sampel'); ?>" class="form-control" id="id_sampel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_lab" class="control-label">Id Lab</label>
						<div class="form-group">
							<input type="text" name="id_lab" value="<?php echo $this->input->post('id_lab'); ?>" class="form-control" id="id_lab" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_pasien" class="control-label">Id Pasien</label>
						<div class="form-group">
							<input type="text" name="id_pasien" value="<?php echo $this->input->post('id_pasien'); ?>" class="form-control" id="id_pasien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_proses" class="control-label">Time Proses</label>
						<div class="form-group">
							<input type="text" name="time_proses" value="<?php echo $this->input->post('time_proses'); ?>" class="form-control" id="time_proses" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan_hasil" class="control-label">Keterangan Hasil</label>
						<div class="form-group">
							<textarea name="keterangan_hasil" class="form-control" id="keterangan_hasil"><?php echo $this->input->post('keterangan_hasil'); ?></textarea>
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