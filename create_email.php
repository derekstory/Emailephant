<?php 
session_start(); 
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emailephant: Free Email Builder</title>
    <meta name="description" content="Emailephant is the most flexible email builder available. Quickly build emails using modules through our templates or your own custom code." />
    <link href="img/favicon.png" rel="shortcut icon" />

    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:200,700,400' rel='stylesheet' type='text/css' />
  </head>
  <body id="newEmail">

    <div id="confirmWrap">
      <div id="submitConfirm"></div>
    </div>
      <a href="client_options.php">
           <img id="newEmailClose" src="http://iconizer.net/files/Brightmix/orig/monotone_close_exit_delete.png" />
      </a> 

    <h1>Create New USAA Email</h1>
    <div id="wrap">

      <form method="POST" action="" name="addEmail" id="addEmail">
	<section class="newEmailWrap">
	  <div class="newEmailCategory">
	    <h3>Naming Convention</h3>
	    <input class="textInput" type="text" name="emailTitle" />
	  </div>
	  <input type="hidden" name="emailClient" value="USAA" />
	  <button id="newEmailSubmit" value="Submit" type="submit">Submit</button>
	</section>
      </form>
    </div>



    <?php

      if(isset($_POST['emailTitle']))
      {
      $errors = array();
      $emailTitle   =    $_POST['emailTitle'];
      $emailClient   =    $_POST['emailClient'];
      $date = date("Y-m");							
      if(empty($emailTitle))
         { 
         header("HTTP/1.0 404 Not Found");
         exit();
         }
         else
         {
         
         $sql = "INSERT INTO
                                                             email(email_title,
							           email_file,
                                                                  email_client)

                         VALUES('" . mysql_real_escape_string($emailTitle) . "',
                                          'email_builds/$date/$emailTitle.html',
                              '" . mysql_real_escape_string($emailClient) . "')";
     
		    mysql_query($sql);
		    //Check if folder with this date exist - if not, create it
		    if (!file_exists('email_builds/'.$date)) 
		    {
		    mkdir('email_builds/'.$date, 0777, true);
		    }
		    //Copy the starter file, move it to new directory, rename it to the naming convention  
                    $file = 'email_starter/usaa_starter_responsive.html';
                    $newfile = 'email_builds/'.$date.'/'.$emailTitle.'.html';
                    if (!copy($file, $newfile)) 
		    {
                    echo "failed to copy";
                    }
		    //grab the db id, redirect to the build page for new email
		    $email_id = mysql_insert_id();	
		    header('Location: builder.php?id=' . $email_id . '');
          }
      }
    ?>    


    <script src="js/foundation.min.js"></script>
    <script src="js/emailephant.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>


