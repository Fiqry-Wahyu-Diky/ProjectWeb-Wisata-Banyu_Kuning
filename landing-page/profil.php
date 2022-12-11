<?php 
	session_start();
	require 'connect.php';
	$email = $_SESSION['email'];
	$data = "SELECT * FROM user WHERE email = '$email' ";
	$query = mysqli_query($conn,$data);
?>

<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap + Dorang main styles -->
    <link rel="stylesheet" href="assets/css/dorang.css">
	<title>Profil</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme" >
	<nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tiket.php" class="nav-link">Tiket</a></li>
            <li class="nav-item"><a href="profil.php" class="nav-link"><img src="assets/imgs/person-bounding-box.svg" style="color: white;"></a></li>
            <li class="nav-item"><a href="riwayat.php" class="nav-link">Riwayat Pemesanan</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav><!-- end of page navbar -->
<?php
		while ($row = mysqli_fetch_array($query)) {
?>
<header class="header">
	<div class="overlay"></div>
	<div class="header-content">
		<section>
		<div class="container py-6">
		    <div class="row">
		      	<div class="col-lg-4">
		        	<div class="card mb-2">
		          		<div class="card-body text-center">
		            	<img src="https://www.kibrispdr.org/data/741/log-in-png-2.png" alt="avatar"
		              	class="rounded-circle img-fluid" style="width: 150px;">
		            	<h5 class="my-3"><?php echo $row["name"]; ?></h5>
		            	<!-- <p class="text-muted mb-1">Full Stack Developer</p>
		            	<p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
			            
		          	</div>
		        </div>
		      	</div>
			      	<div class="col-lg-16" style="background-color: #696966; border-radius: 15px;">
			        	<div class="card mb-4">
			          		<div class="card-body">
			            		<div class="row">
			              			<div class="col-sm-6">
			                			<h6 class="mb-0">Name</h6>
			              			</div>
			              			<div class="col-sm-12">
			                			<p class="text mb-0"><?php echo $row["name"]; ?></p>
			              			</div>
			            		</div>
			            		<hr>
			            		<div class="row">
			              			<div class="col-sm-6">
			                			<h6 class="mb-0">NIK</h6>
			              			</div>
			              			<div class="col-sm-12">
			                			<p class="text mb-0"><?php echo $row["nik"]; ?></p>
			              			</div>
			            		</div>
			            		<hr>
			            		<div class="row">
			              			<div class="col-sm-6">
			                			<h6 class="mb-0">Tanggal Lahir</h6>
			              			</div>
			              			<div class="col-sm-12">
			                			<p class="text mb-0"><?php echo $row["ttl"]; ?></p>
			              			</div>
			            		</div>
			            		<hr>
			            		<div class="row">
			              			<div class="col-sm-6">
			                			<h6 class="mb-0">E-mail</h6>
			              			</div>
			              			<div class="col-sm-12">
			                			<p class="text mb-0"><?php echo $row["email"]; ?></p>
			              			</div>	            		
			              		</div>
		        			</div>
		            	</div>
		          	</div>
		        	</div>
		      	</div>
		    </div>
		</div>
	</section>
	</div>
	
</header>
	
<?php } ?>
</body>
</html>
