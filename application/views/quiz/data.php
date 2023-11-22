<h1>ada</h1>
<ul>
    <?php foreach ($data as $pengguna); ?>
    Nama: <?= $penggunar['Nama'] ?>
    <br>
</ul>

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