<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Style -->
	<link rel="stylesheet" href="assets/css/cssreg.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registrasi</title>
	<style type="text/css">
		.x a:hover {
			color: white;
		}

		/*a:hover{
			color: white;
		}*/
	</style>
</head>

<body>
	<div class="half">
		<div class="bg order-1 order-md-2" style="background-image: url('assets/imgs/b2.jpg');">
		</div>
		<div class="contents order-2 order-md-1">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-6">
						<div class="form-block">
							<div class="text-center mb-5">
								<h3>Register<h3/>
							</div>
							<form action="prosesreg.php" method="POST">
								<div class="form-group first">
									<label for="name">Nama Depan</label>
									<input type="text" name="depan" class="form-control" placeholder="Enter Your Name" id="name" required>
								</div>
								<div class="form-group first">
									<label for="name">Nama Belakang</label>
									<input type="text" name="belakang" class="form-control" placeholder="Enter Your Name" id="name" required>
								</div>
								<div class="form-group first">
									<label for="nik">NIK</label>
									<input type="text" name="nik" class="form-control" placeholder="Enter Your NIK" id="nik" max="16" min="16" required>
								</div>
								<div class="form-group first">
									<label for="ttl">Birth Date</label>
									<input type="date" class="form-control" name="ttl" placeholder="Enter Your Birth Date" id="ttl" required>
								</div>
								<div class="form-group first">
									<label for="email">Email Address</label>
									<input type="text" class="form-control" name="email" placeholder="Enter Your E-mail" id="email" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" placeholder=" Enter Your Password" id="password" required>
								</div>
								<div class="x mt-3">
									<button class="btn btn-outline-success" type="submit" name="submit" value="submit">Submit</button>
									<button class="btn btn-outline-warning"><a href="index.php" style="text-decoration: none; color:gold;">Back</a></button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>