<?php 
$size = getimagesize($_FILES['file']['tmp_name']); //get size   
$image = "data:" . $size["mime"] . ";base64," .
         base64_encode(file_get_contents($_FILES['file']['tmp_name'])); //get image
echo '<img src="'.$image.'" width="720px" />'

/*
// tampilkan nilai

if ($_POST['submit'] == 'Kirim') {

    if (empty($username)) {
        echo "Username tidak diisi.";
        return;
    }

    if (empty($password)) {
        echo "Password tidak diisi.";
        return;
    }
    
    if ($username == 'admin' && $password == '123456') {
    $username = $_POST['username'];
    $password = $_POST[ 'password'];

    // tampilkan nilai : echo
    echo "username : ".$username;
    echo "<br>";
    echo "password : ".$password;

    } else {
        echo "Anda tidak bisa mengakses halaman utama";
    }


} else {
    echo "halaman tidak dapat diakses";
}
*/
?>