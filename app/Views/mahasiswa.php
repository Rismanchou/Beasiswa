<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Mahasiswa</h4>
            <a href="<?= base_url('mahasiswa/tambah')?>" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Kota Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($mahasiswa as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $item->nama_mahasiswa ?></td>
                        <td><?= $item->jenis_kelamin ?></td>
                        <td><?= $item->agama ?></td>
                        <td><?= $item->kota_lahir ?></td>
                        <td><?= $item->tanggal_lahir ?></td>
                        <td><?= $item->alamat?></td>
                        <td><?= $item->no_hp ?></td>
                        <td>
                            <a href="<?= base_url('mahasiswa/ubah').'/'.$item->mahasiswa_id ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('mahasiswa/hapus').'/'.$item->mahasiswa_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="<?= base_url('pendidikan/tambah/').$item->mahasiswa_id ?>" class="btn btn-info btn-sm">Pendidikan</a>
                      </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>