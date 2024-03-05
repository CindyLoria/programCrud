<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="<?= base_url ('assets/css/style.css') ?>">
	<title>AdminSite</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> Hai </a>
		<ul class="side-menu">
			<li><a href="<?= base_url ('/login') ?>" class="active"><i class='bx bxs-dashboard icon' ></i> Beranda</a></li>
			<!-- <li class="divider" data-text="main">Kelola</li> -->
			<li><a href="<?=base_url('/daftar')?>"><i class='bx bxs-inbox icon' ></i> Data Mahasiswa </a></li>
      <li><a href="<?= base_url('/user/create') ?>"><i class='bx bxs-plus-circle icon' ></i> Tambah Data</a></li>
      <li><a href="<?= base_url ('/admin') ?>"><i class='bx bxs-dashboard icon' ></i> Keluar</a></li>

		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">

		<!-- MAIN -->
    <div class="card">
      <div class="left-container">
        <img src="https://cdn.pixabay.com/photo/2015/01/08/18/29/entrepreneur-593358__480.jpg" alt="Profile Image">
        <br>
        <h2 class="gradienttext">Cindy Loria</h2>
      </div>
      <div class="right-container">
        <h3 class="gradienttext">Profile Details</h3>
        <table>
            <tr>
                <td>Nama :</td>
                <td>Cindy Loria</td>
              </tr>
            <tr>
              <td>Tanggal Lahir :</td>
              <td>20</td>
            </tr>
            <tr>
              <td>Universitas :</td>
              <td>+91 XXXXXXXXXX</td>
            </tr>
            <tr>
              <td>Alamat :</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Email :</td>
              <td>123 Main St, Anytown, USA</td>
            </tr>
        </table>
      </div>
    </div>


		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>