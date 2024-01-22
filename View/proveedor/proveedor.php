<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Agregamos los enlaces a los estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="?c=producto">Productos</a>
</nav>

<div class="container mt-5">
    <h1 class="page-header">Tipos de Productos</h1>
    <div class="text-right mb-3">
        <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Agregar Tipo de producto</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:180px;">ID</th>
                <th style="width:120px;">Tipo de Producto</th>
                <th style="width:120px;">Proveedor</th>
                <th style="width:120px;">Teléfono</th>
                <th style="width:120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->nit; ?></td>
                <td><?php echo $r->razonS; ?></td>
                <td><?php echo $r->dir; ?></td>
                <td><?php echo $r->tel; ?></td>
                <td>
                    <a class="btn btn-warning" href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">Editar</a>
                    <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Agregamos los enlaces a los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
