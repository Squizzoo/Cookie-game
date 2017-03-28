$(document).ready(function(){
    var cookies = 0;

    $("#img").on("click", function(){
        cookies++;
        $("#scoreCount").html(cookies+ " Cookies");
    });
});
