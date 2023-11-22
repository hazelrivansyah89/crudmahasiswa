<form method="post" action="<?php echo base_url('coba'); ?>">
    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="Submit">
    
</form>

<h1>Hasil Input</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Email: <?php echo $email; ?></p>
<!-- result_view.php -->