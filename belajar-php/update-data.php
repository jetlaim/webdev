<?php

require_once "conn.php";

$sql = "UPDATE mahasiswa GET `alamat`='JL.melati NO 5' WHERE 'no'=4";

if ($conn->query($sql) === TRUE {
    echo "Recond update data Data Success";

}else{
    echo "error". $sql . "<br>". $conn->error;
}
    