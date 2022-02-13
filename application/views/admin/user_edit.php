<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Menambahkan User</h3> <br> <br>
    </div>

    <div class="box-body">
        <form action="<?php echo site_url('admin/user/update') ?>" method="post" style="width: 50%;">
            <input type="hidden" name="id" value="<?php echo $row->id ?>">

               <div class="form-grup">
                    <label for="id_kelas">Kelas *</label>
                    <select name="id_kelas" id="id_kelas" class="form-control">
                        <?php foreach ($kelas as $kls) : ?>
                        <option value="<?php echo $kls->id ?>" <?php echo $kls->id == $row->id_kelas ? 'selected' : '' ?>> <?php echo $kls->nama ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-grup"> <br>
                    <label for="nama">Nama *</label>
                    <input type="text" name="nama" id="nama" class="form-control" required value="<?php echo $row->nama ?>"/>
                </div>
                <div class="form-grup"> <br>
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" class="form-control" required value="<?php echo $row->email ?>"/>
                </div>
                <div class="form-grup"> <br>
                    <label for="level">Level *</label>
                    <select name="level" id="level" class="form-control">
                        <option value="siswa" <?php echo $row->level == 'siswa' ? 'selected' : '' ?> >Siswa</option>
                        <option value="admin" <?php echo $row->level == 'admin' ? 'selected' : '' ?> >Admin</option>
                    </select>
                </div>
            
            <a href="<?php echo site_url('admin/user') ?>" class="btn bg-blue" style="margin-top: 40px;"> <i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn bg-purple " style="margin-top: 40px; margin-left: 10px;"> <i class="fa fa-save"></i>  Update</button>
        </form>
    </div>
</div>
</section>