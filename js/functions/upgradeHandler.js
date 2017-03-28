$(document).ready(function(){
    $("#showUG").on("click", function(){
        $.ajax({
            url: 'php/upgrades.php',
            data: 'getContent=true',
            method: 'POST',
            success: function(result){
                alert(result);
            }
        });
    });
});
