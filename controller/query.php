<?php
    include ('../config/koneksi.php');
    
    $query_asisten          = mysqli_query($konek, "SELECT * FROM data_asisten") or die(mysql_error($konek));
    $query_jadwal           = mysqli_query($konek, "SELECT * FROM jadwal_mengajar") or die(mysql_error($konek));
    if ($title == 'Ubah Data'){
        $id    = $_GET['id'];
        $query_jadwal_id    = mysqli_query($konek, "SELECT * FROM jadwal_mengajar WHERE id_jadwal='$id'") or die(mysql_error($konek));
        $query_join_id      = mysqli_query($konek, "SELECT * FROM data_asisten INNER JOIN jadwal_mengajar ON data_asisten.id_asisten=jadwal_mengajar.id_asisten WHERE jadwal_mengajar.id_jadwal = '$id'") or die(mysql_error($konek));
    }
    else if ($title == 'Jadwal Asisten'){
        $query_join         = mysqli_query($konek,"SELECT * FROM data_asisten INNER JOIN jadwal_mengajar ON data_asisten.id_asisten=jadwal_mengajar.id_asisten ORDER BY data_asisten.nama_asisten ASC");
    }