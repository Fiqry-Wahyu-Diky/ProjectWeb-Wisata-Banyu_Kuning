<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">
    <title>Home</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
    <link rel="stylesheet" href="assets/css/dorang.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
    <?php
            session_start();
            include "connect.php";
            // var_dump($_SESSION['user']);die;
            $id = $_SESSION['user']['id_user'];
            $query = "SELECT * FROM user WHERE id_user ='$id'";
            // var_dump ($query);die;
            $sql = mysqli_query($conn, $query);
            // echo (mysqli_num_rows($sql));die;
            $data = mysqli_fetch_array($sql);
            // var_dump($data);die;
    ?>
    <!-- page navbar -->
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="tiket.php">Tiket</a></li>
            <li class="nav-item"><a href="profil.php" class="nav-link"><img src="assets/imgs/person-bounding-box.svg" style="color: white;"></a></li>
            <li class="nav-item"><a href="riwayat.php" class="nav-link">Riwayat Pemesanan</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav><!-- end of page navbar -->
    <!-- 
    <div class="theme-selector">
        <a href="javascript:void(0)" class="spinner">
            <i class="ti-paint-bucket"></i>
        </a>
        <div class="body">
            <a href="javascript:void(0)" class="light"></a>
            <a href="javascript:void(0)" class="dark"></a>
        </div>
    </div>   -->
    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h1 class="header-title">Book Your Ticket Now!</h1>
            <p class="header-subtitle" style="font-size: 30px;">Wisata Alam Banyu Kuning Bojonegoro</p>
            <a href="pesan.php?id=<?=$id?>"><button class="btn btn-theme-color modal-toggle"><i class="ti-ticket text-danger"></i> Book Now</button></a>
        </div>
    </header>
    <!-- end of page header -->

    <!-- footer -->
    <footer class="footer">
        <p class="infos">&copy; <script>
                document.write(new Date().getFullYear())
            </script> Wisata Alam Banyu Kuning Bojonegoro |</p>
        <div class="links">
            <a href="#">Home</a>
            <a href="#">Pesan Tiket</a>
            <a href="#">Logout</a>
        </div>
    </footer>
    <!-- end of footer -->
    
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>

</body>

</html>