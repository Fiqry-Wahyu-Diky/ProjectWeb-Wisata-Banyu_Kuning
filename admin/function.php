<?php
require "../connect.php";
// $conn = mysqli_connect("localhost", "root", "", "banyu_kuning");


function query($data){
    global $conn;
    $result = mysqli_query($conn,$data);
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;

    }
    return $rows;
}

function tambahtiket($datatiket){
    global $conn;
    
    
    $tanggal = $datatiket['tanggal'];
    $stok_tiket = $datatiket["stok_tiket"];
    $query = "SELECT * FROM tiket WHERE tanggal = '$tanggal'";
    // var_dump(mysqli_num_rows(mysqli_query($conn,$query)));die;
    if(mysqli_num_rows(mysqli_query($conn,$query)) == 0){
        if ($tanggal >= date("Y-m-d")){
        $query = "INSERT INTO tiket VALUES (
            NULL,
            '$tanggal',
            '$stok_tiket'
            )";
        mysqli_query($conn,$query);
        // var_dump(mysqli_affected_rows($conn));die;
        return mysqli_affected_rows($conn);
        }else{
            return 2;
        }
    }else{
        return 3;
    }
}

// function tiket($data){
//     global $conn;
//     $tanggal = date("Y-m-d");
//     // echo $tanggal;die;
//     $total = "SELECT * FROM tiket WHERE tanggal = '$tanggal'";
//     $hasil = mysqli_query($conn,$total);
//     $result = mysqli_fetch_array($hasil);
//     // var_dump($hasil);die;
//     if (empty($result)) {
//         $tampil = "Tidak ada tiket hari ini";
//     }else{
//         $tampil = $result['jumlah_tiket'];
//     }
// }
?>