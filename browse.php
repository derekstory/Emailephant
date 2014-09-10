<?php 
session_start(); 
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emailephant: Email Builder</title>
    <meta name="description" content="Emailephant is the most flexible email builder available. Quickly build emails using modules through our templates or your own custom code." />
    <link href="img/favicon.png" rel="shortcut icon" />

    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:200,700,400' rel='stylesheet' type='text/css' />
  </head>
 <body id="browse">
    <a href="client_options.php">
           <img id="browseClose" src="http://iconizer.net/files/Brightmix/orig/monotone_close_exit_delete.png" />
    </a> 
    <h1 class="advent">Browse Emails</h1>
    <section id="wrap">

      <?php
	    //Select all emails built in specific months
            $loadDate = mysql_query("SELECT DISTINCT DATE_FORMAT(email_date, '%m-%Y') AS email_date FROM email ORDER BY email_date DESC");

            while($date = mysql_fetch_array($loadDate))
            {
               $date = $date["email_date"];

               echo '<h2 class="advent transitionFast emailMonth">' . $date .'</h2>';
	       echo '<div class="emailChoice transitionFast">';
	       //Load emails created within that month
               $loadEmails = mysql_query("SELECT * FROM email WHERE DATE_FORMAT(email_date, '%m-%Y') = '$date' "); 
	       
	       while($emailByDate = mysql_fetch_array($loadEmails))
	       {
                   $emailTitle = $emailByDate["email_title"];	
                   $emailDate = $emailByDate["email_date"];	
                   $emailID = $emailByDate["email_id"];	

                   echo '<a href="builder.php?id=' . $emailID . '">
   		               <h3 class="advent">' . $emailTitle .'</h3>
		               <h4 class="advent">' . $emailDate .'</h4>
	                 </a>';
	       }
	    echo '</div>';
	    }
      ?>
   </section>

    <script src="js/emailephant.js"></script>
 </body>
</html>
