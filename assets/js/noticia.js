import {
    db

} from "../../firebase.js";

import { getDatabase, ref, get, set, onValue, child, orderByChild, query, limitToLast } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-database.js";
const dbRef = ref(getDatabase());



    function preloadFunc()
    {

        getNota();
        getGaleria();
        setfb();    }
    window.onpaint = preloadFunc();

function getNota() {
    get(child(dbRef, 'Noticias/' + getParameterByName("noticia"))).then((snap) => {
        if (snap.exists()) {

            get(child(dbRef, 'FotosNoticias/' + getParameterByName("noticia") + "/0")).then((snapshotfoto) => {
                if (snapshotfoto.exists()) {

                    let nota = snap.val();

                    $("#titulo").text(nota.titulo)
                    $("#subtitulo").text(nota.subtitulo)
                    $("#descripcion").text(nota.descripcion)
                    $('meta[property="og:description"]').attr('content', nota.subtitulo);

                    $("#foto0").append('<img style="min-height: 400px;max-height: 450px; width: 80%;" class="img-fluid p-4" src="' + snapshotfoto.val().foto + '" />')

                    console.log(snap.val())

                } else {
                    console.log("No data available");
                }
            }).catch((error) => {
                console.error(error);
            });

        } else {
            console.log("No data available");
        }
    }).catch((error) => {
        console.error(error);
    });
}

function getGaleria() {
    const fotosslider0 = query(ref(db, 'FotosNoticias/' + getParameterByName("noticia")));

    onValue(fotosslider0, (snapshot) => {
        snapshot.forEach((childSnapshot) => {
            const childKey = childSnapshot.key;
            const foto = childSnapshot.val();

            if (childKey == "0") {

            } else {

                $("#galeria").append(' <div class="col-md-6 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"' +
                    'title="El diario de teziutlan" href="#"><img style="    min-width: 100%; min-height: 290px;max-height: 290px;" class="img-fluid"' +
                    'src="' + foto.foto + '" /></a></div>');

            }



        });
    }, {
        onlyOnce: true
    });
}

function setfb() {
    var URLactual = window.location;
    var encoded = encodeURIComponent(URLactual);

    window.fbAsyncInit = function() {
        FB.init({appId: '434430735194134', status: true, cookie: true,
        xfbml: true});
        };
        (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
        }());

        $('#share_button').click(function(e){
            e.preventDefault();
            FB.ui(
            {
            method: 'feed',
            name: 'Ejemplo.',
            link: 'https://www.google.com',
            picture: 'http://www.groupstudy.in/img/logo3.jpeg',
            caption: 'dfgdgdfgfd',
            description: "dfggfdg…",
            message: ""
            });
            });
}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}