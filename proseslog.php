<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<?php 
		error_reporting(0);
		require 'connect.php';

		if (isset($_POST['sigin'])) {
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			// pengecekan
			$data = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
			// echo ($data);die;
			$cek = mysqli_query($conn,$data);
			$result = mysqli_fetch_array($cek);
			$level = $result['level'];
			// echo ($level);die;
			$user = $result['email'];
			$nama = $result['name'];
			$row = mysqli_num_rows($cek);
			// echo ($row);die;

			if ($row > 0) { 
				session_start();
				$_SESSION['email'] = $user;
				$_SESSION['level'] = $level;
				$_SESSION['password'] = $password;	
				$_SESSION['user'] = $result;
				$_SESSION['name'] = $nama;

				if ($level == 'admin') { ?>
					<script>
					Swal.fire({
                        title: 'BERHASIL',
                        text: "Selamat datang Admin",
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "admin/index.php";
                        }
                    }) </script> <?php }
				elseif ($level = 'user') { 
				?>
				<script>
					Swal.fire({
                        title: 'BERHASIL',
                        text: "Selamat datang di akun anda",
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "home.php";
                        }
                    })
					</script>
					<?php }
			} else{
				echo "<div class='alert'>Email dan Password tidak sesuai !</div>";
			}

		}
	?>
</body>
</html>
