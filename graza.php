<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graza</title>
</head>
<body>
<h1>Grąža</h1>

<!-- 1.Parduotuvėje pardavėja graža g pirkejui nori atiduoti 100,50,20,10,5 euru banknotais ir 2 ir 1 eurais monetomis. -->
<!-- Apskaičiuoti, kiek ir kokio nominalo banknotų ir monetų pardavėja turės atiduoti pirkėjui. -->

    <div class='container'>
    <form action='graza.php' method='get'>
        <label name='graza'>Įveskite sumą</label>
        <input type='text' name='graza' value=''>
        <button type='submit'>Patvirtinti</button>
</form>
    </div>
    <div class='rezultatas'>

</div>
<?php
if(isset($_GET["graza"]) && !empty($_GET["graza"]) ){
$graza = $_GET['graza'];

if(is_numeric($graza) && $graza > 0) {

$simtines = '';
$penkiasdesimt = '';
$dvidesimt = '';
$desimt = '';
$penki = '';
$du = '';
$vienas ='';
$likutis = '';

        //298
            $simtines = intval($graza / 100); //2
            $likutis = $graza % 100; // 98
            $penkiasdesimt = intval($likutis / 50); // 98/50=1
            $likutis = $likutis % 50; //98%50=48
            $dvidesimt = intval($likutis / 20); //48/20=2
            $likutis = $likutis % 20;
            $desimt = intval($likutis / 10);
            $likutis = $likutis % 10;
            $penki = intval($likutis / 5);
            $likutis = $likutis % 5;
            $du = intval($likutis / 2);
            $likutis = $likutis % 2;
            $vienas = $likutis;


            // echo $likutis;
            

    //     } else {
    //         $simtines = 0;
    //     };

    // else if($graza < 100) (intval($likutis/50 || $graza/50) >= 1) {
    //     $penkiasdesimt = intval($likutis / 50);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50;
    // } else {
    //     $penkiasdesimt = 0;
    // };

    // if(intval($likutis/20) >= 1) {
    //     $dvidesimt = intval($likutis / 20);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50 - $dvidesimt*20;
    // } else {
    //     $dvidesimt = 0;
    // };

    // if(intval($likutis/10) >= 1) {
    //     $desimt = intval($likutis / 10);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50 - $dvidesimt*20 - $desimt*10;
    // } else {
    //     $desimt = 0;
    // };

    // if(intval($likutis/5) >= 1) {
    //     $penki = intval($likutis / 5);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50 - $dvidesimt*20 - $desimt*10 - $penki*5;
    // } else {
    //     $penki = 0;
    // };

    // if(intval($likutis/2) >= 1) {
    //     $du = intval($likutis / 2);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50 - $dvidesimt*20 - $desimt*10 - $penki*5 - $du*2;
    // } else {
    //     $du = 0;
    // };

    // if(intval($likutis/1) >= 1) {
    //     $vienas = intval($likutis / 1);
    //     $likutis = $graza - $simtines*100 - $penkiasdesimt*50 - $dvidesimt*20 - $desimt*10 - $penki*5 - $du*2 - $vienas;
    // } else {
    //     $vienas = 0;
    // };



    echo 'Suma :'.$graza.'<br>';
    echo 'Banknotai po 100 Eur = '.$simtines.'vnt'.'<br>';
    echo 'Banknotai po 50 Eur = '.$penkiasdesimt.'vnt'.'<br>';
    echo 'Banknotai po 20 Eur = '.$dvidesimt.'vnt'.'<br>';
    echo 'Banknotai po 10 Eur = '.$desimt.'vnt'.'<br>';
    echo 'Banknotai po 5 Eur = '.$penki.'vnt'.'<br>';
    echo 'Monetos po 2 Eur = '.$du.'vnt'.'<br>';
    echo 'Monetos po 1 Eur = '.$vienas.'vnt'.'<br>';

    echo 'Pasitikrinimui'.'<br>';
    echo '100*'.$simtines.'+'.'50*'.$penkiasdesimt.'+'.'20*'.$dvidesimt.'+'.'10*'.$desimt.'+'.'5*'.$penki.'+'.'2*'.$du.'+'.'1*'.$vienas;

} else { 
    echo 'Iveskite teigiamą skaitinę vertę';
}
}

45


?>
</body>
</html>