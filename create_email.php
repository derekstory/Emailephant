<?php 
session_start(); 
include 'connect.php';
include 'head.php';
?>

<div id="newEmail">

     <div id="confirmWrap">

          <div id="submitConfirm"></div>
     </div>

     <a href="client_options.php">
     	  <img id="newEmailClose" src="http://iconizer.net/files/Brightmix/orig/monotone_close_exit_delete.png" />
     </a> 

     <h1>Create New USAA Email</h1>



     <div id="wrap">

          <form method="POST" action="" name="addEmail" id="addEmail">

	  	<div class="newEmailWrap">

		     <div class="newEmailCategory">
		     	  <h3>Naming Convention</h3>
		     	  <input class="textInput" type="text" name="emailTitle" />
		     </div>

		     <input type="hidden" name="emailClient" value="USAA" />
		     <button id="newEmailSubmit" value="Submit" type="submit">Submit</button>
		</div>
          </form>

     </div>

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
		    header("Location: builder.php?id=' . $email_id . '");
         }
      }
?>    
   

<?php
include 'headClose.php';	
?>


