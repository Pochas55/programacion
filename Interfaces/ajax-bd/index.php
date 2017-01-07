<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
</head>
<body>
    <h1>Mis Películas</h1>
    <button id="get-movies">Ver Películas</button>
    <a class="prueba fancybox.ajax" href="./get_data.php">Ver Películas en Fancy Box</a>
    <section id="movies"></section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        (function (d, w, ajax){
            var READY_STATE_COMPLETE = 4,
                OK = 200,
                movies = d.querySelector('#movies'),
                btn = d.querySelector('#get-movies');

            function getData () {
                ajax.open('GET', './get_data.php', true);
                //ajax.open('GET', './get_data.php?id=tt0468569', true);
                
                ajax.onload = function () {
                    if ( ajax.readyState === READY_STATE_COMPLETE ) {
                        if ( ajax.status === OK ) {
                            movies.innerHTML = ajax.response;
                        } else {
                            movies.innerHTML = '<p>Problemas con el servidor. Error N° <mark>' + ajax.status + '</mark>: <b>' + ajax.statusText + '</b></p>';
                        }

                        console.log(ajax);
                    }
                }

                ajax.send();
            }

            //w.onload = getData;
            btn.onclick = getData;
        })(document, window, new XMLHttpRequest());

        $('.prueba').fancybox({
            openEffect:'elastic',
            openSpeed:3000
        });
    </script>
</body>
</html>