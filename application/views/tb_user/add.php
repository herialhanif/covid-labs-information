<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb User Add</h3>
            </div>
            <?php echo form_open('tb_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="level_user" class="control-label">Level User</label>
						<div class="form-group">
							<select name="level_user" class="form-control">
								<option value="">select</option>
								<?php 
								$level_user_values = array(
									'superadmin'=>'Super Admin',
									'administrator'=>'Admin App',
									'lab'=>'Petugas Lab',
								);

								foreach($level_user_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('level_user')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_user" class="control-label">Nama User</label>
						<div class="form-group">
							<input type="text" name="nama_user" value="<?php echo $this->input->post('nama_user'); ?>" class="form-control" id="nama_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat_user" class="control-label">Alamat User</label>
						<div class="form-group">
							<input type="text" name="alamat_user" value="<?php echo $this->input->post('alamat_user'); ?>" class="form-control" id="alamat_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kode_level" class="control-label">Kode Level</label>
						<div class="form-group">
							<input type="text" name="kode_level" value="<?php echo $this->input->post('kode_level'); ?>" class="form-control" id="kode_level" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_hp_user" class="control-label">No Hp User</label>
						<div class="form-group">
							<textarea name="no_hp_user" class="form-control" id="no_hp_user"><?php echo $this->input->post('no_hp_user'); ?></textarea>
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