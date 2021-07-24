

<?php 


// echo $_GET["veiksmas"];

if(isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"]) && isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"]) &&
isset($_GET["sk3"]) && !empty($_GET["sk3"]) && isset($_GET["sk4"]) && !empty($_GET["sk4"])) {

        $sk1 = $_GET['sk1']; //1
        $sk2 = $_GET['sk2']; //2
        $sk3 = $_GET['sk3']; //1
        $sk4 = $_GET['sk4']; //3
    
    if(is_numeric($sk1) && is_numeric($sk2) && is_numeric($sk3) && is_numeric($sk4) ) {
        
        
        $sk5 = 0; 
        $sk6 = 0;  
        $sveikDalis = 0;
        $veiksmas = $_GET['veiksmas']; 
        $rezultatas = 0;
        

        if($veiksmas == '+') {
            $sk6 = $sk2 * $sk4; //6
            $sk5 = ($sk1 * $sk6) + ($sk3 * $sk6);  // 1*6 + 1*6=12
            $rezultatas = $sk5 / $sk6; // 12/6
            echo $sk5;
            echo '<br>';
            echo $sk6;
            echo '<br>';
            $sveikDalis = intval($sk5 / $sk6); //2
            echo 'Sveikoji dalis ',$sveikDalis;
            echo '<br>';
            
            if($sk5 % $sk6 == 0 ) {
                echo 'Suma, sveikas skaicius = ',$sveikDalis;
            } 
            // else {

                $a = $sk5;
                $b = $sk6;    
                while ($a > 0 && $b > 0) {
                    if($a > $b) {
                        $a = $a % $b;
                    } else {
                        $b = $b % $a;
                    }
                }

            $dbd = $a + $b;

            $sk5 /= $dbd;
            $sk6 /= $dbd;

            echo '<br>';
            echo 'Suma, sveikas skaicius = ',$sveikDalis, 'skaitiklis =',$sk6, ' vardiklis =', $sk5;
            // }
        
        }
             
    }
}

?>