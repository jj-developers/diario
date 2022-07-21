
//setInterval(function(){location.reload(true);}, 5000);


$("#fecha").text(moment().locale('es').format('LL'));


$( document ).ready(function() {

    setTimeout(() => {
        $("#contenido").show();
        $("#loader").remove();
    }, 1000);

});

