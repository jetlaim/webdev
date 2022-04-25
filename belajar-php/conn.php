<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sim";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("can't connect to server. ERROR! :".$conn->connect_server);
}
