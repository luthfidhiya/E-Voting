<section class="content">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Menambahkan Data Kelas</h3> <br> <br>
        <a href="<?php echo site_url('admin/kelas') ?>" class="btn bg-blue"> <i class="fa fa-arrow-left"></i> Kembali</a>
        <button type="button" class="btn bg-green" id="btn-form-tmbh" style="margin-left: 10px;" > <i class="fa fa-plus-circle"></i>  Tambah Form</button>
    </div>

    <div class="box-body">
        <form action="<?php echo site_url('admin/kelas/simpan') ?>" method="post">
            <table id="table" width="30%">
                <tr>
                    <td>
                    <div class="form-grup">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" placeholder="" name="nama[]" id="nama" class="form-control" required/>
                    </div>
                    </td>
                    <td>
                        <button type="button" id="btn-minus" class="btn btn-danger btn-sm" style="margin-top: 26px; margin-left: 10px;" disabled ><i class="fa fa-minus-circle"></i></button>
                    </td>
                </tr>
            </table>
            <button type="reset" class="btn bg-purple " style="margin-top: 40px;"> <i class="fa fa-refresh"></i>  Reset</button>
            <button type="submit" class="btn bg-purple " style="margin-top: 40px; margin-left: 10px;"> <i class="fa fa-save"></i>  Simpan</button>
        </form>
    </div>
</div>
</section>

<script>
    $(document).ready(function() {
        $('#btn-form-tmbh').on('click', function() {
            $('#table').append(`
            <tr>
                    <td>
                    <div class="form-grup">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" placeholder="" name="nama[]" id="nama" class="form-control" required/>
                    </div>
                    </td>
                    <td>
                        <button type="button" id="btn-minus" class="btn btn-danger btn-sm" style="margin-top: 26px; margin-left: 10px;"><i class="fa fa-minus-circle"></i></button>
                    </td>
                </tr>
            `);
        })

        $('#table').on('click', '#btn-minus', function() {
            $(this).closest("tr").remove();
        })
    });
</script>