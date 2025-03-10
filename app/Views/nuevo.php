<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div>
        <nav class="navbar bg-dark border-bottom border-body">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Formulario para crear un nuevo registro</a>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h4>Inserta nuevo dato:</h4>
                    <form action="<?php echo base_url('crear') ?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" id="name" name="name" class="form-control" aria-label="name">
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Modelo:</label>
                            <input type="text" id="model" name="model" class="form-control" aria-label="model">
                        </div>

                        <div class="mb-3">
                            <label for="manufacturer" class="form-label">Manufactura:</label>
                            <input type="text" id="manufacturer" name="manufacturer" class="form-control" aria-label="manufacturer">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" >Costo en creditos:</span>
                            <input type="text" id="cost_in_credits" name="cost_in_credits" class="form-control" aria-label="cost_in_credits">
                            <span class="input-group-text">Longitud</span>
                            <input type="text" id="length" name="length" class="form-control" aria-label="length">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" >Maxima velocidad atmosferica:</span>
                            <input type="text" id="max_atmosphering_speed" name="max_atmosphering_speed" class="form-control" aria-label="max_atmosphering_speed">
                            <span class="input-group-text" >Tripulación:</span>
                            <input type="text" id="crew" name="crew" class="form-control" aria-label="crew">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" >Pasajeros:</span>
                            <input type="text" id="passengers" name="passengers" class="form-control" aria-label="passengers">
                            <span class="input-group-text" >Capacidad:</span>
                            <input type="text" id="cargo_capacity" name="cargo_capacity" class="form-control" aria-label="cargo_capacity">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Consumibles:</span>
                            <input type="text" id="consumables" name="consumables" class="form-control"  aria-label="consumables">
                            <span class="input-group-text">Hiperimpulsor:</span>
                            <input type="text" id="hyperdrive_rating" name="hyperdrive_rating" class="form-control" aria-label="hyperdrive_rating">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">MGLT:</span>
                            <input type="text" id="MGLT" name="MGLT" class="form-control"  aria-label="MGLT">
                            <span class="input-group-text">Clase de nave:</span>
                            <input type="text" id="starship_class" name="starship_class" class="form-control" aria-label="starship_class">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Fecha de creación:</span>
                            <input type="text" id="created" name="created" class="form-control"  aria-label="created">
                            <span class="input-group-text">Fecha de edición:</span>
                            <input type="text" id="edited" name="edited" class="form-control" aria-label="edited">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text">Url:</span>
                            <input type="text" id="url" name="url" class="form-control" aria-label="url">
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>