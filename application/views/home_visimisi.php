<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css"/>
		<script src="<?php echo base_url('assets/'); ?>js/64d58efce2.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Scada:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

		<title><?php echo $title ?></title>
	</head>
	<body>

    <div class="container mt-5">
    <div class="box">
        <div class="box-body border border-1 border-secondary rounded">
            <input type="hidden" name="id" value="<?php echo $kandidat->id ?>">

            <div class="row mt-4 p-1">
                <div class="col-md-5 text-center ">
                    <img src="<?php echo base_url('assets/img/'.$kandidat->foto) ?>">
                    <h2 class="mt-3 calonnama"> <?php echo $kandidat->nama_calon ?> </h2>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ps-5">
                    <h2><?php echo $kandidat->no_calon ?></h2>
                    <h4>Visi :</h4>
                    <h6 class="ms-5"> <?php echo $visimisi->visi ?> </h6>
                    <h4>Misi :</h4>
                    <h6 class="ms-5"> <?php echo $visimisi->misi ?> </h6>
                </div>
            </div>
        </div>
    </div>
        <div class="d-flex justify-content-between mt-4">
        <a href="<?php echo site_url('home') ?>" class="btn btn-md btn-primary" > <i class="fa fa-arrow-left"></i> Kembali</a>
        <a href="<?php echo site_url('home') ?>" class="btn btn-md btn-success" data-id_user="<?php echo $this->session->userdata('id'); ?>" data-nama_kandidat="<?php echo $kandidat->no_calon ?>" > <i class="fa fa-check"></i> Pilih <?php echo $kandidat->nama_calon ?></a>
        </div>
    
    </div>

    
    <footer class="main-footer text-center mt-5">
    <strong>Copyright &copy; 2021 <a href="https://github.com/luthfidhiya" target="blank">Luthfi Dhiya Ulhaq</a>.</strong> Web Developer.
    </footer>
	</body>

<script src="<?php echo base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>sweetalert/sweetalert2.all.min.js"></script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    body {
        background-color: rgb(212, 222, 255);
        font-family: "Poppins", sans-serif;
    }

    .box-body {
        background-color: rgb(242, 245, 255);
    }

    .calonnama {
        color: rgb(140, 230, 250);
        text-shadow: 1px 2px 2px black;
    }

    img {
        height: 400px;
    }

    h2, h4 {
        color: azure;
        text-shadow: 1px 1px 3px black;
    }

    @media (max-width: 870px) {
        img {
            height: 250px;
        }
    }

</style>
    
</html>