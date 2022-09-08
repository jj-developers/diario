$( document ).ready(function() {
    $("#banner1").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('banner1');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 'primerafoto');
        
        $.ajax({
            url: '../control/subirBanner.php',
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


    $("#banner2").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('banner2');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 'segundafoto');
        
        $.ajax({
            url: '../control/subirBanner.php',
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

    $("#banner3").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('banner3');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 'tercerafoto');
        
        $.ajax({
            url: '../control/subirBanner.php',
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

    $("#banner4").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('banner4');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 'cuartafoto');
        
        $.ajax({
            url: '../control/subirBanner.php',
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

    $("#banner5").on('change', function(e){
        e.preventDefault();

        var archivo = document.getElementById('banner5');
        

        var formData = new FormData();
        
        for (let i = 0; i < archivo.files.length; i++) {
            formData.append('f[]', archivo.files[i]);
        }
        formData.append('pos', 'quintafoto');
        
        $.ajax({
            url: '../control/subirBanner.php',
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
