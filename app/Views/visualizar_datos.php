<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body">
        <div class="container-fluid">
            <a class="navbar-brand">Datos</a>
        </div>
    </nav>
    <br>
    <form action="<?php echo base_url('nuevo') ?>" method="post">
        <button class="btn btn-primary" type="submit">Nuevo</button>
    </form>
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Manufactura</th>
                <th>Costo en creditos</th>
                <th>Longitud</th>
                <th>Maxima velocidad atmosferica</th>
                <th>Tripulación</th>
                <th>Pasajeros</th>
                <th>Acciones</th>

        </thead>
        <tbody>
            <?php foreach ($datos as $dato): ?>
            <tr>
                <td><?= $dato['name'] ?></td>
                <td><?= $dato['model'] ?></td>
                <td><?= $dato['manufacturer'] ?></td>
                <td><?= $dato['cost_in_credits'] ?></td>
                <td><?= $dato['length'] ?></td>
                <td><?= $dato['max_atmosphering_speed'] ?></td>
                <td><?= $dato['crew'] ?></td>
                <td><?= $dato['passengers'] ?></td>
                <td>
                    <a href="/csv/eliminar/<?= $dato['id'] ?>" class="btn btn-outline-danger">Eliminar</a>
                    <a href="ver/<?= $dato['id'] ?>" class="btn btn-outline-success">Detalle</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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