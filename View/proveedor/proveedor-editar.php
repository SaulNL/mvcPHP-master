<h1 class="page-header">
    <?php echo $pvd->nit != null ? $pvd->razonS : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=proveedor">Tipo de producto</a></li>
  <li class="active"><?php echo $pvd->nit != null ? $pvd->razonS : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-proveedor" action="?c=proveedor&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="nit" value="<?php echo $pvd->nit; ?>" />

    <div class="form-group">
        <label>Tipo de Producto</label>
        <input type="text" name="razonS" value="<?php echo $pvd->razonS; ?>" class="form-control" placeholder="Ingrese Tipo Producto" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Proveedor</label>
        <input type="text" name="dir" value="<?php echo $pvd->dir; ?>" class="form-control" placeholder="Ingrese Proveedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="tel" value="<?php echo $pvd->tel; ?>" class="form-control" placeholder="Ingrese teléfono" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>
