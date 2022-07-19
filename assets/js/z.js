
//setInterval(function(){location.reload(true);}, 5000);


$("#fecha").text(moment().locale('es').format('LL'));


$( document ).ready(function() {

    setInterval(() => {
        $("#contenido").show();
        $("#loader").css("display","none");
    }, 1000);

});

