<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Menambahkan User</h3> <br> <br>
    </div>

    <div class="box-body">
        <form action="<?php echo site_url('admin/user/simpan') ?>" method="post">
            <table id="table" width="50%">
                <tr>
                    <td>
                    <div class="form-grup">
                        <label for="id_kelas">Kelas *</label>
                        <select name="id_kelas" id="id_kelas" class="form-control">
                            <?php foreach ($kelas as $kls) : ?>
                                <option value="<?php echo $kls->id ?>"> <?php echo $kls->nama ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-grup"> <br>
                        <label for="nama">Nama *</label>
                        <input type="text" name="nama" id="nama" class="form-control" required/>
                    </div>
                    <div class="form-grup"> <br>
                        <label for="email">Email *</label>
                        <input type="email" name="email" id="email" class="form-control" required/>
                    </div>
                    <div class="form-grup"> <br>
                        <label for="password">Password *</label>
                        <input type="password" name="password" id="password" class="form-control" required/>
                    </div>
                    <div class="form-grup"> <br>
                        <label for="level">Level *</label>
                        <select name="level" id="level" class="form-control">
                            <option value="siswa">Siswa</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    </td>
                </tr>
            </table>
            <a href="<?php echo site_url('admin/user') ?>" class="btn bg-blue" style="margin-top: 40px;"> <i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn bg-purple " style="margin-top: 40px; margin-left: 10px;"> <i class="fa fa-save"></i>  Simpan</button>
        </form>
    </div>
</div>
</section>