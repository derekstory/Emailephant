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
  <body>
    
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

    <!--Iframe injection to provide mobile and desktop previews simultaniously -->
    <div id="mobilePrev">
      <img id="mobileClose" src="https://cdn1.iconfinder.com/data/icons/CrystalClear/128x128/actions/button_cancel.png" />
      <div id="mobileWrap">
	<h2 class="advent">Mobile</h2>
	<iframe id="mobile"></iframe>
      </div>
      <div id="desktopWrap">
	<h2>Desktop</h2>
	<iframe id="desktop"></iframe>
      </div>
    </div>

    <!--Context menu remplacement for template right clicks -->
    <ul class="custom-menu noHighlight">
      <li id="menuUp" class="menuUp">Section Up</li>
      <li id="menuDown" class="menuDown">Section Down</li>
      <li id="menuDelete">Delete Section</li>
      <!--Confirm the delete is desired-->
      <li id="menuDelete" class="menuCancel deleteConfirmOption">Cancel</li>
      <li id="menuDelete" class="menuConfirm deleteConfirmOption">Confirm</li>
    </ul>

    <div id="pageContain">

      <nav id="builderNav" class="bgblack">
	<img src="img/icon.png" alt="Emailephant" id="icon" class="transitionFast" />
	<!--Save the email in current state --> 
	<span>
	  <h3 id="save" class="transitionFast advent">Save</h3>
	</span>
	<!--Download the email in current state --> 
	<span>
	  <h3 id="download" class="transitionFast advent">Download</h3>
	</span>
	<!--Show Preview-->
	<span>
	  <h3 id="mobileShow" class="transitionFast advent">Preview</h3>
	</span>
	<div id="navOrange"></div>
      </nav>

      <!--Edit links-->
      <div id="editLink">
	Text: <input id="linktext"/><br/>
	Link: <input id="linkhref"/><br/>
	<button id="linkEditDone">done</button>
      </div>

      <!--Edit Images (no links)-->
      <div id="editImage">
	Alt: <input id="imageAlt"/><br/>
	Src:<input id="imageSrc"/><br/>
	<button id="imageEditDone" >done</button>
      </div>

      <!--Edit Images (with links)-->
      <div id="editImageLink">
	Alt: <input id="linkedimageAlt"/><br/>
	Src:<input id="linkedimageSrc"/><br/>
	Link:<input id="linkedimageLink"/><br/>
	<button id="linkedimageEditDone" >done</button>
      </div>

      <!--Competely custom WYSIWYG editor-->
      <div id="builder">
	<div id="emailPreview" class="transitionMedium">

	  <div id="editor">
	    <button onClick="bold(); output.value=input.innerHTML;" class="editButton" id="buttonBold"><b>B</b></button>
	    <button onClick="italic(); output.value=input.innerHTML;" class="editButton"><i>I</i></button>
	    <button onClick="underline(); output.value=input.innerHTML;" class="editButton"><u>U</u></button>
	    <button onClick="superscript(); output.value=input.innerHTML;" class="editButton">X<sup>x</sup></button>
	    <button class="editButton" id="linkWrap">Link</button>
	    <div id="linkChoiceWrap">
	      <button onClick="linkblack(); output.value=input.innerHTML;" class="linkblack linkChoice editButton">black</button>
	      <button onClick="linkblue(); output.value=input.innerHTML;"  class="linkblue linkChoice editButton">blue</button>
	      <button onClick="linkwhite(); output.value=input.innerHTML;"  class="linkwhite linkChoice editButton">white</button>
	      <button onClick="linkgold(); output.value=input.innerHTML;"  class="linkgold linkChoice editButton">gold</button>
	      <button onClick="linkgrey(); output.value=input.innerHTML;"  class="linkgrey linkChoice editButton">grey</button>
	    </div>
	    <button class="editButton" id="colorWrap">Color</button>
	    <div id="colorChoiceWrap">
	      <button onClick="black(); output.value=input.innerHTML;" class="colorChoice editButton colorBlack">black</button>
	      <button onClick="blue(); output.value=input.innerHTML;" class="colorChoice editButton colorBlue">blue</button>
	      <button onClick="white(); output.value=input.innerHTML;" class="colorChoice editButton colorWhite">white</button>
	      <button onClick="gold(); output.value=input.innerHTML;" class="colorChoice editButton colorGold">gold</button>
	      <button onClick="grey(); output.value=input.innerHTML;" class="colorChoice editButton colorGrey">grey</button>
	    </div>
	    <button class="editButton" id="alignWrap">Align</button>
	    <div id="alignChoiceWrap">
	      <button onClick="leftalign(); output.value=input.innerHTML;" class="alignChoice editButton">left</button>
	      <button onClick="centeralign(); output.value=input.innerHTML;" class="alignChoice editButton">center</button>
	      <button onClick="rightalign(); output.value=input.innerHTML;" class="alignChoice editButton">right</button>
	      <button onClick="justifyalign(); output.value=input.innerHTML;" class="alignChoice editButton">justify</button>
	    </div>
	    <button class="editButton" id="symbolWrap">Symbol</button>
	    <div id="symbolChoiceWrap">
	      <button onClick="rball(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">&reg;</button>
	      <button onClick="trademark(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">&trade;</button>
	      <button onClick="copyright(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">&copy;</button>
	      <button onClick="bullet(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">&bull;</button>
	    </div>
	    <button class="editButton" id="fontsizeWrap">Font Size</button>
	    <div id="fontsizeChoiceWrap">
	      <button onClick="font14(); output.value=input.innerHTML;" class="fontsizeChoice editButton">14px</button>
	      <button onClick="font18(); output.value=input.innerHTML;" class="fontsizeChoice editButton">18px</button>
	      <button onClick="font22(); output.value=input.innerHTML;" class="fontsizeChoice editButton">22px</button>
	      <button onClick="font26(); output.value=input.innerHTML;" class="fontsizeChoice editButton">26px</button>
	      <button onClick="font30(); output.value=input.innerHTML;" class="fontsizeChoice editButton">30px</button>
	      <button onClick="font34(); output.value=input.innerHTML;" class="fontsizeChoice editButton">34px</button>
	      <button onClick="font40(); output.value=input.innerHTML;" class="fontsizeChoice editButton">40px</button>
	    </div>
	    <button onClick="undo(); output.value=input.innerHTML;"  class="editButton">Undo</button>
	    <button onClick="redo(); output.value=input.innerHTML;"  class="editButton">Redo</button>
	    <button class="editButton closeEdit">&#10003;</button>
	  </div>


          <!--DO NOT REMOVE----- Email from file is loaded into the following empty div#emailCode-->	
	  <div id="emailCode"></div>


	</div>
      </div>


      <!--Template Choice Navigation -->
      <div id="templateChoice" class="noHighlight">
	<div class="gallery clearfix">
	  <ul>
	  
	    <?php
	    //Load all categories
            $loadCategory = mysql_query("SELECT * FROM `category`");

            while($category = mysql_fetch_array($loadCategory))
            {
            $categoryTitle = $category["category_name"];

            echo '<li class="templateSlide" id="start">
               <div class="templateCategory">
                  <h3 class="templateCatLeft transitionFast">&lt;</h3>
                  <div class="templateCatWrap">
	            <h3 class="templateCatChoice">' . $categoryTitle . '</h3>
                  </div>
                  <h3 class="templateCatRight transitionFast">&gt;</h3>
               </div>';
	       
	       //Load the templates associated with that specific category
	       $loadTemplate = mysql_query("SELECT * FROM `category`, `template` WHERE template_category = '$categoryTitle'  AND template_category = category_name");

               while($template = mysql_fetch_array($loadTemplate))
               {
               $templateTitle = $template["template_title"];
               $templateFile = $template["template_file"];
               $templateImage = $template["template_image"];

               echo '<div class="template">
                  <img src="template_images/' . $templateImage . '" alt="" width="100%" />
                  <div class="templateTitle transitionFast">' . $templateTitle . '</div>
                  <input class="templateLocation" type="hidden" value="templates/' . $templateFile . '" />
               </div>'; 

	       }
	    echo '</li>';     
	    }
	    ?>

	  </ul>
	</div>
      </div>

    </div>

    <script src="js/foundation.min.js"></script>
    <script src="js/emailephant.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>


