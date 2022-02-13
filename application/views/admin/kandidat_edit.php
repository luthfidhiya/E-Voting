<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Mengedit Data <?php echo $row->no_calon ?></h3>
    </div>

    <div class="box-body">
    <?php echo form_open_multipart('admin/kandidat/update');?>
        <input type="hidden" name="id" value="<?php echo $row->id ?>">

        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo base_url('assets/img/'.$row->foto) ?>" style="height: 180px;">
            </div>
            <div class="col-md-9">
                <div class="form-group">
                <label for="no_calon">No Calon</label>
                <input type="text" name="no_calon" id="no_calon" class="form-control" value="<?php echo $row->no_calon ?>" disabled>
                </div>
                <div class="form-group">
                <label for="nama_calon">Nama Calon</label>
                <input type="text" name="nama_calon" id="nama_calon" class="form-control" value="<?php echo $row->nama_calon ?>">
                </div>
                <div class="form-group">
                <label for="foto">Ganti Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
                </div>
            </div>
        </div>

        <a href="<?php echo site_url('admin/kandidat') ?>" class="btn bg-blue" style="margin-top: 20px;" > <i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="submit" class="btn bg-purple " style="margin-top: 20px; margin-left: 10px;"> <i class="fa fa-save"></i>  Update</button>
    </form>
    </div>
</div>
</section>