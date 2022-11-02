<hr class="featurette-divider">
<h1 class="text-center btn-success">Detalle del Producto Seleccionado</h1>
<section class="modificacion">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Producto N°: <?php echo $productos->id_producto?> - Categoría: <?php echo $productos->nombreCate?></h5>                
                <p class="card-text">
                    <div class="row">
                        <div class="col-4">
                            <img class="img w-100" src="data:imagen/jpg;base64,<?php echo base64_encode($productos->Imagendb); ?>">
                        </div>
                        <div class="col-8">
                                <!--ID_Producto-->
                                <input type="hidden" name="id" value="<?php echo $productos->id_producto?>">
                                <!--Nombre-->
                                <div class="form-group">
                                    <h5 for="nombre" class="text-black font-weight-bold"><?php echo $productos->nombre?></h5>                                    
                                </div>                                
                                <!--Descripcion-->
                                <div class="form-group">
                                    <p for="descripcion" class="text-black font-weight-bold"><?php echo $productos->descripcion?></p>                                    
                                </div>               
                                <!--Precio-->
                                <div class="form-group">
                                    <h4 for="precio" class="text-black font-weight-bold">$ <?php echo $productos->precio?></4>
                                </div>
                                <!--Cantidad-->
                                <div class="form-group">
                                    <label for="cantidad" class="text-black font-weight-bold">Stock Actual: <?php echo $productos->stock?> unidades</label>
                                </div>                            
                                <!--Boton-->
                                <div class="form-group py-2">
                                    <a href="javascript: history.go (-1)" class='btn btn-primary'>Volver</a>
                                </div>
                        </div>
                    </div>                    
                </p>
            </div>
        </div>        
    </div>    
</section>