<body>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Prodi
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('perpus/upload/')?>" method="POST">

                            <div class="form-group">
                                <label for="nama">Nama Buku</label>
                                <input type="text" name="nama_buku" class="form-control" id="nama_prodi" placeholder="Nama Buku">
                            </div>
                            <div class="form-group">
                                <label for="nim">Genre Buku</label>
                                <input type="text" name="genre_buku" class="form-control" id="genre_buku" placeholder="genre_buku">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">tanggal_peminjaman</label>
                                <input type="date" name="tanggal_peminjaman" class="form-control" id="tanggal_peminjaman" placeholder="tanggal_peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="email">tanggal_pengembalian</label>
                                <input type="date" name="tanggal_pengembalian" class="form-control" id="tanggal_pengembalian" placeholder="tanggal_pengembalian">
                            </div>
                            <div class="form-group">
                                <label for="prodi">nomor_anggota</label>
                                <input type="text" name="nomor_anggota" class="form-control" id="nomor_anggota" placeholder="nomor_anggota">
                              
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Nama Peminjam</label>
                                <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" placeholder="Nama Peminjam">
                            </div>
        
                            <a href="<?= base_url('Perpus') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Prodi </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/') ?>libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/') ?>js/app.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/simplebar/dist/simplebar.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/') ?>images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.min.css" />
<br>
<br>
<br>
</body>