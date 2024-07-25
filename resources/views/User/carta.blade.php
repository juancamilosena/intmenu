<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="shortcut icon" href="img/logofinal.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
</head>

<body class="carta-body bg-dark">
    <header class="cabecera d-flex flex-column align-items-center"
        style="background-image: url('../img/cabezera05.jpg');">
        <section class="navar">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('/img/logofinal.png') }}" alt="">
            </div>
        </section>
    </header>



    <section class="my-4 d-flex justify-content-center" style="height: 30vh;" >
        <div class="mb-3 mb-md-0">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
             data-bs-target="#orden" >
                 <img class="boton-carrito text-light" src="img/car2.png" alt="">Check out
                 </button> 
                <a href="/MenuComidas"><img src="img/izquierda.png" alt=""></a>
         </div>
        <div class="mb-3 mb-md-0">
       </div>
    </section>

    


    <section class="contenedor-tarjetas">
        <div class="container-cartas">
            <div class="row">
                @foreach ($products as $product)
                
                <!-- modal pedido -->
              
                <div class="modal fade custom-modal-position custom-modal-bottom" id="hamburguesa{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog custom-modal-dialog  modal-dialog-scrollable modal-full-height-bottom">
                        <div class="modal-content" style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px);">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-light fw-bolder" id="exampleModalLabel">{{$product->name}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-start justify-content-start">
                                        <img class="img-comida" src="{{ asset('/img/hamburguesa.jpg') }}" class="card-img-top" alt="Imagen 1">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Contenido del modal -->
                                        <form action="{{route('detail.store')}}" method="POST" id="form_carta_{{$product->id}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="text-light fw-bold" for="cars">Adiciones</label>
                                                <select name="adiciones" id="cars" class="form-select">
                                                    @foreach ($adiciones as $adicion)
                                                    <option value="{{$adicion->id}}">{{$adicion->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-light fw-bold" for="comment">Comentarios</label>
                                                <textarea name="comentarios" class="form-control" id="comment" rows="3" placeholder="Sugerencias"></textarea>
                                            </div>
                
                                            <div class="mb-3">
                                                <p class="card-text text-success">${{ $product->precio }}</p>
                                                
                                            </div>
                
                                            <div class="mb-3">
                                                <label class="text-light fw-bold" for="tentacles">Cantidad</label>
                                                <input type="number" id="tentacles" name="cantidad" class="form-control-sm rounded-pill custom-input" min="1" max="100" />
                                            </div>
                
                                            <input type="text" name="id_producto" value="{{$product->id}}" hidden>
                                            
                
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between align-items-center flex-column flex-md-row">
                                <div class="mb-3 mb-md-0">
                                    <a href="/MenuComidas"><img src="img/izquierda.png" alt=""></a>
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#orden">
                                        <img class="boton-carrito text-light" src="img/car2.png" alt="">Check out
                                    </button>
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <button type="button" class="btn btn-warning" onclick="document.getElementById('form_carta_{{$product->id}}').submit();">
                                        <img class="boton-carrito text-light" src="img/agregar-a-carrito-de-compras.png" alt="">Add
                                    </button>
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
                                                            <th scope="col">Producto</th>
                                                            <th scope="col">Adiciones</th>
                                                            <th scope="col">Comentarios</th>
                                                            <th scope="col">Precio</th>
                                                            <th scope="col">Cantidad</th>
                                                            <th scope="col">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        @foreach($pedidos as $pedido)
                                                        <tr>
                                                            <th>{{$pedido->id}}</th>
                                                           {{-- @foreach($adiciones as $adicion)
                                                           <p>{{$adicion->id}}>{{$adicion->name}}</p>     
                                                           @endforeach --}}
                                                           <td>{{$pedido->adiciones}}</td>
                                                            <td>{{$pedido->comentarios}}</td>
                                                            <td>{{$pedido->precio}}</td>
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
                
                
                
                
                
                






















                
                
                
                

                
                   
                    <!-- Tarjeta 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="carta-edit">
                            <img class="img-comida" src="{{ asset('/img/hamburguesa.jpg') }}" class="card-img-top"
                                alt="Imagen 1">
                            <div class="card-body">
                                <h5 class="card-title text-light">{{ $product->name }}</h5>
                                <p class="card-text text-light">{{ $product->descripcion }}</p>
                                <p class="card-text text-success">${{ $product->precio }}</p>
                                <p class="card-text text-light">Disponible: {{ $product->disponibilidad }}
                                    <br>
                                    <br>
                                <button type="button" class="btn btn-warning text-light" data-bs-toggle="modal"
                                    data-bs-target="#hamburguesa{{$product->id}}">
                                    Personalizar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

                

            </div>
        </div>

    </section>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
