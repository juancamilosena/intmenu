<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="shortcut icon" href="img/logofinal.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    <section class="contenedor-tarjetas">
        <div class="container-cartas">
            <div class="row">
                @foreach ($products as $product)
                    <!-- modal pedido -->
                    <div class="modal fade" id="hamburguesa{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="ModalComidas modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-light fw-bolder" id="exampleModalLabel">{{$product->name}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>


                                <div class="adiciones-modal d-flex">
                                    <form action="{{route('carta')}}" method="POST">
                                        @csrf
                                        <img class="img-comida" src="{{ asset('/img/hamburguesa.jpg') }}" class="card-img-top"
                                        alt="Imagen 1">
                                        <label class="text-light p-3 fw-bolder" for="cars">Adiciones</label>
                                        <select name="cars" id="cars">
                                            <label>
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                            </label>
                                            @foreach ($adiciones as $adicion)
                                                <option value="{{$adicion->id}}">{{$adicion->name}}</option>
                                            @endforeach
                                        </select>
                                        <label class="text-light p-3 w-1 h-10 fw-bolder fw-bolder" for="text">Catidad
                                            &nbsp;
                                            &nbsp;</label>
                                        <input type="number" id="tentacles" name="tentacles" min="1"
                                            max="100" />
                                    </form>
                                </div>
                                

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-warning">
                                    <img class="boton-carrito" src="img/carrito02.png" alt="">
                                </button>
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
                                <p class="card-text text-light"{{ $product->precio }}></p>
                                <p class="card-text text-light">{{ $product->disponibilidad }} <span id="count1">10</span></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
