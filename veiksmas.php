<?php 
if(isset($_POST['vardas']) && !empty($_POST['vardas']) && isset($_POST['slaptazodis']) && !empty($_POST['slaptazodis'])) {
    $vardas = $_POST['vardas'];
    $slaptazodis = $_POST['slaptazodis'];

    if($vardas == 'admin'  && $slaptazodis == '12345678') {
        //permeta i manopaskyra.php
        header ('location: manopaskyra.php');
    } else {
        //permeta i 404.php redirect
        header ('location: 404.php');
    }

}


?>