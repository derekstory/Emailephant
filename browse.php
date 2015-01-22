<?php 
session_start(); 
include 'connect.php';
include 'head.php';
?>

<div id="browse">

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

</div>	

<?php
include 'headClose.php';
?>
