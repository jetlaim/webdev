<?php

require_once "conn.php";

$sql = "DELETE FROM mahasiswa WHERE 'no'=5";

if ($coon->query($sql) == TRUE {
    echo "Delete record Data Success";

}else{
    echo "error". $sql . "<br>". $conn->error;
}
    