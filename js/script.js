$(document).ready(function(){

    $(".word").hover(function(){

    	// Check if there is a word trace. if there is no file existing we need to call 
        $(this).css("background-color", "yellow");
        }, function(){
        $(this).css("background-color", "white");
    });
});