<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm_v1 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>templet/fonts_/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>templet/css_/style.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('<?= base_url('assets/') ?>templet/images_/bg1.jpg');">
		<div class="inner">
			<div class="image-holder">
				<img src="<?= base_url('assets/') ?>templet/images_/bg3.jpg" alt="">
			</div>
			<?= $this->session->flashdata('message') ?>
			<form method="POST" action="<?= base_url('Auth') ?>">
				<h3>Login Form</h3>

				<!-- <div class="form-wrapper">
					<input type="text" value="<?= set_value('email'); ?> " placeholder="asdad" name="email"  class="form-control">
					<i class="zmdi zmdi-email"></i>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>	
				</div> -->

				<div class="form-wrapper">
					<input value="<?= set_value('email'); ?>" type="text" placeholder="Email addres" class="form-control" name="email">
					<i class="zmdi zmdi-lock"></i>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-wrapper">
					<input value="<?= set_value('password'); ?>" type="password" placeholder="Password" class="form-control" name="password">
					<i class="zmdi zmdi-lock"></i>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<button>Login
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
				<br>
				<div class="text-center ">
					<a class="small" style="margin-left: 80px;" href="<?= base_url('index.php/auth/registrasi') ?>">Create Account</a>

				</div>
			</form>
		</div>
	</div>

</body>

</html>