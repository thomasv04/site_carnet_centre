$(document).ready(function() {
    var nbDiapos = $('div.select').length;
    document.getElementById("button").innerHTML = nbDiapos ;
    $(".absents").click(function(){
        if($(this).hasClass("select")){
            $(this).removeClass("select");
            nbDiapos = $('div.select').length;
            document.getElementById("button").innerHTML = nbDiapos ;
        }else{
            $(this).addClass("select");
            nbDiapos = $('div.select').length;
            document.getElementById("button").innerHTML = nbDiapos ;
        }

    });





});
