<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Suara User</h3> <br> <br>
        <?php echo $this->session->flashdata('message3'); ?>
    </div>

    <div class="box-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>No Calon</th>
                  <th>Created</th>
                </tr>
            </thead>

            <tbody>
                <?php $no =1;
                foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama_user ?></td>
                    <td><?php echo $row->no_calon ?></td>
                    <td><?php echo $row->created ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/suara/hapus/'.$row->id_suara ); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Dihapus')">
                        <i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
</section>