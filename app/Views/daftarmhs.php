<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' rel='stylesheet'>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styledaftar.css') ?>">
    <title>AdminSite</title>
</head>
<body>
    
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> Hai </a>
        <ul class="side-menu">
            <!-- <li class="divider" data-text="main">Kelola</li> -->
            <li><a href="<?=base_url('/daftar')?>" class="active"><i class='bx bxs-inbox icon' ></i> Data Mahasiswa </a></li>
            <li><a href="<?= base_url('/user/create') ?>"><i class='bx bxs-plus-circle icon' ></i> Tambah Data</a></li>
            <li><a href="<?= base_url('/admin') ?>"><i class='bx bxs-dashboard icon' ></i> Keluar</a></li>

        </ul>
    </section>
    <!-- SIDEBAR -->


<body>

    <!-- <main class="table" id="customers_table"> -->
        <section class="table__header">
        </section>
        <section class="table__body">
        <h1>Data Mahasiswa</h1>
        <br>
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Nama </th>
                        <th> Tanggal Lahir </th>
                        <th> Universitas </th>
                        <th> Alamat </th>
                        <th> Email </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($mhs as $user){
                    ?>
                        <tr>
                            <td> <?= $user['id']?> </td>
                            <td> <?= $user['nama']?></td>
                            <td> <?= $user['tgllahir']?> </td>
                            <td> <?= $user['alamat']?> </td>
                            <td> <?= $user['universitas']?></td>
                            <td> <?= $user['email']?></td>

                            <td>
                                <a href="<?=base_url('user/' . $user['id'])?>" class="btn btn-warning look-btn"><i class="fa fa-eye"></i></a>
                                <a href="<?=base_url('/user/' . $user['id'] . '/edit')?>" class="btn btn-primary edit-btn"><i class="fa fa-edit"></i></a>
                                <!-- <a href="#" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i></a> -->
                                <form action="<?=base_url('user/' . $user['id'])?>" method="post" style="display:inline-block" onsubmit="return confirmDelete()">
                                    <input type= "hidden" name ="_method" value= "DELETE">
                                    <?=csrf_field()?>
                                    <button type="submit" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>                   
                        </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </section>
    <!-- </main> -->
    <script src="script.js"></script>
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus?");
        }
    </script>
</body>

</html>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>
