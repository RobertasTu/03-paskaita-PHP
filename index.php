<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-paskaita PHP pradmenys</title>
</head>
<body>
    <h1>Skaiciuotuvas</h1>

    <form action='index.php' method='get'>
    <input type='text' value='3' name='sk1' />
    <input type='text' value='+' name='veiksmas' />
    <input type='text' value='5' name='sk2' />

    <button type='submit'>Patvirtinti</button>

    <div class='rezultatas'>

</div>

</form>


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
    
</body>
</html>