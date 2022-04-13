<?php
/*
    $nama = "bluejay";
    $umur = 3;
    $tinggi = 3.5;
*/
    // $kalimat = "halo, nama saya $nama umur saya adalah $umur tahun dan tinggi saya adalah $tinggi cm";

    // echo $kalimat;

    // percabangan if else
/*
    if($nama != "bluejay"){
        echo "benar itu bluejay";
    } esle {
        echo "kamu saha?";
    }

    // percabangan switch-case
    biasanya kalo switch-case untuk make case hari , hari senin apa hari selasa apa
    default untuk case jika tidak terpenuhi
*/

/*
    switch($nama) {
        case "bluejay";
        echo "benar itu bluejay"
        break;
        default;
        echo " Kamu saha?";
    }
*/

    // ternary operator
/*
    $kalimat = $nama == "bluejay" ? "benar itu bluejay" : "Kamu saha?";

    echo $kalimat
*/

/*
    //  perulangan for
    for($i=0$i; < 10; $i++){
        echo  "ini adalah perulangan ke-$i";
        echo "<br/>";
    }
*/

/*
    // perulngan while
    $i = 0;
    while($i <= 10) {
        echo  "ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }
*/

/*
    // perulangan do while
    $i = 10;
    do {
        echo  "ini adalah perulangan ke-$i";
        echo "<br/>";
        $i--;

    } while ($i >0)
*/
/*
    //  perulangan foreeach
    $nama = array("ijay", "nijar", "jay");

    foreach ($nama as $sebutan) {
        echo "nama saya adalah $sebutan";
        echo "<br/>";
    }
*/
/*
    //  perulangan foreeach + 
    $nama = array("ijay" => 1000000,"ijai" => 32000000,);
    foreach ($nama as $sebutan => $nilai) {
        echo "nama saya adalah $sebutan nilai buronan saya adalah Br ".number_format($nilai, 2, ".",",");
        echo "<br/>";
    }
*/
/*
    // user-defiend funcion
    function sebut_nama($nama) {
        $sebut = "halo, nama saya $nama";
        return $sebut;
    }

    echo sebut_nama($nama);
*/
  // built-in function
/*
  echo strlen("Halo, nama saya $nama");
*/
    
?>