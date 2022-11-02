<hr class="featurette-divider">
<h1 class="text-center btn-success">Productos Eliminados</h1>
<div class="container-fuid">
    <table class="table table-light table-hover table-sm table-responsive-lg text-center">
        <thead class="thead-light">
            <tr>
                <th>ImagenDB</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>stock</th>
                <th>Acción</th>
            </tr>
        </thead>
        <?php foreach($productos as $row){?>
        <tbody>
            <tr>
                <td><img height="90px" src="data:imagen/jpg;base64,<?php echo base64_encode($row->Imagendb); ?>" /></td>
                <td><?php echo $row->nombreCate; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->descripcion; ?></td>                
                <td>$ <?php echo $row->precio; ?></td>
                <td><?php echo $row->stock; ?></td>
                <td>
                <a href="<?php echo base_url('activar/').$row->id_producto;?>" class="btn btn-warning" type="button">Activar</a>                            
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>    
</div>