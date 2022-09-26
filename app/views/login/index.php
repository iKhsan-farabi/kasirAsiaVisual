<?php
error_reporting(3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Asia Visual ERP</title>
	<link href="<?= BASE_URL ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= BASE_URL_CSS ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" href="<?= BASE_URL ?>/img/favicon-32.png">
	<link href="<?= BASE_URL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title  ml-7 text-success"><i class="fab fa-canadian-maple-leaf mr-2 rotate-n-15"></i><b>Asia Visual ERP</b></a></h4>
							<h4 class="text-success" style="font-size: small;"><b>Sebuah Karya Melalui Daun Multifungsi</b></h4>
							<form action="<?= BASE_URL; ?>/Login/prosesLogin" class="my-login-validation" method="POST">
								<div class="form-group">
									<label for="email">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								<br>
								<div class="form-group m-0">
									<button type="submit" class="btn btn-success btn-block" id="LoginSubmit" name="LoginSubmit">
									<i class="fas fa-sign-in-alt mr-2"></i>Masuk
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Nadhif Ali Ikhsani
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/my-login.js"></script>
</body>

</html>