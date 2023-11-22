<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                    <form action="<?= base_url('tes/tambah/')?>" method="post" enctype="multipart/from-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= set_value('nama');?>" class="form-control" id="nama" placeholder="Nama Prodi">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= set_value('ruangan');?>" class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                       
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi"  value="<?= set_value('akreditasi');?>"class="form-control" id="akreditasi" placeholder="Akreditasi">
                            <?= form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>

                        </div>
                       
                        <br>
                        <a href="<?= base_url('/tes/')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                    </form>
                    <p><?php echo $this->session->userdata('nama');?></p>
                    <p><?php echo $this->session->userdata('ruangan');?></p>
                    <p><?php echo $this->session->userdata('akreditasi');?></p>
                </div>
            </div>
        </div>
    </div>
</div>