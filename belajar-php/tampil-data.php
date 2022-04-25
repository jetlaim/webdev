<?php
require_once "conn.php";

$sql = "SELECT * FROM mahasiswa";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($result->fetch_assoc()) {
        echo $row['no']." | ".$row['nim']." | ".$row['nama']." | ".$row['jns_kelamin']." | ".$row['tpt_lahit']." | ".$row['tgl_lahir']." | ".$row['alamat'];
        echo "<br>"
    }
} else{
    echo "result : 0";
}
