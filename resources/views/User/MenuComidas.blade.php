<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logofinal.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
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
        
        <section class="my-4 d-flex justify-content-center">
            <div class="mb-3 mb-md-0">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                 data-bs-target="#orden" >
                     <img class="boton-carrito text-light" src="img/car2.png" alt="">Check out
                 </button> 
             </div>
        </section>

    <!--Modal check out-->
    <div class="modal fade custom-modal-bottom" id="orden" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal-dialog modal-xl  modal-dialog-centered modal-dialog-scrollable modal-full-height-bottom">
            <div class="modal-content" style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px);">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-light fw-bolder" id="exampleModalLabel">Carrito</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Contenido del modal -->
                            <form>
                                @csrf
                                <div class="checkout-table">
                                    <table class="table table-striped table-bordered table-hover w-100">
                                        <thead class="bg-ingo text-white">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Adición</th>
                                                <th scope="col">Comentarios</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach($pedidos as $pedido)
                                            <tr>
                                                <th>{{$pedido->id}}</th>
                                                
                                                @foreach($products as $product)
                                                    @if($product->id == $pedido->product_id)
                                                        <td>{{$product->name}}</td>
                                                    @endif
                                                @endforeach

                                              

                                               <!-- Mostrar solo la adición asociada al pedido -->
                    @php
                    $adicionSeleccionada = $adiciones->firstWhere('id', $pedido->adicion_id);
                @endphp
                <td>{{ $adicionSeleccionada ? $adicionSeleccionada->name : 'N/A' }}</td>
                            
                            
                                                <td>{{$pedido->comentarios}}</td>
                                                <td>{{$pedido->cantidad}}</td>
                                                <td>
                                                    <a href="{{route('delete', $pedido->id)}}" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center flex-column flex-md-row">
                    <!-- Botones de pie de página -->
                    <div class="mb-3 mb-md-0">
                        <a href="/MenuComidas"><img src="img/izquierda.png" alt=""></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-warning">
                            <img class="boton-carrito text-light" src="img/cubiertos2.png" alt="">Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        

    <section class="my-4">
        <div class="contenedor1-txt1">
            <h2 class="text-light">Comida Rápida</h2>
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


        <section class="my-4">
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

        <section class="my-4">
            <div class="contenedor3-txt3">
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
    


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>