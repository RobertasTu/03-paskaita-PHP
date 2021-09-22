
<style>

    /* .rezultatas {
                background-color: <?php echo $spalva; ?>;
                width: 100%;
                height: 100%;
    } */



        body {
            width: 100%;
            height: 100%;

        }

  
</style>

<?php 

$spalva = $_POST['spalva'];
$rezultatas = '';

if ( isset($_POST["spalva"]) && !empty($_POST["spalva"]) ) {

    $spalva = $_POST["spalva"];

        if ($spalva == "juoda") {
            $spalva = "black";
        } else if ($spalva == "raudona") {
           $spalva ="red";
        } else if ($spalva == "melyna") {
            $spalva ="blue";
        } else if ((strpos($spalva, '#', 0) !== false)) {
            $kodas = ltrim($spalva, '#');
        
            if(ctype_xdigit($kodas) && strlen($kodas)== 6 || strlen($kodas) == 3) {
                    $rezultatas = $kodas;
                    echo 'Spalvos kodas: #'.$rezultatas;
                    echo '<br>';
                    echo '<a href="spalvos.php">Atgal</a>';
            }                

            //1 groteles5545333 = $spalva savyje turi groteles ir ar tu groteliu yra pacioje pradzioje. str_pos
            //2 yra speciali php funkcija: ctype_xdigit, true arba false. True- - spalvs kodas sesioliktainis, false - nesiosiliktainis. funckija nepriima groteriu $spalva str_replace pasalinti groteles


            // $rezultatas = $spalva; 
            
        } else {
            $rezultatas = 'Įveskite spalvos kodą!';
            echo $rezultatas;
            echo '<br>';
            echo '<a href="spalvos.php">Atgal</a>';
        };

} else $rezultatas = "Irasyk spalva - juoda arba raudona dar melyna gali pabandyt"; 

?>



<div class='<?php echo $spalva ?>'; style="background-color: <?php echo $spalva; ?>; height:100%" ></div>

</div>

