<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header justify-content-center">
                                Form Tambah Data Prodi
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form action="<?= base_url('quiz/tambah/') ?>" method="post" enctype="multipart/from-data">

                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nisn">nisn</label>
                                        <input type="text" name="nisn" value="<?= set_value('nisn'); ?>" class="form-control" id="nisn" placeholder="nisn">
                                        <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">nik</label>
                                        <input type="text" name="nik" value="<?= set_value('nik'); ?>" class="form-control" id="nik" placeholder="nik">
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control" id="email" placeholder="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">no_hp</label>
                                        <input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control" id="no_hp" placeholder="no_hp">
                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_wa">no_wa</label>
                                        <input type="text" name="no_wa" value="<?= set_value('no_wa'); ?>" class="form-control" id="no_wa" placeholder="no_wa">
                                        <?= form_error('no_wa', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">tempat_lahir</label>
                                        <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>" class="form-control" id="tempat_lahir" placeholder="tempat_lahir">
                                        <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">tanggal_lahir</label>
                                        <input type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir">
                                        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">jenis_kelamin</label>
                                        <input type="text" name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin">
                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten_tinggal">kabupaten_tinggal</label>
                                        <input type="text" name="kabupaten_tinggal" value="<?= set_value('kabupaten_tinggal'); ?>" class="form-control" id="kabupaten_tinggal" placeholder="kabupaten_tinggal">
                                        <?= form_error('kabupaten_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan_tinggal">kecamatan_tinggal</label>
                                        <input type="text" name="kecamatan_tinggal" value="<?= set_value('kecamatan_tinggal'); ?>" class="form-control" id="kecamatan_tinggal" placeholder="kecamatan_tinggal">
                                        <?= form_error('kecamatan_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten_sekolah">kabupaten_sekolah</label>
                                        <input type="text" name="kabupaten_sekolah" value="<?= set_value('kabupaten_sekolah'); ?>" class="form-control" id="kabupaten_sekolah" placeholder="kabupaten_sekolah">
                                        <?= form_error('kabupaten_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="sekolah_asal">sekolah_asal</label>
                                        <input type="text" name="sekolah_asal" value="<?= set_value('sekolah_asal'); ?>" class="form-control" id="sekolah_asal" placeholder="sekolah_asal">
                                        <?= form_error('sekolah_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">jurusan</label>
                                        <input type="text" name="jurusan" value="<?= set_value('jurusan'); ?>" class="form-control" id="jurusan" placeholder="jurusan">
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_lulus">tahun_lulus</label>
                                        <input type="text" name="tahun_lulus" value="<?= set_value('tahun_lulus'); ?>" class="form-control" id="tahun_lulus" placeholder="tahun_lulus">
                                        <?= form_error('tahun_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <br>
                                    <a href="<?= base_url('/tes/') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                                </form>
                                <p>Nama: <?php echo $this->session->userdata('nama'); ?></p>
                                <p><?php echo $this->session->userdata('nisn'); ?></p>
                                <p><?php echo $this->session->userdata('nik'); ?></p>
                                <p><?php echo $this->session->userdata('email'); ?></p>
                                <p><?php echo $this->session->userdata('no_hp'); ?></p>
                                <p><?php echo $this->session->userdata('no_hp'); ?></p>
                                <p><?php echo $this->session->userdata('no_wa'); ?></p>
                                <p><?php echo $this->session->userdata('tampat_lahir'); ?></p>
                                <p><?php echo $this->session->userdata('tanggal_lahir'); ?></p>
                                <p><?php echo $this->session->userdata('jenis_kelamin'); ?></p>
                                <p><?php echo $this->session->userdata('kabupaten_tinggal'); ?></p>
                                <p><?php echo $this->session->userdata('kecamatan_tinggal'); ?></p>
                                <p><?php echo $this->session->userdata('kabupaten_sekolah'); ?></p>
                                <p><?php echo $this->session->userdata('sekolah_asal'); ?></p>
                                <p><?php echo $this->session->userdata('jurusan'); ?></p>
                                <p><?php echo $this->session->userdata('output_lulus'); ?></p>


                                <!-- <p>Nama: <?php echo $Nama; ?></p>
                                <p>nisn: <?php echo $nisn; ?></p>
                                <p>nik: <?php echo $nik; ?></p>
                                <p>email: <?php echo $email; ?></p>
                                <p>no_hp: <?php echo $no_hp; ?></p>
                                <p>no_wa: <?php echo $no_wa; ?></p>
                                <p>tempat_lahir: <?php echo $tempat_lahir; ?></p>
                                <p>tanggal_lahir: <?php echo $tanggal_lahir; ?></p>
                                <p>tanggal_lahir: <?php echo $email; ?></p>
                                <p>jenis_kelamin: <?php echo $jenis_kelamin; ?></p>
                                <p>kabupaten_tinggal: <?php echo $kabupaten_tinggal; ?></p>
                                <p>kecamatan_tinggal: <?php echo $kecamatan_tinggal; ?></p>
                                <p>kabupaten_sekolah: <?php echo $kabupaten_sekolah; ?></p>
                                <p>sekolah_asal: <?php echo $sekolah_asal; ?></p>
                                <p>jurusan: <?php echo $jurusan; ?></p>
                                <p>tahun_lulus: <?php echo $tahun_lulus; ?></p> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>