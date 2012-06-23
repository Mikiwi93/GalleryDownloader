<?php
$lol="00";
for ($i = 1; $i < 42;$i++){

$sourcecode="http://cdn.fakku.net/8041E1/c/manga/a/acertainrailgununderthepanties_e/images/".$lol.""  .$i. ".jpg";
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_POST, 0);
 
curl_setopt($ch,CURLOPT_URL,$sourcecode);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
$result=curl_exec($ch);

$savefile = fopen('image'.$lol.''.$i.'.jpg', 'w');
fwrite($savefile, $result);
fclose($savefile);
if ($i == 9) $lol="0";
if ($i == 99) $lol="";
}
?>