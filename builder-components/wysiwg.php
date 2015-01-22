<!--Competely custom WYSIWYG editor-->
<div id="editor">

     <button onClick="bold(); output.value=input.innerHTML;" class="editButton" id="buttonBold">
            <b>B</b>
      </button>

      <button onClick="italic(); output.value=input.innerHTML;" class="editButton">
     	    <i>I</i>
      </button>

      <button onClick="underline(); output.value=input.innerHTML;" class="editButton">
    	    <u>U</u>
      </button>

      <button onClick="superscript(); output.value=input.innerHTML;" class="editButton">
      	    X<sup>x</sup>
      </button>



      <button class="editButton" id="linkWrap">
          Link
      </button>

      <div id="linkChoiceWrap">
      	   <button onClick="linkblack(); output.value=input.innerHTML;" class="linkblack linkChoice editButton">
	         black
	   </button>

           <button onClick="linkblue(); output.value=input.innerHTML;" class="linkblue linkChoice editButton">
	   	 blue
           </button>

           <button onClick="linkwhite(); output.value=input.innerHTML;" class="linkwhite linkChoice editButton">
	         white
           </button>

           <button onClick="linkgold(); output.value=input.innerHTML;" class="linkgold linkChoice editButton">
	   	 gold
	   </button>

           <button onClick="linkgrey(); output.value=input.innerHTML;" class="linkgrey linkChoice editButton">
	         grey
	   </button>
      </div>



      <button class="editButton" id="colorWrap">
            Color
      </button>

      <div id="colorChoiceWrap">
           <button onClick="black(); output.value=input.innerHTML;" class="colorChoice editButton colorBlack">
	         black
	   </button>

           <button onClick="blue(); output.value=input.innerHTML;" class="colorChoice editButton colorBlue">
	         blue
           </button>

           <button onClick="white(); output.value=input.innerHTML;" class="colorChoice editButton colorWhite">
	         white
	   </button>

           <button onClick="gold(); output.value=input.innerHTML;" class="colorChoice editButton colorGold">
	         gold
   	   </button>

           <button onClick="grey(); output.value=input.innerHTML;" class="colorChoice editButton colorGrey">
	         grey
           </button>
      </div>



      <button class="editButton" id="alignWrap">
           Align
      </button>

      <div id="alignChoiceWrap">
           <button onClick="leftalign(); output.value=input.innerHTML;" class="alignChoice editButton">
	         left
           </button>

           <button onClick="centeralign(); output.value=input.innerHTML;" class="alignChoice editButton">
	         center
           </button>
	   
           <button onClick="rightalign(); output.value=input.innerHTML;" class="alignChoice editButton">
	         right
           </button>

           <button onClick="justifyalign(); output.value=input.innerHTML;" class="alignChoice editButton">
	         justify
           </button>
      </div>



      <button class="editButton" id="symbolWrap">
      	   Symbol
      </button>

      <div id="symbolChoiceWrap">
           <button onClick="rball(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">
	         &reg;
	   </button>

           <button onClick="trademark(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">
	   	 &trade;
	   </button>

           <button onClick="copyright(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">
	         &copy;
	   </button>

           <button onClick="bullet(); output.value=input.innerHTML;" class="symbolChoice editButton" id="buttonBold">
	   	 &bull;
	   </button>
      </div>



      <button class="editButton" id="fontsizeWrap">
            Font Size
      </button>

      <div id="fontsizeChoiceWrap">
           <button onClick="font14(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         14px
	   </button>

           <button onClick="font18(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         18px
	   </button>

           <button onClick="font22(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         22px
	   </button>
	   
           <button onClick="font26(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         26px
	   </button>

           <button onClick="font30(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         30px
	   </button>

           <button onClick="font34(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         34px
	   </button>

           <button onClick="font40(); output.value=input.innerHTML;" class="fontsizeChoice editButton">
	         40px
	   </button>

       </div>



       <button onClick="undo(); output.value=input.innerHTML;" class="editButton">
            Undo
       </button>

       <button onClick="redo(); output.value=input.innerHTML;" class="editButton">
            Redo
       </button>
       
       <button class="editButton closeEdit">
            &#10003;
       </button>
</div>