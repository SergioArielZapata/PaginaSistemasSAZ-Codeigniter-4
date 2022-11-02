<hr class="featurette-divider">
<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Categoria</title>
</head>
<h1 class="text-center btn-success">Alta de Categorías de Productos</h1>
<div class="container col-6 justify-content-md-center">
    <div class="card ">
        <div class="card-header text-center">
            <h2>Categoría</h2>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0 text-aling-center text-justify ">
                <form class="w-100 mx-auto" method="POST" action="<?php echo base_url('alta_Categoria');?>" enctype="multipart/form-data">
                     <div class="form-group">
                            <label for="categoria" class="text-black font-weight-bold">Categoría:</label>
                            <input id="categoria" class="form-control" type="text" name="cate" placeholder="Ingrese el nombre de la categoría" autofocus="autofocus"  value="<?php echo set_value('nombree') ;?>">
                            <p class="text-danger"><?= session('errors.cate')?></p>
                        </div>
                    <br><br>
                    <div class="form-group text-center">
                        <button type='submit' class='btn btn-success'><img src="assets/iconos/verificado.png" while=25 height=25> Agregar</button>
                        <a href="<?php echo base_url('indexAdmin')?>" class='btn btn-danger'><img src="assets/iconos/cancelar.png" while=25 height=25> Cancelar</a>
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
</div>    