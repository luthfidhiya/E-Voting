<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Menambahkan Visi & Misi</h3> <br> <br>
    </div>

    <div class="box-body">
        <form action="<?php echo site_url('admin/visi_misi/update') ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $row->id ?> ">

            <div class="form-grup">
                <label for="id_kandidat">Nama Kandidat</label>
                <input id="id_kandidat" name="id_kandidat" class="form-control" value="Calon Kandidat ke-<?php echo $row->id_kandidat ?>" disabled>
            </div> <br>
            <div class="form-grup">
                <label for="visi">Visi</label>
                <textarea id="visi" name="visi" class="form-control ckeditor" required>
                    <?php echo $row->visi ?>
                </textarea>
            </div> <br>
            <div class="form-grup">
                <label for="misi">Misi</label>
                <textarea id="misi" name="misi" class="form-control ckeditor" required>
                    <?php echo $row->misi ?>
                </textarea>
            </div>
 
            <a href="<?php echo site_url('admin/visi_misi') ?>" class="btn bg-blue" style="margin-top: 40px;"> <i class="fa fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn bg-purple " style="margin-top: 40px; margin-left: 10px;"> <i class="fa fa-save"></i>  Update</button>
        </form>
    </div>
</div>
</section>