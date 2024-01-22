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
    <a class="navbar-brand" href="?c=proveedor">Tipo de producto</a>
</nav>

<div class="container mt-5">
    <h1 class="page-header">Productos</h1>
    <div class="text-right mb-3">
        <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:180px;">Código Producto</th>
                <th style="width:120px;">Tipo producto</th>
                <th style="width:120px;">Nombre Producto</th>
                <th style="width:120px;">Cantidad</th>
                <th style="width:120px;">Descripción</th>
                <th style="width:120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->idProducto; ?></td>
                <td><?php echo $r->nit; ?></td>
                <td><?php echo $r->nomprod; ?></td>
                <td><?php echo $r->precioU; ?></td>
                <td><?php echo $r->descrip; ?></td>
                <td>
                    <a class="btn btn-warning" href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
                    <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
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
