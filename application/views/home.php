<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style2.css"/>
		<script src="<?php echo base_url('assets/'); ?>js/64d58efce2.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Scada:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

		<title><?php echo $title ?></title>
	</head>
	<body>
        <div class="container">
            <div class="text-center mt-2">
                <h1>Selamat Datang <i class="judul"><?php echo $this->session->userdata('nama');?> </i> !</h1>
                <h2 class="edit">Tentukan Pilihanmu !</h2>
            </div>
        </div>
        
        <div class="container mt-4 py-4">
        <div class="row">
            <?php foreach ($kandidat as $knd) : ?>
            <div class="col-md mb-3">
                <div class="card rounded-5">
                    <img src="<?php echo base_url('assets/img/' .$knd->foto); ?>" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary"><?php echo $knd->no_calon ?></h5>
                        <p class="card-text text-center"><?php echo $knd->nama_calon ?></p>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo site_url('home/visimisi/' . $knd->id); ?>" class="btn btn-sm btn-primary"> <i class="fas fa-eye"></i> Visi & Misi</a>

                            <?php if ($user->status  == 0) : ?>
                                <a href="#" class="btn btn-sm btn-success" data-id_user="<?php echo $this->session->userdata('id'); ?>" data-nama_kandidat="<?php echo $knd->no_calon ?>" > <i class="fas fa-check"></i> Pilih <?php echo $knd->no_calon ?></a>
                            <?php else: ?>
                                <button class="btn btn-sm btn-success" disabled > <i class="fas fa-check"></i> Pilih <?php echo $knd->no_calon ?></button>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-md-12 mt-4 text-center">
            <a href="<?php echo site_url('auth/logout/'); ?>" class="btn btn-lg btn-primary"> <i class="fa fa-sign-out"></i> Keluar</a>
            </div>
        </div>
        </div>
    
    
    <footer class="main-footer text-center mt-5">
    <strong>Copyright &copy; 2021 <a href="https://github.com/luthfidhiya" target="blank">Luthfi Dhiya Ulhaq</a>.</strong> Web Developer.
    </footer>


	</body>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>sweetalert/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn-success').on('click', function () {
            let nama_kandidat = $(this).data('nama_kandidat');
            let id_user = $(this).data('id_user');

                Swal.fire({
                title: 'Apakah Anda Yakin?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:'post',
                        url: '<?php echo site_url('home/pilih_kandidat') ?>',
                        dataType:'json',
                        data : {
                            'no_calon' : nama_kandidat,
                            'id_user' : id_user,
                        },
                        success: function(result) {
                            if (result.success == true) {
                                Swal.fire({
                                title: 'Berhasil Melakukan Voting',
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oke'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                                })
                            }
                        }
                    })
                }
                })
            
            })
        });

        
</script>


</html>