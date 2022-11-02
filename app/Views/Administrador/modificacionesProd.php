<?php  
use App\Models\Productos_model;
$prodModel = new Productos_model();
$ad = $prodModel->where('id_producto', $id_producto)->first();
$id_p = $ad['categoria_id'];
?>
<hr class="featurette-divider">
<h1 class="text-center btn-success">Modificación de Productos</h1>
<section class="modificacion">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Modificar datos del producto</h5>                
                <p class="card-text">
                    <div class="row">
                        <div class="col-4">
                            <img  class="img w-100" src="data:image/jpg;base64,<?php echo base64_encode($ad['Imagendb']); ?>" />
                        </div>
                        <div class="col-8">
                            <form class="w-75 mx-auto" method="POST" action="<?php echo base_url('modificar').$ad['id_producto'];?>" enctype="multipart/form-data">
                                <!--ID_Producto-->
                                <input type="hidden" name="id" value="<?php echo $ad['id_producto']?>">
                                <input type="hidden" name="estado" value="<?php echo $ad['estado']?>">
                                <!--Nombre-->
                                <div class="form-group">
                                    <label for="nombre" class="text-black font-weight-bold">Nombre del Producto</label>
                                    <input id="nombre" class="form-control" type="text" value="<?php echo $ad['nombre']?>" name="nombre"  autofocus="autofocus">
                                </div>
                                <p class="text-danger"><?= session('errors.nombre')?></p>
                                
                                <!--Descripcion-->
                                <div class="form-group">
                                    <label for="descripcion" class="text-black font-weight-bold">Descripcion del Producto</label>
                                    <input id="descripcion" class="form-control" type="text" name="descripcion" value="<?php echo $ad['descripcion']?>" autofocus="autofocus">
                                </div>
                                <p class="text-danger"><?= session('errors.descripcion')?></p>
                                
                                <!--Categoria-->
                                <div class="form-group">
                                    <label for="categoria" class="text-black font-weight-bold">Seleccione la categoria del producto</label>
                                    <select class="form-control" name="categoria" id="categoria" value="<?php echo set_value('categoria');?>" aria-label="Default select">
                                        <option value=<?php echo $id_p ?>> <?php echo $id_p; echo " - Ya seleccionada" ?></option>    
                                        <?php $dat = new Productos_model(); ?>
                                        <?php $categorias = $dat->seleccionar_categoria_sin_0();
                                        foreach($categorias as $categoria){;?>
                                        <option value =<?php echo $categoria->id;?>> <?php echo $categoria->id; echo " - ";echo $categoria->nombreCate;?></option>
                                        <?php };?>
                                    </select>
                                    <p class="text-danger"><?= session('errors.categoria')?></p>
                                </div>
                                
                                <!--Precio-->
                                <div class="form-group">
                                    <label for="precio" class="text-black font-weight-bold">Precio del Producto</label>
                                    <input id="precio" class="form-control" type="text" name="precio" value="<?php echo $ad['precio']?>" autofocus="autofocus">
                                </div>
                                <p class="text-danger"><?= session('errors.precio')?></p>

                                <!--Cantidad-->
                                <div class="form-group">
                                    <label for="cantidad" class="text-black font-weight-bold">Cantidad de productos a ingresar</label>
                                    <input id="cantidad" class="form-control" type="text" name="cantidad" value="<?php echo $ad['stock']?>" autofocus="autofocus">
                                </div>
                                <p class="text-danger"><?= session('errors.cantidad')?></p>
                                <!-- Imagen
                                <div class="form-group">
                                    <label for="imagen" class="text-black font-weight-bold">Subir una imagen (No mayor a 2 Mb)</label>
                                    <input id="imagen" class="form-control-file" type="file" name="imagen">
                                </div>
                                <p class="text-danger"><?= session('errors.imagen')?></p> -->
                                <!-- Boton -->
                                <div class="form-group py-2">
                                    <button type='submit' class='btn btn-success'>Modificar</button>
                                    <a href="<?php echo base_url('modiProductos')?>" class='btn btn-danger'>Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div> 
                </p>
            </div>
        </div>        
    </div>    
</section>