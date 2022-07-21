



$( document ).ready(function() {


$("#ultima").click(function() {
window.location.href = "paginas/noticia.php?nota="+$("#ultima").attr("nota");

});


$("#login").on('submit', function(e){
    e.preventDefault();
 var email=$("#email").val();
 var pass=$("#password").val()
 if(email!="" && pass!="")
 {
  $.ajax
  ({
  type:'post',
  url:'control/login/verificar.php',
  data:{
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="adm/paginas/noticias.php";
  }
  else
  {
    alert("Datos incorrectos verifique su información");
  }
  }
  });
 }

 else
 {
  alert("Rellene los campos vacios");
 }



});
});
