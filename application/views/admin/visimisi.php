<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Visi & Misi Calon Kandidat</h3> <br> <br>
        <?php echo $this->session->flashdata('message3'); ?>
    </div>

    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No Calon</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row->no_calon ?></td>
                    <td><?php echo $row->visi ?></td>
                    <td><?php echo $row->misi ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/visi_misi/edit/'.$row->id ); ?>" class="btn btn-sm btn-info">
                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
</section>