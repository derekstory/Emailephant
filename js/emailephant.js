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
    document.execCommand('CreateLink', false, 'http://');
    document.execCommand("foreColor",false, '#000000');
}
function linkblue() {
    document.execCommand('CreateLink', false, 'http://');
    document.execCommand("foreColor",false, '#00365b');
}
function linkwhite() {
    document.execCommand('CreateLink', false, 'http://');
    document.execCommand("foreColor",false, '#ffffff');
}
function linkgold() {
    document.execCommand('CreateLink', false, 'http://');
    document.execCommand("foreColor",false, '#C1A04D');
}
function linkgrey() {
    document.execCommand('CreateLink', false, 'http://');
    document.execCommand("foreColor",false, '#3d3d3d');
}
function superscript() {
    document.execCommand('superscript', false, null);
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
function undo() {
    document.execCommand("undo",false, false);
}
function redo() {
    document.execCommand("redo",false, false);
}

//Show & Hide editor tools
$('.editArea').click(function(){
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
    $(".editArea").bind('dblclick', function(e) {
        var $node = $(getSelectionStartNode());
        if ($node.is('a, a font')) {
            $("#editLink").css({
		top: $node.offset().top - $('#editLink').height() - 5,
		left: $node.offset().left
            }).show().data('node', $node);
            $("#linktext").val($node.text());
            $("#linkhref").val($node.attr('href'));
            $("#linkpreview").attr('href', $node.attr('href'));
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
    $("#editLink").hide();
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

