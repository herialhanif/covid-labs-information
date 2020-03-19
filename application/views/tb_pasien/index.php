<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Pasien Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_pasien/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pasien</th>
						<th>Nomer Pasien</th>
						<th>Nama Pasien</th>
						<th>Alamat</th>
						<th>No Hp</th>
						<th>No Hp Wali</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_pasien as $t){ ?>
                    <tr>
						<td><?php echo $t['id_pasien']; ?></td>
						<td><?php echo $t['nomer_pasien']; ?></td>
						<td><?php echo $t['nama_pasien']; ?></td>
						<td><?php echo $t['alamat']; ?></td>
						<td><?php echo $t['no_hp']; ?></td>
						<td><?php echo $t['no_hp_wali']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_pasien/edit/'.$t['id_pasien']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_pasien/remove/'.$t['id_pasien']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
