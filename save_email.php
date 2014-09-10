<?php

include 'connect.php';

$saveEmail   =    $_POST['saveEmail'];
$emailLocation   =    $_POST['emailLocation'];
$handle = fopen($emailLocation, 'w+');

if($handle)
{
   //overwrite the file
   if(!fwrite($handle, $saveEmail))
   echo "";
}
?>    
