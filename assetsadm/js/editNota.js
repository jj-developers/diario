$( document ).ready(function() {
    $("#primerafoto").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('primerafoto');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 1);
        formData.append('id', $(this).attr("nota"));

        
        $.ajax({
            url: '../control/subirFoto.php',
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