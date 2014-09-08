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

    <ul class="custom-menu noHighlight">
      <li id="menuUp" class="menuUp">Section Up</li>
      <li id="menuDown" class="menuDown">Section Down</li>
      <li id="menuDelete">Delete Section</li>
      <li id="menuDelete" class="menuCancel deleteConfirmOption">Cancel</li>
      <li id="menuDelete" class="menuConfirm deleteConfirmOption">Confirm</li>
    </ul>

    <div id="pageContain">

      <nav id="builderNav" class="bgblack">
	<a href="index.html">
	  <img src="img/icon.png" alt="Emailephant" id="icon" class="transitionFast" />
	</a>
	<span>
	  <h3 id="download" class="transitionFast advent">Download</h3>
	</span>
	<span>
	  <h3 id="mobileShow" class="transitionFast advent">Preview</h3>
	</span>
	<div id="navOrange"></div>
      </nav>

      <div id="editLink">
	Text: <input id="linktext"/><br/>
	Link: <input id="linkhref"/><br/>
	<button id="linkEditDone">done</button>
      </div>

      <div id="editImage">
	Alt: <input id="imageAlt"/><br/>
	Src:<input id="imageSrc"/><br/>
	<button id="imageEditDone" >done</button>
      </div>

      <div id="editImageLink">
	Alt: <input id="linkedimageAlt"/><br/>
	Src:<input id="linkedimageSrc"/><br/>
	Link:<input id="linkedimageLink"/><br/>
	<button id="linkedimageEditDone" >done</button>
      </div>

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

	  <div id="emailCode">
	    <!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
	    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
		      "http://www.w3.org/TR/html4/strict.dtd">
	    <html style="font-family: 'Arial', Helvetica, sans-serif;">
	      <head>

		<style type="text/css">
		  body {margin: 0;}
		  @media only screen and (max-width: 600px) {
		  table[class="body"] center {
		  min-width: 0 !important;
		  }
		  table[class="body"] .container {
		  width: 95% !important;
		  }
		  table[class="body"] .row {
		  width: 100% !important; display: block !important;
		  }
		  table[class="body"] .wrapper {
		  display: block !important; padding-right: 10px !important; padding-left: 10px !important;
		  }
		  table[class="body"] .columns {
		  table-layout: fixed !important; float: none !important; width: 100% !important; padding-right: 0px !important; padding-left: 0px !important; display: block !important;
		  }
		  table[class="body"] .column {
		  table-layout: fixed !important; float: none !important; width: 100% !important; padding-right: 0px !important; padding-left: 0px !important; display: block !important;
		  }
		  table[class="body"] .wrapper.first .columns {
		  display: table !important;
		  }
		  table[class="body"] .wrapper.first .column {
		  display: table !important;
		  }
		  table[class="body"] table.columns td {
		  width: 100% !important;
		  }
		  table[class="body"] table.column td {
		  width: 100% !important;
		  }
		  table[class="body"] .columns td.one {
		  width: 8.333333% !important;
		  }
		  table[class="body"] .column td.one {
		  width: 8.333333% !important;
		  }
		  table[class="body"] .columns td.two {
		  width: 16.666666% !important;
		  }
		  table[class="body"] .column td.two {
		  width: 16.666666% !important;
		  }
		  table[class="body"] .columns td.three {
		  width: 25% !important;
		  }
		  table[class="body"] .column td.three {
		  width: 25% !important;
		  }
		  table[class="body"] .columns td.four {
		  width: 33.333333% !important;
		  }
		  table[class="body"] .column td.four {
		  width: 33.333333% !important;
		  }
		  table[class="body"] .columns td.five {
		  width: 41.666666% !important;
		  }
		  table[class="body"] .column td.five {
		  width: 41.666666% !important;
		  }
		  table[class="body"] .columns td.six {
		  width: 50% !important;
		  }
		  table[class="body"] .column td.six {
		  width: 50% !important;
		  }
		  table[class="body"] .columns td.seven {
		  width: 58.333333% !important;
		  }
		  table[class="body"] .column td.seven {
		  width: 58.333333% !important;
		  }
		  table[class="body"] .columns td.eight {
		  width: 66.666666% !important;
		  }
		  table[class="body"] .column td.eight {
		  width: 66.666666% !important;
		  }
		  table[class="body"] .columns td.nine {
		  width: 75% !important;
		  }
		  table[class="body"] .column td.nine {
		  width: 75% !important;
		  }
		  table[class="body"] .columns td.ten {
		  width: 83.333333% !important;
		  }
		  table[class="body"] .column td.ten {
		  width: 83.333333% !important;
		  }
		  table[class="body"] .columns td.eleven {
		  width: 91.666666% !important;
		  }
		  table[class="body"] .column td.eleven {
		  width: 91.666666% !important;
		  }
		  table[class="body"] .columns td.twelve {
		  width: 100% !important;
		  }
		  table[class="body"] .column td.twelve {
		  width: 100% !important;
		  }
		  table[class="body"] td.offset-by-one {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-two {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-three {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-four {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-five {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-six {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-seven {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-eight {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-nine {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-ten {
		  padding-left: 0 !important;
		  }
		  table[class="body"] td.offset-by-eleven {
		  padding-left: 0 !important;
		  }
		  table[class="body"] table.columns td.expander {
		  width: 1px !important;
		  }
		  .textcenter-small {
		  text-align: center;
		  }
		  .hidesmall {
		  display: none !important;
		  }
		  .centersmall {
		  text-align: center !important;
		  }
		  .padleft15-small {
		  padding-left: 15px !important;
		  }
		  .button {
		  width: auto;
		  }
		  .centerinbox {
		  padding-left: 23% !important;
		  }
		  }
		  @media only screen and (min-width: 600px) {
		  .hidelarge {
		  display: none;
		  }
		  }
		</style>
	      </head>
	      <body style="width: 100% !important; height: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: 'Arial', Helvetica, sans-serif; background: #e5e5e5; margin: 0!important; padding: 0;" bgcolor="#E5E5E5">
		<table class="body" style="vertical-align: top; text-align: left; height: 100% !important; width: 100%; font-family: 'Arial', Helvetica, sans-serif; background: #e5e5e5; padding: 0;" bgcolor="#E5E5E5">
		  <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
		    <td class="center" align="center" valign="top" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center !important; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
		      <center style="font-family: 'Arial', Helvetica, sans-serif;">
			<table class="container bgwhite" style="vertical-align: top; text-align: inherit; width: 580px; font-family: 'Arial', Helvetica, sans-serif; background: #ffffff; margin: 0 auto; padding: 0;" bgcolor="#FFFFFF">
			  <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
			    <td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
			      <table class="row templateSection" style="vertical-align: top; text-align: left; width: 100%; position: relative; display: block; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td height="6" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				</tr>
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td class="wrapper first" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="seven columns" style="vertical-align: top; text-align: left; width: 330px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="centersmall padleft15" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px 0px 0px 15px;" align="left" valign="top">
					  <a href="" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b;"><img src="images/logo.gif" style="font-family: 'Arial', Helvetica, sans-serif; margin: auto;" /></a>
					</td>
				      </tr>
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="10" class="hidelarge" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-alig: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				  <td class="wrapper last center bggrey radius pad10" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center !important; position: relative; font-family: 'Arial', Helvetica, sans-serif; border-radius: 5px; background: #e5e5e5; padding: 10px;" align="center !important" bgcolor="#E5E5E5" valign="top">
				    <table class="five columns" style="vertical-align: top; text-align: left; width: 230px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="panel sub-grid" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="left" valign="top">
					  <table style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
					    <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					      <td class="one sub-columns" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; min-width: 0px; width: 8.333333%; font-family: 'Arial', Helvetica, sans-serif; padding: 0px 10px 0px 0px;" align="left" valign="top">
						<img src="images/security.png" style="float: left; font-family: 'Arial', Helvetica, sans-serif; margin: auto;" align="left" />
					      </td>
					      <td class="font11 blue eleven sub-columns editArea" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; min-width: 0px; width: 91.666666%; font-family: 'Arial', Helvetica, sans-serif; font-size: 11px; line-height: 13px; color: #00365b; padding: 0px 10px 0px 0px;" align="left" valign="top">
						<font style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 11px; line-height: 13px;"><b style="font-family: 'Arial', Helvetica, sans-serif;">USAA SECURITY ZONE</b><br style="font-family: 'Arial', Helvetica, sans-serif;" />
						  %%FNAME_LOW&amp;&amp;<br style="font-family: 'Arial', Helvetica, sans-serif;" />
						  %%LNAME_LOW%%<br style="font-family: 'Arial', Helvetica, sans-serif;" />
						  USAA # ending in:<br style="font-family: 'Arial', Helvetica, sans-serif;" />
						  %%MEMBER_IR%%n</font>
					      </td>
					    </tr>
					  </table>
					</td>
				      </tr>
				    </table>
				  </td>
				  <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				</tr>
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td height="6" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				</tr>
			      </table>
			      
			      
			      
			      
			      <table class="row templateSection" style="vertical-align: top; text-align: left; width: 100%; position: relative; display: block; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="twelve columns" style="vertical-align: top; text-align: left; width: 580px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="20" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="left" valign="top"></td>
				      </tr>
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="center" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center !important; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="center !important" valign="top">
					  <img src="images/logo_footer.gif" style="font-family: 'Arial', Helvetica, sans-serif; margin: auto;" />
					</td>
				      </tr>
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="blue font11 center editArea" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center !important; font-family: 'Arial', Helvetica, sans-serif; font-size: 11px; line-height: 13px; color: #00365b; padding: 0px;" align="center !important" valign="top">
					  <font style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 11px; line-height: 13px;"><b class="font12" style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 12px; line-height: 18px;">We know what it means to serve.<sup style="font-family: 'Arial', Helvetica, sans-serif;">®</sup><br style="font-family: 'Arial', Helvetica, sans-serif;" /></b> Insurance &nbsp;&nbsp; Banking &nbsp;&nbsp; Investments &nbsp;&nbsp; Retirement &nbsp;&nbsp; Advice</font>
					</td>
					<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				</tr>
			      </table>
			      <table class="bar templateSection" style="vertical-align: top; text-align: left; width: 100% !important; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="bar bggold" style="vertical-align: top; text-align: left; width: 100% !important; font-family: 'Arial', Helvetica, sans-serif; background: #C1A04D; padding: 0;" bgcolor="#C1A04D">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="3" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				    <table class="bar bgblue" style="vertical-align: top; text-align: left; width: 100% !important; font-family: 'Arial', Helvetica, sans-serif; background: #00365b; padding: 0;" bgcolor="#00365B">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="8" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				    <table class="bar" style="vertical-align: top; text-align: left; width: 100% !important; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="6" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				</tr>
			      </table>
			      <table class="row templateSection" style="vertical-align: top; text-align: left; width: 100%; position: relative; display: block; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="twelve columns" style="vertical-align: top; text-align: left; width: 580px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="blue font11 center editArea" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center !important; font-family: 'Arial', Helvetica, sans-serif; font-size: 11px; line-height: 13px; color: #00365b; padding: 0px;" align="center !important" valign="top">
					  <font style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 11px; line-height: 13px;"><br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    <a href="" class="nowrap" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b; white-space: nowrap;">Change your e-mail address</a> &nbsp;&nbsp; | <a href="" class="nowrap" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b; white-space: nowrap;">Unsubscribe</a> &nbsp;&nbsp; | <a href="" class="nowrap" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b; white-space: nowrap;">Privacy Promise</a> &nbsp;&nbsp;<br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    <br style="font-family: 'Arial', Helvetica, sans-serif;" /></font>
					</td>
					<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				</tr>
			      </table>
			      <table class="row templateSection" style="vertical-align: top; text-align: left; width: 100%; position: relative; display: block; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="twelve columns" style="vertical-align: top; text-align: left; width: 580px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="blue font11 pad10 editArea" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; font-size: 11px; line-height: 13px; color: #00365b; padding: 0px 10px;" align="left" valign="top">
					  <font style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 11px; line-height: 13px;"><b style="font-family: 'Arial', Helvetica, sans-serif;">Please do not reply to this e-mail. To contact USAA, visit our secure <a href="" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b;">contact page</a>.</b><br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    <br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    USAA will never ask for sensitive personal information such as a Social Security number, a PIN, account numbers or a password in an e-mail. To ensure delivery to your inbox, please add <a href="mailto:offers@e.usaa.com" style="font-family: 'Arial', Helvetica, sans-serif; color: #00365b;">offers@e.usaa.com</a> to your a ddress book.<br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    <br style="font-family: 'Arial', Helvetica, sans-serif;" />
					    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
					    <br /><br /> 
					    Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
					  </font>
					</td>
					<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				</tr>
			      </table>
			      <table class="row templateSection" style="vertical-align: top; text-align: left; width: 100%; position: relative; display: block; font-family: 'Arial', Helvetica, sans-serif; padding: 0;">
				<tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
				  <td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="five columns" style="vertical-align: top; text-align: left; width: 230px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td height="15" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="left" valign="top"></td>
				      </tr>
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="black font11 centersmall pad10 editArea" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; font-size: 11px; line-height: 13px; color: #000000; padding: 0px 10px;" align="left" valign="top">
					  <font style="font-family: 'Arial', Helvetica, sans-serif; text-align: left; font-size: 11px; line-height: 13px;">© 2014 USAA. 201030-0714</font>
					</td>
					<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				  <td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top">
				    <table class="seven columns" style="vertical-align: top; text-align: left; width: 330px; font-family: 'Arial', Helvetica, sans-serif; margin: 0 auto; padding: 0;">
				      <tr style="vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left">
					<td class="centersmall" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; font-family: 'Arial', Helvetica, sans-serif; padding: 0px;" align="left" valign="top">
					  <img src="images/disclosure_lockup.gif" consider="" the="" audience="" before="" printing="" this="" email.="" style="font-family: 'Arial', Helvetica, sans-serif; margin: auto;" />
					</td>
					<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; font-family: 'Arial', Helvetica, sans-serif; padding: 0;" align="left" valign="top"></td>
				      </tr>
				    </table>
				  </td>
				</tr>
			      </table>
			      <span id="loadTemplate" style="font-family: 'Arial', Helvetica, sans-serif;"></span> 
			    </td>
			  </tr>
			</table>
			<table><tr><td height="40"></td></tr></table>
		      </center>
		    </td>
		  </tr>
		</table>
	      </body>
	    </html>

	  </div>

	</div>
      </div>

      <div id="templateChoice" class="noHighlight">
	<div class="gallery clearfix">
	  <ul>
	  
	    <?php

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


