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