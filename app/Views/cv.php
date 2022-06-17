<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV Bunga Adifatillah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section id="header" class="bg-success p-2 text-dark bg-opacity-50">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto text-center">
                    <h1 class="text-white">CURICULUM VITAE</h1>
                    <img class="rounded-circle" style="object-fit:cover" src="/assets/profile.jpg" alt="" height="250" width="250">
                    <h1 class="text-white">Bunga Adifatillah</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="content" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">DATA DIRI</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>NPM</p>
                            <p>Nama</p>
                            <p>Tempat Lahir</p>
                            <p>Tanggal Lahir</p>
                            <p>Alamat</p>
                            <p>No Hp</p>
                            <p>Email</p>
                            <p>Jenis Kelamin</p>
                            <p>Agama</p>
                        </div>
                        <div class="col-sm-6">
                            <p>: <?= $data['npm']; ?></p>
                            <p>: <?= $data ['nama']; ?></p>
                            <p>: <?= $data ['tempat_lahir']; ?></p>
                            <p>: <?= $data ['tanggal_lahir']; ?></p>
                            <p>: <?= $data ['alamat']; ?></p>
                            <p>: <?= $data ['no_hp']; ?></p>
                            <p>: <?= $data ['email']; ?></p>
                            <p>: <?= $data ['jenis_kelamin']; ?></p>
                            <p>: <?= $data ['agama']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">RIWAYAT PENDIDIKAN</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>SD</p>
                            <p>SMP</p>
                            <p>SMA</p>
                        </div>
                        <div class="col-sm-6">
                            <p>: <?= $data ['sd']; ?></p>
                            <p>: <?= $data ['smp']; ?></p>
                            <p>: <?= $data ['sma']; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-6">
                    <h1 class="text-center">SKILL</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><?= $data ['skill']; ?></p>
                            <p><?= $data ['skill2']; ?></p>
                            <p><?= $data ['skill3']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">PENGALAMAN KERJA</h1>
                    <div class="row">
                        <div class="col-sm-9">
                            <p><?= $data ['pengalaman']; ?></p>
                            <p><?= $data ['pengalaman2']; ?></p>
                            <p><?= $data ['pengalaman3']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
                <td>
                    <a href="<?php echo site_url('pages/add/'.$data['npm']);?>" class="btn btn-sm btn-info">Tambah</a>
                    <a href="<?php echo site_url('pages/get_edit/'.$data['npm']);?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('pages/delete/'.$data['npm']);?>" class="btn btn-sm btn-danger">Delete</a>
                <td>
        </div>
    </section>
    <footer>
        <p class="text-center bg-success p-2 text-dark bg-opacity-50">Copyright &copy; 2022 || Bunga Adifatillah</p>
    </footer>
</body>
</html>