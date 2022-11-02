<?php  
use App\Models\Productos_model;
$prodModel = new Productos_model();
$ad = $prodModel->where('id_producto', $id_producto)->first();
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
                            <form class="w-75 mx-auto" method="POST" action="<?php echo base_url('modificarIma').$ad['id_producto'];?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $ad['id_producto']?>"> 
                                <!-- Imagen -->
                                <div class="form-group">
                                    <label for="imagen" class="text-black font-weight-bold">Subir una imagen (No mayor a 2 Mb)</label>
                                    <input id="imagen" class="form-control-file" type="file" name="imagen">
                                </div>
                                <p class="text-danger"><?= session('errors.imagen')?></p>
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