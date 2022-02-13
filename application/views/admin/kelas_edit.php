<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Mengedit Data Kelas</h3>
    </div>

    <div class="box-body">
        <form action="<?php echo site_url('admin/kelas/update') ?>" method="post">
            <table id="table" width="30%">
                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                <tr>
                    <td>
                    <div class="form-grup">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row->nama ?>" required/>
                    </div>
                    </td>
                </tr>
            </table>
            <a href="<?php echo site_url('admin/kelas') ?>" class="btn bg-blue" style="margin-top: 20px;" > <i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn bg-purple " style="margin-top: 20px; margin-left: 10px;"> <i class="fa fa-save"></i>  Update</button>
        </form>
    </div>
</div>
</section>