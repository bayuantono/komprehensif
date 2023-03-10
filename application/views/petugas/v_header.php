<!DOCTYPE html>
<html>
<head>
	<title>Petugas - Sistem Informasi Mutasi KK</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/awesome/css/font-awesome.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js' ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo base_url().'petugas'; ?>">MUTASI KK</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" 
			aria-controls="navbarText" aria-expanded="false" arialabel="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas'; ?>">
			<i class="fa fa-home"></i> Dashboard</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/ambilsip'; ?>">
			<i class="fa fa-users"></i> SIP</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/penduduk'; ?>">
			<i class="fa fa-user"></i> Penduduk</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/kk_lama'; ?>">
			<i class="fa fa-book"></i> KK Lama</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/kk_baru'; ?>">
			<i class="fa fa-book"></i> KK Baru</a></li>
			<li class="nav-item"><a href="<?php echo base_url().'petugas/ganti_password'; ?>" class="nav-link" >
			<i class="fa fa-lock"></i> Ganti Password</a></li>
		</ul>
		<span class="navbar-text mr-3 text-center">Halo, <?php echo $this->session->userdata('username'); ?> [Petugas]</span>
		<a href="<?php echo base_url().'petugas/logout' ?>" class="btn btn-outline-light ml-1">
			<i class="fa fa-power-off"></i> KELUAR</a>
	</div>
	</div>
</nav>
<br/>
<br/>
</body>
</html>