<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Kandidat</h3> <br> <br>
        <?php echo $this->session->flashdata('message2'); ?>
        
    </div>

    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No Calon</th>
                  <th>Nama Calon</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no =1;
                foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row->no_calon ?></td>
                    <td><?php echo $row->nama_calon ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/img/' .$row->foto); ?>" width="100">
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/kandidat/edit/'.$row->id ); ?>" class="btn btn-sm btn-info">
                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</section>