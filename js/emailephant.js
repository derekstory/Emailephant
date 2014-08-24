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

function link() {
    document.execCommand('CreateLink', false, '#');
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
    $(".editArea").bind('keyup click', function(e) {
        var $node = $(getSelectionStartNode());
        if ($node.is('a')) {
            $("#editLink").css({
		top: $node.offset().top - $('#editLink').height() - 5,
		left: $node.offset().left
            }).show().data('node', $node);
            $("#linktext").val($node.text());
            $("#linkhref").val($node.attr('href'));
            $("#linkpreview").attr('href', $node.attr('href'));
        } else {
            $("#editLink").hide();
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

//Lower opaity of sibling edit areas on hover
$(".editArea").focus(function() {
    $('.editArea').css('opacity', '.2');
    $(this).css('opacity', '1');
});
$(".editArea").blur(function() {
    $('.editArea').css('opacity', '1');
});

//Display Color options on click
$("#colorWrap").click(function() {
    $('#colorChoiceWrap').toggleClass('colorChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display align options on click
$("#alignWrap").click(function() {
    $('#alignChoiceWrap').toggleClass('alignChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
//Display fontsize options on click
$("#fontsizeWrap").click(function() {
    $('#fontsizeChoiceWrap').toggleClass('fontsizeChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    $('#symbolChoiceWrap').removeClass('symbolChoiceActive');
    return false;
});
$("#symbolWrap").click(function() {
    $('#symbolChoiceWrap').toggleClass('symbolChoiceActive');
    $('#fontsizeChoiceWrap').removeClass('fontsizeChoiceActive');
    $('#alignChoiceWrap').removeClass('alignChoiceActive');
    $('#colorChoiceWrap').removeClass('colorChoiceActive');
    return false;
});

