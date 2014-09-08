<?php

include 'connect.php';

      if(isset($_POST['category_name']))
      {
      $errors = array();
      $category_name   =    $_POST['category_name'];
      $category_client   =    $_POST['category_client'];

      if(empty($category_name))
         { 
         header("HTTP/1.0 404 Not Found");
         exit();
         }
         else
         {
         
         $sql = "INSERT INTO
                                                              category(category_name,
                                                                  category_client)
              VALUES('" . mysql_real_escape_string($category_name) . "',
                                           
                    '" . mysql_real_escape_string($category_client) . "')";
     
         mysql_query($sql);
         }
      }
?>    
