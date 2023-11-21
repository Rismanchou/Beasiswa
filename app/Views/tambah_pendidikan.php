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
            background-color: cyan;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Tambah Pendidikan</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="kode_asal_sekolah">Kode Sekolah</label>
                    <input type="text" id="kode_asal_sekolah" name="kode_asal_sekolah" class="form-control" required>
                    <input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="<?= $data->mahasiswa_id ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_sekolah_asal">Nama Sekolah</label>
                    <input type="text" id="nama_sekolah_asal" name="nama_sekolah_asal" class="form-control" required>
                </div>
                <form action="" method="post">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" id="nisn" name="nisn" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <input type="text" id="tahun_lulus" name="tahun_lulus" class="form-control" required>
                </div>
                <form action="" method="post">
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-sm" name="tambah">Tambah</button>
                </div>
                
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>