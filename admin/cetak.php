<?php
include ("../connect.php");
?>

<html>
<head>
<meta charset="utf-8">
<title>Cetak Laporan</title>
</head>
<body>
<h1 style="text-align: center;">Pendapatan Wisata Banyu Kuning</h1>

    <table style="margin-left:auto;margin-right:auto" border="1">
        <thead style="text-align: center;">
            <tr class="table table-primary">
                <th width = "5%">No</th>
                <th width="15%">Bulan</th>
                <th width="15%">Pendapatan</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
    <?php
    // $conn = mysqli_connect("localhost", "root", "", "banyu_kuning");                            
    $query="SELECT monthname(tanggal) AS bulan,year(tanggal) as Tahun,SUM(total) AS Total FROM `pesan` INNER JOIN tiket ON tiket.id_tiket = pesan.id_tiket GROUP BY month(tanggal);";
    $hasil=mysqli_query($conn,$query);
    ?>
    <?php $i = 1 ?>
    <?php foreach($hasil as $row) : 
    ?>
        <tbody style="text-align: center;">
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['bulan'] ?></td>
                <td><?php echo 'Rp. '.$row['Total'] ?></td>
                <?php $i++ ?>
                <?php endforeach; ?>
            </tr>
            <?php
            $que="SELECT SUM(total) AS Total FROM pesan;";
            $result=mysqli_query($conn,$que);
            ?>
            <?php 
            while ($data=mysqli_fetch_array($result)){ 
            ?>
            <tr>
                <td colspan="2" style="text-align: center;">TOTAL PENDAPATAN</b></td>
                <td><b><?php echo 'Rp. '.$data['Total'] ?></b></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
	    window.print();
	</script>
 
    
</body>
</html>
