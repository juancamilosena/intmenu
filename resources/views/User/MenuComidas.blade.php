<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logofinal.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Int Menu</title>
</head>
<body class="bg-dark">
   <header class="cabecera d-flex flex-column align-items-center" style="background-image: url('../img/cabezera05.jpg');">
    <section class="navar">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('/img/logofinal.png') }}" alt="">
        </div>
        </section> 
    </header>
        

        <section>
            <div class="contenedor1-txt1">
                <h2 class="text-light">Comida Rapida</h2>
                <img src="img/icono-comidas.png" alt="">
            </div>
        </section>

        <section class="contenedor1">
            <div id="" class="contenedor1-content">
                <a href="{{ route('carta') }}"><img src="{{ asset('img/hamburguesa.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/perro02.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida02.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida03.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida04.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida05.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida07.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/perro03.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/burrito01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/lasaña01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/sandwich01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/pizza01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/comida01.jpg') }}" alt=""></a>
        </section>


        <section>

            <div class="contenedor2-txt2">
                <h2 class="text-light">Postres</h2>
                <img src="img/icono-postres.png" alt="">
            </div>

        </section>

        <section class="contenedor2">
            <div id="" class="contenedor2-content">
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre10.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre02.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre03.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre04.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre05.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre06.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre07.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre08.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre09.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre10.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre11.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/postre12.jpg') }}" alt=""></a>
        </section>

        <section>

            <div class="cotenedor3-txt3">
                <h2 class="text-light">Bebidas</h2>
                <img src="img/icono-bebidas.png" alt="">
            </div>

        </section>

        <section class="contenedor3">
            <div id="bebida" class="contenedor3-content">
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida07.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida08.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida09.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida10.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida11.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida12.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/cocacola01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/limonada01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/naranja01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/frutos rojos01.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida11.jpg') }}" alt=""></a>
                <a href="{{ route('carta') }}"><img src="{{ asset('img/bebida12.jpg') }}" alt=""></a>
        </section>


        <footer>
            <div class="contactos">
    
                <h2 class="text-light-énfasis">Siguenos</h2>
            </div>
    
            <div class="contenedor-footer">
    
                <div class="content-foo">
    
                    <a href="https://es-la.facebook.com/"><img src="{{ asset('img/facebook2.jpg') }}"></a>
    
                </div>
                <div class="content-foo">
                    <a href="https://web.whatsapp.com/"><img src="{{ asset('img/iconowhatsapp.jpg') }}"></a>
    
                </div>
                <div class="content-foo">
                    <a href="https://www.instagram.com/"><img src="{{ asset('img/instagran2.jpg') }}"></a>
    
                </div>
    
                <div class="content-foo">
                    <a href="https://twitter.com/?lang=es"><img src="{{ asset('img/Twitter.jpg') }}"></a>
    
                </div>
    
                <div class="content-foo">
                    <a href="https://www.youtube.com/"><img src="{{ asset('img/youtube2.jpg') }}"></a>
    
                </div>
    
                <div class="content-foo">
                    <a href="https://www.tiktok.com/es/"><img src="{{ asset('img/tik tok.jpg') }}"></a>
    
                </div>
    
            </div>
            <h2 class="titulo-final">&copy; TODOS LOS DERECHOS RESERVADOS 2024 | CREADOR: GRUPO 5</h2>
        </footer>
    



   
</body>
</html>