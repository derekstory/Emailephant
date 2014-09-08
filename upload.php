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
  <body id="upload">
    <div id="confirmWrap">
      <div id="submitConfirm"></div>
    </div>

      <img id="uploadClose" src="https://cdn1.iconfinder.com/data/icons/CrystalClear/128x128/actions/button_cancel.png" />

      <h1>USAA</h1>
    <div id="wrap">

      <form method="POST" action="" name="addCategory" id="addCategory">
	<section class="uploadWrap uploadCategory">
	  <h2>Add Template Category</h2>
	  <div class="uploadCategory">
	    <h3>Category Name</h3>
	    <input class="textInput" type="text" name="category_name" maxLength="50" />
	  </div>
	  <input type="hidden" name="category_client" value="USAA" />
	  <button id="newCategorySubmit" value="submit" type="submit">Submit</button>
	  <div id="catSubmitConfirm"></div>
	</section>
      </form>


      <form method="POST" action="new_template.php" name="addTemplate" enctype="multipart/form-data" id="addTemplate">
	<section class="uploadWrap">
	  <h2>Upload Template</h2>

	  <div class="uploadCategory">
	    <h3>Template name</h3>
	    <input class="textInput" type="text" name="template_title" />
	  </div>
	  <div class="uploadCategory">
	    <h3>Template Category</h3>
	    <select name="template_category" id="loadTemplateCategories">
	     
	    </select>
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
	</section>
      </form>

    </div>

    <script src="js/foundation.min.js"></script>
    <script src="js/emailephant.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>


