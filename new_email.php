<?php

include 'connect.php';

      if(isset($_POST['emailTitle']))
      {
      $errors = array();
      $emailTitle   =    $_POST['emailTitle'];
      $emailClient   =    $_POST['emailClient'];

      if(empty($emailTitle))
         { 
         header("HTTP/1.0 404 Not Found");
         exit();
         }
         else
         {
         
         $sql = "INSERT INTO
                                                             email(email_title,
                                                                  email_client)
              VALUES('" . mysql_real_escape_string($emailTitle) . "',
                                           
                    '" . mysql_real_escape_string($emailClient) . "')";
     
         mysql_query($sql);
         }
      }
?>    
