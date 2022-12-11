<?php
session_start();
include "connect.php";
?>
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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
    <div class="overlay">
    <div class="container">
       <div class="card-body">
        <div>
            <h2 style="margin-bottom: 20px;">Pemesanan Tiket</h2>
        </div>
        <?php

            // ob_start();
            
            $id = $_SESSION['user']['id_user'];
            // $_SESSION['email'] = $_SESSION['email'];
            $query = "SELECT * FROM user WHERE id_user = '$id'";
            // var_dump($query);die;
            $sql = mysqli_query($conn, $query);
            // var_dump($sql);die;
            $data = mysqli_fetch_array($sql);
        ?>

        <form action="prosesPesan.php?id=<?= $id; ?>" method="POST">
            <?php 
                $tanggal = date("Y-m-d");
                // echo $tanggal;die;
                $total = "SELECT * FROM tiket WHERE tanggal >= '$tanggal'";
                $hasil = mysqli_query($conn,$total); ?>
                
                <table style="width: 100%; text-align: center;">
                <?php 
                while ($result = mysqli_fetch_array($hasil)){ ?>
                    <th style="text-align: center; color: white; background-color: #263159; border-radius: 15px; padding:50px;">
                        <?php 
                            if ($result['jumlah_tiket'] <= 0){
                                $tanggal = $result['tanggal'];
                                echo 'Sisa Tiket'; ?><br> <?php
                                echo date('d F Y', strtotime($tanggal)); ?> <br> <?php
                                echo 'Habis';
                                
                            } else {
                                $tanggal = $result['tanggal'];
                                echo 'Sisa Tiket'; ?><br> <?php
                                echo date('d F Y', strtotime($tanggal)); ?> <br> <?php
                                echo $result['jumlah_tiket'], ' Tiket';
                                
                            }
                        ?>
                    </th>
                    <th style="background-color: black;"></th>
                <?php } ?>
                
                </table>
            
            <div class="form-group">
                <input type="text" name="id_user" class="form-control" id="readonlyInput" placeholder="Nama Pembeli" hidden value="<?= $data['id_user']; ?>" readonly>
            </div> 
            <div class="form-group">
                <label for="name">Nama Pembeli</label>
                <input type="text" name="nama" class="form-control" id="readonlyInput" placeholder="Nama Pembeli" value="<?= $data['name']; ?>" readonly>
            </div> 
            <div class="form-group">
                <label for="nik">NIK Pembeli</label>
                <input type="text" name="nik" class="form-control" id="readonlyInput" placeholder="NIK Pembeli" value="<?= $data['nik']; ?>" readonly>
            </div> 
            <div class="form-group">
                <label for="tanggal">Tanggal Tiket</label>
                <select class="form-control" name="id_tiket" id="tanggal" onchange='changeValue(this.value)' required>
                    <option>---Tanggal Tiket---</option>
                        <?php 
                            include 'connect.php';
                            $sql = mysqli_query($conn,"select * from tiket order by tanggal asc");
                            $tanggal_awal = date('Y-m-d');
                            // $tanggal_akhir = date('Y-m');
                            $result = mysqli_query($conn, "select * from tiket WHERE tanggal >= '$tanggal_awal' ORDER BY tanggal asc");
                            // var_dump($result);die;
                            $jsArray = "var prdName = new Array();\n";
                            while ($row = mysqli_fetch_array($result)) {
                             echo '<option name="id_tiket" value="' .$row['id_tiket']. '">' .$row['tanggal'].'</option>';
                            //  $jsArray .= "prdName['" . $row['tanggal']."'] = {id:'".addslashes($row['id_tiket'])."'};\n";
                                
                         }
                             ?>
                        </select>
            </div> 
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="readonlyInput" placeholder="Jumlah Tiket">
            </div>
            <div class="d-flex justify-content-between">
                <button type=submit name="submit" class="btn btn-info rounded">Pesan</button>
                <a href="home.php" class="btn btn-primary rounded">Kembali</a>
            </div>
        </form>
        </div>   
    </div>
</div>
</header>
    
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>

</body>

</html>