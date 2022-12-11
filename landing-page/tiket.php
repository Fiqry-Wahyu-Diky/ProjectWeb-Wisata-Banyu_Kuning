<?php
ob_start();
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tampilan Tiket</title>

    <!-- Custom fonts for this template-->
    <link href="assets 2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets 2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 fixed-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-arrow left"></i>
                    </button> -->

                    <!-- Topbar Search -->
                    <form
                        class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group-append">
                                <!-- <button class="btn btn-primary"> -->
                                    <a style="margin-top: 15px;" href="home.php"><i style="width:fit-content" class="fas fa-arrow-left fa-sm"></i></a>
                                <!-- </button> -->
                                <h2 style="text-align: center; margin-left: 30px; margin-top: 10px;">Tiket</h2>
                            </div>
                    </form>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container" style="margin-top: 100px;">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-trash-alt fa-sm text-white-50"></i></a>
                    </div> -->


                    <!-- Content Row -->
                    <div>

                        <!-- Earnings (Monthly) Card Example -->
                        
                    <?php
                        $id = $_SESSION['user']['id_user'];
                        // var_dump($id);die;
                        $query="SELECT * FROM pesan 
                        INNER JOIN user ON pesan.id_user = user.id_user JOIN tiket ON pesan.id_tiket = tiket.id_tiket where pesan.id_user = '$id' ORDER BY pesan.id_pesan DESC";
                        // var_dump($query);die;
                        $hasil=mysqli_query($conn,$query);
                        // var_dump($hasil);die;
                        // echo ($hasil);die;
                    ?>                        

                    <?php
                        $row = mysqli_fetch_assoc($hasil);
                        // var_dump($row);die;
                        for($x=1;$x<=$row['jumlah'];$x++){
                    ?>
                    <div class="col" style="padding-right: 20px;">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-1">
                            <div class="card border-left-success shadow h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <b>Booking Tiket</b></div>
                                            <table>
                                                <tr>
                                                    <td>ID Pesan</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['id_pesan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td><?php echo $row['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tgl berkunjung</td>
                                                    <td>:</td>
                                                    <td><?= $row['tanggal']?></td>
                                                </tr>
                                            </table>
                                            <div style="text-align: center; padding-top: 10px;">
                                                <a href="print tiket.php"><i class="fas fa-chevron-right fa-sm"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    </div>
            </div>
            <!-- End of Main Content -->
        </div>

        </div>
        <!-- End of Content Wrapper -->
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>