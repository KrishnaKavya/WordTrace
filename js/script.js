/*
The script perform the activity of changing the background color of the word when the user hovers on the word.
*/
$(document).ready(function(){

	/*
		The hover function hover performs two functions. 
		The hover function is applied on all the tags of the class word. 
		When the user places in cursor on the tag with class word- The background of the tag is set to yellow. 
		when the user removes the cursor  or moves out of the tag- The background of the tag is set to white.
	*/
    $(".word").hover(function(){

    	//handlerIn function. 
        $(this).css("background-color", "yellow");
        },
        //handlerOut Function. 
        function(){
        $(this).css("background-color", "white");
    });
});