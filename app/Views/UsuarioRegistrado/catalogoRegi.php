<?php  
use App\Models\Productos_model;
$opt = 0;
$bus = "";
if(isset($_GET['buscar'])){
 $bus = $_GET['buscar'];
}
if(isset($_GET['estado']) ){
 $opt = $_GET['estado'];
}
?>
<hr class="featurette-divider">
<h1 class="text-center btn-success">Productos a la venta</h1>
<div class="row conteiner-fluid justify-content-around">
        <div class="col-sm-3">
   
        </div>
        <div class="col-sm-6">
            <<center>
                <form action="catalogoRegi" method="GET">
                    <select name= "estado" class="form-select btn btn-success text-justify" aria-label="Default select example" onchange="this.form.submit()">
                        <option value="0" selected>Seleccione una categoría</option>
                        <?php $dat = new Productos_model(); ?>
                        <?php $categorias = $dat->seleccionar_categoria();
                        foreach($categorias as $categoria){;?>
                        <option value =<?php echo $categoria->id;?>><?php echo $categoria->nombreCate;?></option>
                        <?php };?>
                    </select>
                </form>
            </center><br>
        </div>
        <div class="col-sm-3 text-right">
            
        </div>
    </div>
            <div class="card-group">
                <?php foreach($productos as $producto){ ?>
                    <?php if($producto->categoria_id == $opt){ ?>
                    <div class="col-sm-3 container-fluid">
                        <div class="card">
                        <img src="data:imagen/jpg;base64,<?php echo base64_encode($producto->Imagendb); ?>" name="imagen" class="card-img-top" width = "100px" height = "375px">
                            <div class="card-body">
                                <!--ID_Producto-->
                                <input readonly type="hidden" name="id_producto" value="<?php echo $producto->id_producto;?>">
                                <h5 name="nombre" class="card-title"><?php echo $producto->nombre; ?></h5>
                                <h5 name="Stock" class="card-text">Stock: <?php echo $producto->stock; ?></h5>                           
                                <h5 name="precio" class="card-text">$ <?php echo $producto->precio; ?></h5>
                                <div>
                                    <form method="post" action="<?php echo base_url('agregarCarrito')?>">
                                        <button type="form-submit" id='producto' name='producto' class="btn btn-warning">Agregar a Carrito</button>
                                        <?php
                                        echo form_hidden('imagen',$producto->Imagendb);
                                        echo form_hidden('id_producto',$producto->id_producto);
                                        echo form_hidden('nombre',$producto->nombre);
                                        echo form_hidden('precio',$producto->precio);
                                        echo form_hidden('stock',$producto->stock)
                                        ?>
                                    </form>                                
                                </div>                
                            </div>
                        </div>
                        <br>
                    </div>                
                <?php }?>
                    <?php if($opt == 0){ ?>
                        <?php $cadena = strtolower($producto->descripcion);?>
                        <?php if($bus == "" || preg_match("/$bus/i", $cadena) == true){ ?>
                    <div class="col-sm-3 container-fluid">
                        <div class="card">
                        <img src="data:imagen/jpg;base64,<?php echo base64_encode($producto->Imagendb); ?>" name="imagen" class="card-img-top" width = "100px" height = "375px">
                            <div class="card-body">
                                <!--ID_Producto-->
                                <input readonly type="hidden" name="id_producto" value="<?php echo $producto->id_producto;?>">
                                <h5 name="nombre" class="card-title"><?php echo $producto->nombre; ?></h5>
                                <h5 name="Stock" class="card-text">Stock: <?php echo $producto->stock; ?></h5>                           
                                <h5 name="precio" class="card-text">$ <?php echo $producto->precio; ?></h5>
                                <div>
                                    <form method="post" action="<?php echo base_url('agregarCarrito')?>">
                                        <button type="form-submit" id='producto' name='producto' class="btn btn-warning">Agregar a Carrito</button>
                                        <?php
                                            echo form_hidden('imagen',$producto->Imagendb);
                                            echo form_hidden('id_producto',$producto->id_producto);
                                            echo form_hidden('nombre',$producto->nombre);
                                            echo form_hidden('precio',$producto->precio);
                                            echo form_hidden('stock',$producto->stock)
                                        ?>
                                    </form>                               
                                </div>                
                            </div>
                        </div>
                        <br>
                    </div>
                    <?php }?>                
                <?php }?>
            <?php }?>
        </div>  
    </div>