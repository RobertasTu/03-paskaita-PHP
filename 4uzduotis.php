<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 ir 4uzduotis</title>
</head>
<body>

<form action='4uzduotis.php' method='post'>
<div class='form-group'>
                    <label for='vardas'>Vardas :</label>
                    <input class="form-control" placeholder='Iveskite savo varda' type='text' id='vardas' name='vardas' />
            </div>
            <div class='form-group'>
                    <label for='password'>Slaptazodis</label>
                    <input class="form-control" placeholder='Iveskite slaptazodi' type='text' id='password' name='password' />
            </div>
    <button type='submit'>Patvirtinti</button>

    
</body>
</html>

<?php 

if (isset($_POST["vardas"]) && !empty($_POST["vardas"]) && isset($_POST["password"]) && !empty($_POST["password"]) ) {
$vardas = $_POST['vardas'];
$password = $_POST['password'];
    if($vardas == 'admin' && $password == 123456 ) {
        header('Location: manopaskyra.php');
    } else {
        header('Location: 404.php');
    }


}


?>