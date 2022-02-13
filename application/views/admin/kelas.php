<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Data Kelas</h3> <br> <br>
        <?php echo $this->session->flashdata('message1'); ?>
        <a href="<?php echo site_url('admin/kelas/tambah') ?>" class="btn bg-green"> <i class="fa fa-plus-circle"></i> Tambah kelas</a>
    </div>

    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no =1;
                foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/kelas/edit/'.$row->id ); ?>" class="btn btn-sm btn-info">
                        <i class="fa fa-pencil-square-o"></i> Edit</a>
                        <a href="<?php echo site_url('admin/kelas/hapus/'.$row->id ); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Dihapus')" style="margin-left: 10px;">
                        <i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
</section>