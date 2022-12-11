<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("assets 2/img/banyu-kuning.JPG");
            background-color: grey;
        }
        .container{
            background-color: white;
        }
    </style>
    <title>Cetak Tiket</title>
</head>
<body>
    <?php
        include 'connect.php';
        $query="SELECT * FROM pesan INNER JOIN user ON pesan.id_user = user.id_user JOIN tiket ON tiket.id_tiket = pesan.id_tiket ORDER BY pesan.id_pesan DESC";
        $hasil=mysqli_query($conn,$query);
    ?>
    <?php
        $row = mysqli_fetch_array($hasil);
        $id_pesan = $row['id_pesan'];
        $nama = $row['name'];
        $tanggal = $row['tanggal'];
    ?>
    <div class="container" style="outline-style: solid; border-radius: 30px;">
        <div class="row" style="margin-top: 50px; padding: 30px;">
            <div class="col" style="padding: 50px; text-align: center;">            
                <b><h2>Tiket Wisata Banyu Kuning Bojonegoro</h2></b>
                <div style="margin-left:auto; margin-right:auto; padding: 20px;">
                    <table style="text-align: left; margin-left:auto; margin-right:auto; padding: 20px;">
                        <tr>
                            <td>ID</td>
                            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp</td>
                            <td><?php echo $id_pesan ?></td>
                        </tr>
                        <tr>
                            <td> Pembeli</td>
                            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp</td>
                            <td><?php echo $nama ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal tiket </td>
                            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp</td>
                            <td><?php echo date('d F Y', strtotime($tanggal)); ?></td>
                        </tr>                 
                    </table>
                
                <img style="width: 100%; height: auto; vertical-align: center;" src="assets\imgs\qr-code.png">
                </div>
            </div>
            <script>
	            window.print();
	        </script>

        </div>
    </div>
</body>
</html>