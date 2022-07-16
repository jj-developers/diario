
//setInterval(function(){location.reload(true);}, 5000);


$("#fecha").text(moment().locale('es').format('LL'));


$( document ).ready(function() {

    setInterval(() => {
        $("#contenido").show();

    }, 1000);
    $("#fbb").attr("data-href",'http://localhost' + encodeURIComponent(location.href)); 

});

