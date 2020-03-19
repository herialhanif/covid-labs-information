<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Track Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_track/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Status Pemeriksaan</th>
						<th>Id Sampel</th>
						<th>Id Lab</th>
						<th>Id Pasien</th>
						<th>Time Proses</th>
						<th>Keterangan Hasil</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_track as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['status_pemeriksaan']; ?></td>
						<td><?php echo $t['id_sampel']; ?></td>
						<td><?php echo $t['id_lab']; ?></td>
						<td><?php echo $t['id_pasien']; ?></td>
						<td><?php echo $t['time_proses']; ?></td>
						<td><?php echo $t['keterangan_hasil']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_track/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_track/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
