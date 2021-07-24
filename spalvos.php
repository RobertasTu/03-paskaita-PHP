<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 paskaita Spalvos</title>
</head>


<body>

  
<!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva. -->

<!-- 6. Papildikite 5 programą, kad perduodant per input laukelį ne tik tekstą, bet ir spalvos kodą, puslapis nusidažytu spalvos kodo spalva.   -->

<p>Iveskite spalva</p>
<form action='spalvos_action.php' method='post'>
    <input type='text' name='spalva' />
  
    <button type='submit'>Patvirtinti</button> 

</form>


</body>
</html>