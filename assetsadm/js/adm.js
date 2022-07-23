$( document ).ready(function() {

    setTimeout(() => {
        $("#contenido").show();
        $("#loader").remove();
    }, 1000);

    $( ".borrar" ).click(function() {
        var mensaje;
        var opcion = confirm("Clicka en Aceptar o Cancelar");
        if (opcion == true) {
                  $.ajax
      ({
      type:'post',
      url:'../control/borrarnoticia.php',
      data:{
       
       idn:$(this).attr("nota")
      },
      success:function(response) {

      if(response=="success")
      {
        location.reload();
    }
      else
      {
        alert("Error al eliminar el registro");
      }
      }
      });




        } 
        
     
     
    
     
    
    
    
    });


    $("#buscador").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#dataTable tr").filter(function() {
            $(this).toggle($(this).text()
            .toLowerCase().indexOf(value) > -1)
        });
    });


    $("#seleccionararchivo").on('change' , function(){

        var archivo = document.getElementById('seleccionararchivo');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        


        $.ajax({
            url: '../control/subir.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                   // alert(response);
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
        return false;
    });


});