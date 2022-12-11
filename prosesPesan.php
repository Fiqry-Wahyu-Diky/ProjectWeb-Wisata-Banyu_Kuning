<?php

include "connect.php";

// var_dump($_POST);die;
// $id_pesan = null;
$id_user = $_POST['id_user'];
// $nik = $_POST['nik'];
$id_tiket = $_POST['id_tiket'];
$jumlah_pesan = $_POST['jumlah'];
$harga =  '10000';
$total = $jumlah_pesan * $harga;
// $status = 'Belum Bayar';

$banyak_tiket = "SELECT*FROM tiket where id_tiket = '$id_tiket'";
$query = mysqli_query($conn, $banyak_tiket);
// var_dump($query);die;
$cek = mysqli_fetch_array($query);
// var_dump($cek);die;
// var_dump ($cek['jumlah_tiket']);die;
if ($cek['jumlah_tiket']<$jumlah_pesan or $cek['jumlah_tiket'] == 0){
    // die;
    echo "<script>alert('Stok tiket kurang');window.location.href='pesan.php'</script>";
    // header ("location:pesan.php");
}
elseif($cek['jumlah_tiket'] >= $jumlah_pesan){
    $query = "INSERT INTO pesan (
	id_pesan, 
	id_user, 
	id_tiket, 
	jumlah, 
	total) 
	VALUES (
	NULL, 
	'".$id_user."', 
	'".$id_tiket."', 
	'".$jumlah_pesan."', 
	'".$total."'
	)";
// var_dump($query);die;
$sql = mysqli_query($conn, $query);
// var_dump($sql);die;
    if ($sql){
    	echo "<script>alert('Pemesanan tiket success');window.location.href = 'riwayat.php'</script>";
    }else{
    	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
    	echo "<br><a href='../pesan.php'>Kembali Ke Form</a>";
    }
}



?>