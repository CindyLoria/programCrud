<!DOCTYPE html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' rel='stylesheet'>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/styletambah.css') ?>">
    <title>AdminSite</title>
</head>
<body>
    
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> Hai </a>
        <ul class="side-menu">
            <!-- <li class="divider" data-text="main">Kelola</li> -->
            <li><a href="<?=base_url('/user')?>" ><i class='bx bxs-inbox icon' ></i> Data Mahasiswa </a></li>
            <li><a href="<?= base_url('/user/create') ?>" class="active"><i class='bx bxs-plus-circle icon' ></i> Tambah Data</a></li>
            <li><a href="<?= base_url('/admin') ?>"><i class='bx bxs-dashboard icon' ></i> Keluar</a></li>

        </ul>
    </section>
    <!-- SIDEBAR -->

	<section id="content">
        <div class="container rounded bg-white">
                <div class="row">
                    <div class="col-md-9 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Tambah Data</h4>
                            </div>
                            <form action="<?=base_url('/user/store')?>" method="POST" enctype="multipart/form-data">
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="" value="" name="nama"></div>
                                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input type="text" class="form-control" placeholder="" value="" name="tgllahir"></div>
                                    <div class="col-md-12"><label class="labels">Universitas</label><input type="text" class="form-control" placeholder="" value="" name="universitas"></div>
                                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="" value="" name="alamat"></div>
                                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="" value="" name="email"></div>
                                    <div class="col-md-12"><label class="labels">Input Foto</label><input type="file" name="foto" id="foto" class="form-control" value=""></div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6 mt-3 "><button class="btn btn-primary " type="submit" value="Simpan">Submit</button></div>
                                    <!-- <div class="col-md-6 mt-3 text-right"><button class="btn btn-warning" type="button">Cancel</button></div> -->
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="script.js"></script>


</html>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>
