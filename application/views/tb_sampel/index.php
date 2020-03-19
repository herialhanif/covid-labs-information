<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Sampel Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_sampel/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Sampel</th>
						<th>Status Sampel</th>
						<th>Nomer Pasien</th>
						<th>Kategori Sampel</th>
						<th>Tgl Ambil Sampel</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_sampel as $t){ ?>
                    <tr>
						<td><?php echo $t['id_sampel']; ?></td>
						<td><?php echo $t['status_sampel']; ?></td>
						<td><?php echo $t['nomer_pasien']; ?></td>
						<td><?php echo $t['kategori_sampel']; ?></td>
						<td><?php echo $t['tgl_ambil_sampel']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_sampel/edit/'.$t['id_sampel']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_sampel/remove/'.$t['id_sampel']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
