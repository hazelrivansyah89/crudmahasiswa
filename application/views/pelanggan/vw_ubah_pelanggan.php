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
                            <input type="hidden" name="id" value="<?= $pelanggan['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan']; ?>" class="form-control" id="nama_pelanggan" placeholder="nama_pelanggan prodi">
                                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <input type="text" name="alamat" value="<?= $pelanggan['alamat']; ?>" class="form-control" id="alamat" placeholder="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pesanan">pesanan</label>
                                <input type="text" name="pesanan" value="<?= $pelanggan['pesanan']; ?>" class="form-control" id="pesanan" placeholder="pesanan">
                                <?= form_error('pesanan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="banyak">banyak</label>
                                <input type="text" name="banyak" value="<?= $pelanggan['banyak']; ?>" class="form-control" id="banyak" placeholder="banyak">
                                <?= form_error('banyak', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="total">total</label>
                                <input type="text" name="total" value="<?= $pelanggan['total']; ?>" class="form-control" id="total" placeholder="total">
                                <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="metode_bayar">Metode Bayar</label>
                                <select name="metode_bayar" value="<?= $pelanggan['metode_']; ?>" id="metode_bayar" class="form-control">
                                    <option value="">Metode Pembayaran</option>
                                    <option value="Cash">Cash</option>
                                    <option value="e-money">e-money</option>
                                </select>
                                <?= form_error('metode_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                         
                            <a href="<?= base_url('Pelanggan') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="edit" class="btn btn-primary float-right"> Ubah Pelanggan </button>
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