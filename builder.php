<?php 
session_start(); 
include 'connect.php';
include 'head.php';
?>


<!--Pull the email's file location and name from database-->
<?php
          $loadEmail = mysql_query("SELECT * FROM `email` WHERE  email_id = " . mysql_real_escape_string($_GET['id']). "");

	  while($email = mysql_fetch_array($loadEmail))	 	  
	  {
             $emailTitle= $email["email_title"];	
             $emailFile= $email["email_file"];	
	     //put file in hidden field - JS will load this file path into builder
	     echo '<input type="hidden" value="' . $emailFile . '" id="emailLocation" />';
	  }
?>


<?php
include 'builder-components/save-confirmation.php';
include 'builder-components/email-previews.php';
include 'builder-components/context-menu.php';
?>

   

<div id="pageContain">

     <?php
     include 'builder-components/nav-builder.php';
     include 'builder-components/link-image-editbox.php';
     ?>


     <div id="builder">

     	  <div id="emailPreview" class="transitionMedium">

     	       <!--Text Editor-->
     	       <?php 
     	       include 'builder-components/wysiwg.php';
     	       ?>


	       <!--DO NOT REMOVE----- Email from file is loaded into the following empty div#emailCode-->	
	       <div id="emailCode"></div>

          </div>

     </div>


     <?php
     include 'builder-components/template-choice-sidebar.php';	
     ?>

</div>

   
<?php 
include 'headClose.php';
?>