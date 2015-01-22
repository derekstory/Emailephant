<?php 
session_start(); 
include 'connect.php';
include 'head.php';
?>

<div id="upload">

     <div id="confirmWrap">
          <div id="submitConfirm"></div>
     </div>

     <a href="client_options.php">
           <img id="uploadClose" src="http://iconizer.net/files/Brightmix/orig/monotone_close_exit_delete.png" />
     </a> 

     <h1>USAA</h1>




     <div id="wrap">

          <form method="POST" action="" name="addCategory" id="addCategory">

	  	<div class="uploadWrap uploadCategory">

	  	     <h2>Add Template Category</h2>
	  	     <div class="uploadCategory">
	    	     	  <h3>Category Name</h3>
	    		  <input class="textInput" type="text" name="category_name" maxLength="50" />
	             </div>


	  	     <input type="hidden" name="category_client" value="USAA" />
	  	     <button id="newCategorySubmit" value="submit" type="submit">Submit</button>
	  	     <div id="catSubmitConfirm"></div>

		</div>

           </form>




      	   <form method="POST" action="new_template.php" name="addTemplate" enctype="multipart/form-data" id="addTemplate">
	   	 <div class="uploadWrap">

	   	      <h2>Upload Template</h2>


	  	      <div class="uploadCategory">
	    	      	   <h3>Template name</h3>
	    		   <input class="textInput" type="text" name="template_title" />
	              </div>


	  	      <div class="uploadCategory">
	    	      	   <h3>Template Category</h3>
	    		   <select name="template_category" id="loadTemplateCategories"></select>
	  	     </div>	   


	  	     <div class="uploadCategory">
	    	     	   <h3>Template HTML File</h3>
	    		   <input type="file" name="templateFile" />
	    	     </div>


	  	     <div class="uploadCategory">
	    	          <h3>Template Preview Image</h3>
	    		  <input type="file" name="templateImage" /> 
	    	     </div>


	  	     <button id="uploadSubmitTemplate" value="Submit">Submit</button>

		</div>

           </form>

    </div>

</div>



<?php
include 'headClose.php';	
?>


