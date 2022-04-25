<?php

require_once "conn.php";
/*
$sql = "INSERT INTO mahasiswa (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES
        ('19280005','LIGI','laki-laki','china','2021-10-12','jl.bunga melati')";
*/

if ($_POST['input'] == "input"){

    $sql = "INSERT INTO mahasiswa 
    (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES
    ('".$_POST['nim']."', '".$_POST['nama']."', '".$_POST['jns_kelamin']."', '".$_POST['tpt_lahir']."', '".$_POST['tgl_lahir']."', '".$_POST['alamat']."')";

    if ($coon->query($sql) == TRUE {
    echo "New record Data Success";

    }else{
    echo "error". $sql . "<br>". $conn->error;
}else {
    echo "Restricted area";
}
    