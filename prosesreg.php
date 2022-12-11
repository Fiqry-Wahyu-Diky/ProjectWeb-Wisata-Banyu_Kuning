<html>
	<head>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>	
</html>
<?php

use function PHPSTORM_META\type;

	require 'connect.php';
	session_start();
	if (isset($_POST['submit'])) {
		$depan = $_POST['depan'];
		$belakang = $_POST['belakang'];
		// echo (gettype($belakang));
		$name = $depan." ".$belakang;
		// $name = $_POST['fullname'];
		$nik = $_POST['nik'];
		$ttl = $_POST['ttl'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		// echo ($name);die;

		if (strlen($nik)==16) {
			$query = "INSERT INTO user (id_user,name, nik,ttl,email,password,level) 
			VALUES (
				NULL,	
				'$name',
				'$nik',
				'$ttl',
				'$email',
				'$password',
				'user'
				)";
		// echo ($query);die;
		$result = mysqli_query($conn,$query);
		// echo ($result);die;
		if ($result) { ?>
			<script>
                    Swal.fire({
                        title: 'BERHASIL',
                        text: "Akun sudah dibuat",
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "login.php";
                        }
                    })
                </script>
				<?php }
			// <script> alert('Anda Berhasil Melakukan Registrasi');window.location='login.php'</script>";
		}else{ ?>
			<script>
				Swal.fire({
                        title: 'GAGAL',
                        text: "Panjang NIK harus 16 karakter",
                        icon: 'error',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "registrasi.php";
                        }
                    })
			</script>
			<?php }
	}
		  ?>
