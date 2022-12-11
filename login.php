<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/csslog.css">
	<script src="https://kit.fontawesome.com/9af970ca31.js" crossorigin="anonymous"></script>
	<style>
		body {
			background-color: #f0eeeb;
		}
	</style>
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex" style="background-color: #e3ded5;">
						<div class="img" style="background-image: url(assets/imgs/b2.JPG);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<a href="index.php">
										<h3 class="mb-2"><i class="fa-sharp fa-solid fa-circle-left"></i></h3>
									</a>
								</div>
							</div>

							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
							</div>
							<div>
								<form action="proseslog.php" method="POST" class="signin-form">
									<div class="form-group mb-3">
										<label class="label" for="email">E-mail</label>
										<input type="email" name="email" class="form-control" placeholder="E-mail" required>
									</div>
									<div class="form-group mb-3">
										<label class="label" for="password">Password</label>
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<!-- <div class="form-group">
										<button type="submit" name="sigin" class="form-control btn btn-primary rounded submit px-3" style="width: 50%;">Sign In</button>
										<button type="submit" name="back" class="form-control btn btn-primary rounded submit px-3"><a data-toggle="tab" href="index.php" style="color: white; width: 50%;">Back</a></button>
									</div> -->
									<div class="form-group">
									<button type="submit" name="sigin" class="form-control btn btn-primary rounded submit px-3" style="width: 50%;">Sign In</button>
									</div>
									<div class="form-group d-md-flex">
								</form>
								<p class="text-center">Not a member? <a data-toggle="tab" href="registrasi.php">Sign Up</a></p>
							</div>

						</div>

					</div>
				</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>