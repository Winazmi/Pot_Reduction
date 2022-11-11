<?php
    include('../../conf/config.php');
    $tanggal = $_GET['tanggal'];
    $cut_up = $_GET['cut_up'];
    $take_out = $_GET['take_out'];
    $CBD = $_GET['CBD'];
    $CSE = $_GET['CSE'];
    $work_b = $_GET['work_b'];
    $IOS = $_GET['IOS'];
    $work_12 = $_GET['work_12'];
    $ACDD = $_GET['ACDD'];
    $baking = $_GET['baking'];
    $start_up = $_GET['start_up'];
    $keterangan = $_GET['keterangan'];
    $query = mysqli_query($koneksi, "INSERT INTO data_pot(tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan)
    VALUES ('$tanggal','$cut_up','$take_out','$CBD','$CSE','$work_b','$IOS','$work_12','$ACDD','$baking','$start_up','$keterangan')");
    header('Location: ../index.php?page=data_pot')
?>

