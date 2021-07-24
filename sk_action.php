<?php 

if(isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"]) && isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"]) ) {
    $sk1 = $_GET["sk1"];
    $sk2 = $_GET["sk2"];
    $veiksmas = $_GET['veiksmas']; 
    $rezultatas = 0;

    if($veiksmas == '+') {
        $rezultatas = $sk1 + $sk2;
        echo $rezultatas;
    }

    if($veiksmas == '-') {
        $rezultatas = $sk1 - $sk2;
        echo $rezultatas;
    }
    if($veiksmas == '*') {
        $rezultatas = $sk1 * $sk2;
        echo $rezultatas;
    }

    if($veiksmas == '/') {
        $rezultatas = $sk1 / $sk2;
        echo $rezultatas;
    }

    if($veiksmas == '%') {
        $rezultatas = $sk1 % $sk2;
        echo $rezultatas;
    } 

    }

    else {
        echo 'Patikrinkite ar ivedet skaicius bei aritmetini veiksma';

    



}

?>