$( document ).ready(function() {

    setTimeout(() => {
        $("#contenido").show();
        $("#loader").remove();
    }, 1000);

    $( ".editar" ).click(function() {
        window.location.href = "editarNoticia.php?nota="+$(this).attr("nota");


    });

    $( ".borrar" ).click(function() {
        var mensaje;
        var opcion = confirm("¿Desea borrar este registro?");
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


    $("#subir").on('submit', function(e){
        e.preventDefault();

        var archivo = document.getElementById('seleccionararchivo');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        
        formData.append('titulo', $("#titulo").val());
        formData.append('subtitulo', $("#subtitulo").val());
        formData.append('descripcion', $("#descripcion").val());
        formData.append('idcategoria', $("#idcategoria").val());
        $.ajax({
            url: '../control/subir.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response)
                if (response != 0) {
                    location.reload();

                   // alert(response);
                } else {
                    alert('Ocurrio un error revise su información.');
                }
            }
        });
        return false;
    });


});