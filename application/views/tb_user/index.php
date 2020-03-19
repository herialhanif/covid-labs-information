<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Level User</th>
						<th>Password</th>
						<th>Username</th>
						<th>Nama User</th>
						<th>Alamat User</th>
						<th>Kode Level</th>
						<th>No Hp User</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_user as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['level_user']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['username']; ?></td>
						<td><?php echo $t['nama_user']; ?></td>
						<td><?php echo $t['alamat_user']; ?></td>
						<td><?php echo $t['kode_level']; ?></td>
						<td><?php echo $t['no_hp_user']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_user/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_user/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
