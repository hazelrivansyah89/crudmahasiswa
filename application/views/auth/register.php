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
			<form method="POST" action="<?= base_url('Auth/registrasi') ?>">
				<h3>Registration Form</h3>

				<div class="form-wrapper">
					<input type="text" name="nama" placeholder="Username" class="form-control" value="<?= set_value('nama'); ?>">
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="form-wrapper">
					<input value="<?= set_value('email'); ?>" type="text" name="email" placeholder="Email Address" class="form-control">
					<i class="zmdi zmdi-email"></i>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-wrapper">
					<select name="jenis_kelamin" id="" class="form-control">
						<option value="" disabled selected>Gender</option>
						<option value="male">Male</option>
						<option value="femal">Female</option>
						<option value="other">Other</option>
					</select>
					<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
				</div>
				<div class="form-wrapper">
					<input value="<?= set_value('password'); ?>" type="password" name="password" placeholder="Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-wrapper">
					<input name="password2" value="<?= set_value('password2'); ?>" type="password" placeholder="Confirm Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
					<?= form_error('pasword2', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<button type="submit">Register
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
			</form>
		</div>
	</div>

</body>

</html>