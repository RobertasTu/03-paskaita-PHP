<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Narsykle</title>
</head>
<body>
<div class='container'>
    <h1>Tinklapis</h1>
    <form action='narsykle.php' type='get'>
    <button type='submit' name='submit' id='submit'>Mygtukas</button>
    <a href='narsykle.php'>Išvalyti</a>
</form>

<div class='rezultatas'>

    
<!-- <img class='browser -chrome'  src="https://img.icons8.com/fluency/48/000000/chrome.png"/>
<img class='browser -opera'  src="https://img.icons8.com/fluency/48/000000/opera.png"/>
<img class='browser -edge'  src="https://img.icons8.com/color/48/000000/ms-edge-new.png"/>
<img class='browser -tor' src="https://img.icons8.com/cute-clipart/64/000000/tor-browser.png"/>
<img class='browser -explorer' src="https://img.icons8.com/color/48/000000/internet-explorer.png"/>
<img class='browser -firefox' src="<https://www.symbols.com/symbol/firefox-logo>"/> -->
</div>

</div>

<?php

if(isset($_GET['submit'])) {
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    } 
    elseif(preg_match('/Edge/i',$u_agent))
    {
        $bname = 'Microsoft Edge';
        $ub = "Edge";
    }

   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

// now try it
$ua=getBrowser();
// $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
$yourbrowser= "Your browser: " . $ua['name'];

// echo $ua['name'];
if($ua['name']=='Google Chrome') {
// echo ($yourbrowser);

    echo 'Naudojama narsykle: '.'<img src="https://img.icons8.com/fluency/48/000000/chrome.png"/>'.$ua['name'];
} 
if($ua['name']=='Internet Explorer') {
    echo 'Naudojama narsykle: '.'<img src="https://img.icons8.com/color/48/000000/internet-explorer.png"/>'.$ua['name'];
}
if($ua['name']=='Microsoft Edge') {
    echo 'Naudojama narsykle: '.'<img src="https://img.icons8.com/color/48/000000/ms-edge-new.pnghttp://localhost/Mokymosi_projektai/03-paskaita/narsykle.php"/>'.$ua['name'];
}
if($ua['name']=='Mozilla Firefox') {
    echo 'Naudojama narsykle: '.'<img src="<https://www.symbols.com/symbol/firefox-logo>'.$ua['name'];
}

}
?>
  
</body>
</html>