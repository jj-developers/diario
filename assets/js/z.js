
//setInterval(function(){location.reload(true);}, 5000);


$("#fecha").text(moment().locale('es').format('LL'));


$( document ).ready(function() {

    setInterval(() => {
        $("#contenido").show();

    }, 1000);

});

$('.fb-share-button').click(function(e){
    e.preventDefault();
    FB.ui(
    {
    method: 'feed',
    name: 'This is the content of the "name" field.',
    link: 'http://www.groupstudy.in/articlePost.php?id=A_111213073144',
    picture: 'http://www.groupstudy.in/img/logo3.jpeg',
    caption: 'Top 3 reasons why you should care about your finance',
    description: "What happens when you don't take care of your finances? Just look at our country -- you spend irresponsibly, get in debt up to your eyeballs, and stress about how you're going to make ends meet. The difference is that you don't have a glut of taxpayers…",
    message: ""
    });
    });
    