$(document).ready(function(){
    $("span").hover(function(){
        $(this).css("background-color", "yellow");
        }, function(){
        $(this).css("background-color", "white");
    });
});