<?php

include 'connect.php';


      if(isset($_POST['template_title']))
      {
      $errors = array();
      $template_title   =    $_POST['template_title'];
      $template_category  =  $_POST['template_category'];
      $templateFile   =    ($_FILES['templateFile']['name']);
      $templateImage   =   ($_FILES['templateImage']['name']); 


      if(empty($template_title) || empty($template_category) || empty($templateFile) || empty($templateImage))
         { 
         header("HTTP/1.0 404 Not Found");
         exit();
         }
         else
         {
         $sql = "INSERT INTO
                                                            template(template_title,
                                                                  template_category,
                                                                      template_file,
                                                                     template_image)

              VALUES('" . mysql_real_escape_string($template_title) . "',
                                           
                    '" . mysql_real_escape_string($template_category) . "',
                                                          '$templateFile',
                                                       '$templateImage')";

          mysql_query($sql);
          move_uploaded_file($_FILES["templateFile"]["tmp_name"], "templates/" . $_FILES["templateFile"]["name"]);
          move_uploaded_file($_FILES["templateImage"]["tmp_name"], "template_images/" . $_FILES["templateImage"]["name"]);

          }

       }
?>    
