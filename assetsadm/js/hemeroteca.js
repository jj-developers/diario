window.onload = function(){
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
      mes='0'+mes //agrega cero si el menor de 10
    document.getElementById('date').value=ano+"-"+mes+"-"+dia;



        $("#pdf").on('change', function(e){
            e.preventDefault();
    
            var archivo = document.getElementById('pdf');
          
    
            var formData = new FormData();
            
            for (let i = 0; i < archivo.files.length; i++) {
                formData.append('f[]', archivo.files[i]);
            }
            formData.append('fecha', ano+"-"+mes+"-"+dia);
            
            $.ajax({
                url: '../control/subirHemeroteca.php',
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
        });
    
  }
