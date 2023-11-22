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
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="nama">Nama Prodi</label>
                                <input type="text" value="<?= set_value('nama'); ?>" name="nama" class="form-control" id="nama_prodi" placeholder="Nama prodi">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nim">Ruangan</label>
                                <input type="text" value="<?= set_value('ruangan'); ?>" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                                <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jurusan</label>
                                <input type="text" value="<?= set_value('jurusan'); ?>" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Akreditasi</label>
                                <input type="text" value="<?= set_value('akreditasi'); ?>" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi">
                                <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Nama Kaprodi</label>
                                <input type="text" value="<?= set_value('nama_kaprodi'); ?>" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama kaprodi">
                                <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Tahun Berdiri</label>
                                <input type="date" value="<?= set_value('tahun_berdiri'); ?>" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun berdiri">
                                <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Output Lulusan</label>
                                <input type="text" value="<?= set_value('output_lulusan'); ?>" name="output_lulusan" class="form-control" id="lulusan" placeholder="Lulusan">
                                <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Gambar</label>
                                <input type="file"  name="gambar" class="form-control" id="gambar" placeholder="gambar">
                                <!-- <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?> -->
                            </div>
                            <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
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