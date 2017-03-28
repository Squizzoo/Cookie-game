$(document).ready(function(){
    var cookies = 0;
    var string = "";

    $("#img").on("click", function(){
        cookies++;
        if(cookies === 1){
            string = " Cookie";
        }

        else {
            string = " Cookies";
        }

        $("#scoreCount").html(cookies+string);
    });
});
