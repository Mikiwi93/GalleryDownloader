<?php
$url="http://google.com/gallery/image";
$zero="00";
$type=".jpg";
$first="1";
$last="42";
for ($i = $first; $i < $last;$i++){
$sourcecode="".$url."".$zero."".$i."".$type."";
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch,CURLOPT_URL,$sourcecode);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result=curl_exec($ch);
$savefile = fopen('image'.$zero.''.$i.''.$type.'', 'w');
fwrite($savefile, $result);
fclose($savefile);
if ($i == 9) $zero="0";
if ($i == 99) $zero="";
}
?>