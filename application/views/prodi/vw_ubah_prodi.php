<body>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?> </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form eDIT Data Prodi
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama Prodi</label>
                                <input type="text"  name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="nama_prodi" placeholder="Nama prodi">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <input type="text"  name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                                <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text"  name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                                <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <input type="text"  name="akreditasi" value="<?= $prodi['akreditasi']; ?>" class="form-control" id="akreditasi" placeholder="Akreditasi">
                                <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama kaprodi">Nama Kaprodi</label>
                                <input type="text"  name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="Nama kaprodi">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="date"  name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri" placeholder="Tahun berdiri">
                                <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="output_lulusan">Output Lulusan</label>
                                <input type="text"  name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="lulusan" placeholder="Lulusan">
                                <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <img style="width: 50px; height: 100px;" src="<?=base_url('assets/templet/images/prodi/'). $prodi['gambar'];?>" alt="">
                                <label for="gambar">Choose File</label>
                                <input type="file"  name="gambar" class="form-control" id="lulusan" placeholder="Lulusan">
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="edit" class="btn btn-primary float-right"> Ubah Prodi </button>
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