
//Promt users to confirm if they want to leave page
var confirmOnPageExit = function (e) 
{
    // If we haven't been passed the event get the window.event
    e = e || window.event;

    var message = 'If you leave this page, you will lose any unsaved changes.';

    // For IE6-8 and Firefox prior to version 4
    if (e) 
    {
        e.returnValue = message;
    }

    // For Chrome, Safari, IE8+ and Opera 12+
    return message;
};
window.onload = function() {
    //Turn prompt on
    //window.onbeforeunload = confirmOnPageExit;
    //Turn prompt off
    window.onbeforeunload = null;
};


/*Download the email.html (all content wrapped in #emailCode) and insert doctype, meta, and html tags*/
function downloadInnerHtml(filename, elId, mimeType) {
    //Turn off contenteditable
    $('td.editArea').attr('contenteditable', false);
    var elHtml = document.getElementById(elId).innerHTML;
    var fullHtml = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"X-UA-Compatible\" content=\"IE=8\" /><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><meta name=\"viewport\" content=\"width=device-width\" /></head><body style=\"width: 100%; height: 100%; font-family: \'Arial\', Helvetica, sans-serif; -webkit-text-size-adjust: none; background: #e5e5e5; margin: 0; padding: 0;\" bgcolor=\"#E5E5E5\">" + elHtml + "</body></html>";

    mimeType = mimeType || 'text/html';
    var link = document.createElement('a');

    mimeType = mimeType || 'text/html';
    link.setAttribute('download', filename);
    link.setAttribute('href', 'data:' + mimeType  +  ';charset=utf-8,' + encodeURIComponent(fullHtml));
    link.click(); 
}
//File name for downloaded email
var fileName =  'email.html'; 

//Download the file on mousedown 
$('#download').mousedown(function(){
    downloadInnerHtml(fileName, 'emailCode','text/html');
});

//Turn editarea back on in email builder on mouse up
$('*').mouseup(function(){
    $('td.editArea').attr('contenteditable', true);
});


/* The text editor */

//Contenteditable button commands
function bold() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand('bold', false, null);
}
function italic() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand('italic', false, null);
}

function underline() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand('underline', false, null);
}
//Links
function linkblack() {
    document.execCommand('CreateLink', true, 'http://');
    var black = window.getSelection().focusNode.parentNode;
    $(black).css('color', '#000000');
}
function linkblue() {
    document.execCommand('CreateLink', false, 'http://');
    var blue = window.getSelection().focusNode.parentNode;
    $(blue).css('color', '#00365b');
}
function linkwhite() {
    document.execCommand('CreateLink', false, 'http://');
    var white = window.getSelection().focusNode.parentNode;
    $(white).css('color', '#ffffff');
}
function linkgold() {
    document.execCommand('CreateLink', false, 'http://');
    var gold = window.getSelection().focusNode.parentNode;
    $(gold).css('color', '#C1A04D');
}
function linkgrey() {
    document.execCommand('CreateLink', false, 'http://');
    var grey = window.getSelection().focusNode.parentNode;
    $(grey).css('color', '#3d3d3d');
}
function superscript() {
    document.execCommand('superscript', false, null);
    var superscript = window.getSelection().focusNode.parentNode;
    $(superscript).css('font-size', '60%').css('line-height','.7');
}
function leftalign() {
    document.execCommand('justifyleft', false, null);
}
function centeralign() {
    document.execCommand('justifycenter', false, null);
}
function rightalign() {
    document.execCommand('justifyright', false, null);
}
function justifyalign() {
    document.execCommand('justifyfull', false, null);
}
//Symbols
function rball() {
    document.execCommand('insertHTML', false, '&reg;');
}
function trademark() {
    document.execCommand('insertHTML', false, '&trade;');
}
function copyright() {
    document.execCommand('insertHTML', false, '&copy;');
}
function bullet() {
    document.execCommand('insertHTML', false, '&bull;');
}
//Font Color
function blue() {
    var colorpicker = "#00365b";
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand("foreColor",false, colorpicker);
}
function white() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand("foreColor",false, "#ffffff");
}
function black() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand("foreColor",false, "#000000");
}
function gold() {
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand("foreColor",false, "#C1A04D");
}
function grey() {
    var colorpicker = "#3d3d3d";
    document.execCommand('StyleWithCSS', false, false);
    document.execCommand("foreColor",false, colorpicker);
}
//Font Sizes
function font14() {
    document.execCommand("fontSize", false, "1");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "1") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "14px";
        }
    }
}
function font18() {
    document.execCommand("fontSize", false, "2");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "2") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "18px";
        }
    }
}
function font22() {
    document.execCommand("fontSize", false, "3");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "3") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "22px";
        }
    }
}
function font26() {
    document.execCommand("fontSize", false, "4");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "4") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "26px";
        }
    }
}
function font30() {
    document.execCommand("fontSize", false, "5");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "5") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "30px";
        }
    }
}
function font34() {
    document.execCommand("fontSize", false, "6");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "6") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "34px";
        }
    }
}
function font40() {
    document.execCommand("fontSize", false, "7");
    var fontElements = document.getElementsByTagName("font");
    for (var i = 0, len = fontElements.length; i < len; ++i) {
        if (fontElements[i].size == "7") {
            fontElements[i].removeAttribute("size");
            fontElements[i].style.fontSize = "40px";
        }
    }
}

//Undo and Redo (changes made in contentarea only)
function undo() {
    document.execCommand("undo",false, false);
}
function redo() {
    document.execCommand("redo",false, false);
}

//Show & Hide editor tools

$(document).on("click", ".editArea", function(){
    $('#editor').css('width', '75px');
});
$('.closeEdit').click(function(){
    $('#editor').css('width', '0');    
});


//Edit a href on click
function getSelectionStartNode(){
    if (window.getSelection) { // should work in webkit/ff
	var node = window.getSelection().anchorNode;
	var startNode = (node.nodeName == "#text" ? node.parentNode : node);
	return startNode;
    }
}

$(function() {
    $("#editLink").hide();
    $(document).on("dblclick", ".editArea", function(e){
        var $node = $(getSelectionStartNode());
        if ($node.is('a')) {
	    
            $("#editLink").css({
		top: $node.offset().top - $('#editLink').height() - 5,
		left: $node.offset().left
            }).fadeIn(200).data('node', $node);
            $("#linktext").val($node.text());
            $("#linkhref").val($node.attr('href'));
        } 
    });
    $("#linktext").bind('keyup change', function() {
	var $node = $("#editLink").data('node');
	$node.text($(this).val());
    });
    $("#linkhref").bind('keyup change', function() {
	var $node = $("#editLink").data('node');
	$node.attr('href', $(this).val());
    });
});
$("#linkEditDone").click(function() { 
    $("#editLink").fadeOut(200);
});



//Edit image src and alt text on click (non-linked image)
$(function () {
    $("#editImage").hide();
    $(document).on("dblclick", "td > img", function(){
        imgChange = this;
        $('#imageAlt').val($(imgChange).attr('alt'));
        $('#imageSrc').val($(imgChange).attr('src'));
        $("#editImage").css({
            top: $(this).offset().top - $('#editImage').height() - 5,
            left: $(this).offset().left
        }).fadeIn(200);
    });
});
$("#imageEditDone").click(function () {
    $("#editImage").fadeOut(200);
    var imgSrc = $("#imageSrc").val();
    var imgAlt = $("#imageAlt").val();
    $(imgChange).attr('src', imgSrc).attr('alt', imgAlt);
});

//Enter keystroke closes all editboxes and saves changes 
$("#editImage input").keyup(function(event){
    if(event.keyCode == 13){
        $("#editLink, #editImage, #editImageLink").fadeOut(200);
	var imgSrc = $("#imageSrc").val();
	var imgAlt = $("#imageAlt").val();
	$(imgChange).attr('src', imgSrc).attr('alt', imgAlt);
    }
});


//Edit image src and alt text on click (linked image)
$(function () {
    $("#editImageLink").hide();
    $(document).on("dblclick", "a", function(e){
	e.preventDefault();
        linkedimgChange = this;
        linkedimgChangeImg = $('img', this);
        if ($(linkedimgChange).children('img').length > 0) {
            $('#linkedimageAlt').val($(linkedimgChangeImg).attr('alt'));
            $('#linkedimageSrc').val($(linkedimgChangeImg).attr('src'));
            $('#linkedimageLink').val($(linkedimgChange).attr('href'));
            $("#editImageLink").css({
                top: $(this).offset().top - $('#editImageLink').height() - 5,
                left: $(this).offset().left
            }).fadeIn(200);
        }
    });
});


$("#linkedimageEditDone").click(function () {
    $("#editImageLink").fadeOut(200);
    var linkedimgSrc = $("#linkedimageSrc").val();
    var linkedimgAlt = $("#linkedimageAlt").val();
    var linkedimgLink = $("#linkedimageLink").val();
    $(linkedimgChangeImg).attr('src', linkedimgSrc).attr('alt', linkedimgAlt);
    $(linkedimgChange).attr('href', linkedimgLink);
});
//Enter keystroke closes all editboxes and saves changes 
$("#editImageLink input").keyup(function(event){
    if(event.keyCode == 13){
        $("#editLink, #editImage, #editImageLink").fadeOut(200);
	var linkedimgSrc = $("#linkedimageSrc").val();
	var linkedimgAlt = $("#linkedimageAlt").val();
	var linkedimgLink = $("#linkedimageLink").val();
	$(linkedimgChangeImg).attr('src', linkedimgSrc).attr('alt', linkedimgAlt);
	$(linkedimgChange).attr('href', linkedimgLink);

    }
});


//Insert BR on return keystroke
$('div[contenteditable=true]').keydown(function(e) {
    // trap the return key being pressed
    if (e.keyCode == 13) {
	// insert 2 br tags (if only one br tag is inserted the cursor won't go to the second line)
	document.execCommand('insertHTML', false, '<br><br>');
	// prevent the default behaviour of return key pressed
	return false;
    }
});

//Display link options on click
$("#linkWrap").click(function() {
    $('#linkChoiceWrap').toggleClass('linkChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display Color options on click
$("#colorWrap").click(function() {
    $('#colorChoiceWrap').toggleClass('colorChoiceActive');
    $('#linkChoiceWrap').removeClass('linkChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display align options on click
$("#alignWrap").click(function() {
    $('#alignChoiceWrap').toggleClass('alignChoiceActive');
    $('#linkChoiceWrap').removeClass('linkChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display fontsize options on click
$("#fontsizeWrap").click(function() {
    $('#fontsizeChoiceWrap').toggleClass('fontsizeChoiceActive');
    $('#linkChoiceWrap').removeClass('linkChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display symbol options on click
$("#symbolWrap").click(function() {
    $('#symbolChoiceWrap').toggleClass('symbolChoiceActive');
    $('#linkChoiceWrap').removeClass('linkChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    return false;
});


//Prevent email links from working in editor
$(document).on("click", "td a", function(e){
    e.preventDefault();
});



//Replace default context menu on right click
$(function () {
    $('.custom-menu').hide();
    $(document).on("contextmenu", ".templateSection", function(event){
        event.preventDefault();
        thisTemplate = this;
        $(".custom-menu").css({
            top: event.pageY + "px",
            left: event.pageX + "px"
        }).fadeIn(200);
	$('.templateSection').fadeTo(20, 1).css('border', 'none');
	$(thisTemplate).fadeTo(20, .3).css('border', '3px dashed orange');
	//hide delete confirm options if open
	$(".menuConfirm, .menuCancel").removeClass('deleteConfirm').addClass('deleteConfirmOption');
	//remove border around focused edit area blurring it
	$('.editArea').blur();
    });
});


//Delete Section -- require confirmation to prevent unwanted deletes
$("#menuDelete").click(function () {
    $(".menuConfirm, .menuCancel").removeClass('deleteConfirmOption').addClass('deleteConfirm');
});
$('.menuConfirm, .menuCancel').click(function() {
    $(".custom-menu").hide(100);
    $(".menuConfirm, .menuCancel").removeClass('deleteConfirm').addClass('deleteConfirmOption');
});
$('.menuConfirm').click (function() {
    $(thisTemplate).remove();
});

//Move sections up and down
$('.menuUp, .menuDown').click(function () {
    var parent = $(thisTemplate).closest('.templateSection');
    if ($(this).hasClass('menuUp')) {
        parent.insertBefore(parent.prev('.templateSection'));
    } else if ($(this).hasClass('menuDown')) {
        parent.insertAfter(parent.next('.templateSection'));
    }
});

//Close context menu when clicking outside of menu
$(document).mousedown(function (e) {
    //left mouse down
    switch (e.which) {
    case 1:
        // If the clicked element is not the menu
        if (!$(e.target).parents('.custom-menu').length > 0) {
            $(".custom-menu").hide(100);
	    $(thisTemplate).fadeTo(20, 1).css('border', 'none');
	    //hide delete confirm options if open
	    $(".menuConfirm, .menuCancel").removeClass('deleteConfirm').addClass('deleteConfirmOption');
        }
    }
});

//Choose the template -- Load file from template folder
$(document).ready(function(){
    $(".template").on("click", function(){
	//Get location of file
	var templateLocation = $(this).children('.templateLocation').val();
	$.get(templateLocation, function(response) {
	    var loadTemplate =  response;
	    $("#loadTemplate").replaceWith(loadTemplate);
	});

    });
});

//Template Choice Slider
var $slide = $("#start");
$( ".templateCatRight" ).click(function() {
    $slide = $slide.next();
    $('.templateSlide').fadeOut(0);
    $slide.fadeIn(0);
});
$( ".templateCatLeft" ).click(function() {
    $slide = $slide.prev();
    $('.templateSlide').fadeOut(0);
    $slide.fadeIn(0);
});


//Mobile Preview -- Iframe Injection
$('#mobileShow').click(function () {
    //open iframe links in new tab
    $('a').attr('target','_blank');

    $('#mobilePrev').fadeIn(300);
    $('td.editArea').attr('contenteditable', false);

    var $iframe = $('iframe#mobile');
    var iframe = $iframe[0];
    var doc = iframe.document;
    var content = $('#emailCode').html();
    if (iframe.contentDocument) {
        doc = iframe.contentDocument;
    } else if (iframe.contentWindow) {
        doc = iframe.contentWindow.document;
    }
    doc.open();
    doc.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">");
    
    doc.writeln(content);
    doc.close();


});

//Show mobile preview
$('#mobileShow').click(function () {
    $('#mobilePrev').fadeIn(300);
    //turn of contenteditable
    $('td.editArea').attr('contenteditable', false);
    var $iframe = $('iframe#desktop');
    var iframe = $iframe[0];
    var doc = iframe.document;
    var content = $('#emailCode').html();
    if (iframe.contentDocument) {
        doc = iframe.contentDocument;
    } else if (iframe.contentWindow) {
        doc = iframe.contentWindow.document;
    }
    doc.open();
    doc.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"   \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">");
    doc.writeln(content);
    doc.close();
});

//Turn contenteditable back on and close preview
$('#mobileClose').click(function () {
    $('#insert').attr('contenteditable', true);
    $('#mobilePrev').fadeOut(300);
    //Stop links from opening in new tab
    $('a').attr('target','');
});
//Close previews on escape key
$(document).keydown(function(e) {
    if (e.keyCode == 27) {
	$('#mobilePrev').fadeOut(300);
	//Stop links from opening in new tab
	$('a').attr('target','');
    }
});
