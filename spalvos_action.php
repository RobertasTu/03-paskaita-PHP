
<style>
     .zalia {
            background-color: green;
        } 
        .juoda {
            background-color: black;
            width: 100%;
            height: 100%;
        }
        .raudona {
            background-color: red;
            width: 100%;
            height: 100%;
        }

        .melyna {
            background-color: blue;
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
            $spalva = "juoda";
        } else if ($spalva == "raudona") {
           $spalva ="raudona";
        } else if ($spalva == "melyna") {
            $spalva ="melyna";
        } else $rezultatas = "turbut turetu buti kita spalva";

} else $rezultatas = "Irasyk spalva - juoda arba raudona dar melyna gali pabandyt"; 

?>



<div class="<?php echo $spalva ?> " style="background-color: <?php echo $spalva; ?>"> <?php echo $rezultatas  ?> </div>

</div>

