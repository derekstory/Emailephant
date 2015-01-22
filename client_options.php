<?php 
session_start(); 
include 'connect.php';
include 'head.php';
?>

<div id="clientOptions">

     <section>
          <a href="create_email.php">
	       <div class="clientChoice transitionMedium" id="clientUSAA">
	       	    <h2>New Email</h2>
	       </div>
	  </a>


	  <a href="browse.php">
	       <div class="clientChoice transitionMedium" id="clientUSAA">
	            <h2>Browse Emails</h2>
	       </div>
	  </a>	

	  <a href="upload.php">
	       <div class="clientChoice transitionMedium" id="clientUSAA">
	            <h2>Categories/Templates</h2>
	       </div>
	  </a>

     </section>	  

</div>


<?php 
include 'headClose.php';
?>