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

  <body id="clientOptions">
    <section>

    <a href="create_email.php">
        <div class="clientChoice transitionMedium" id="clientUSAA">
            <h2>New Email</h2>
        </div>
    </a>
    
    <div class="clientChoice transitionMedium" id="clientUSAA">
        <h2>Browse Emails</h2>
    </div>
    <a href="upload.php">
       <div class="clientChoice transitionMedium" id="clientUSAA">
           <h2>Categories/Templates</h2>
       </div>
    </a>

    </section>	  



    <script src="js/foundation.min.js"></script>
    <script src="js/emailephant.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>


