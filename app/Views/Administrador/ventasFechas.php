<hr class="featurette-divider">
<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado por Fechas</title>
</head>
<h1 class="text-center btn-success">Ventas Realizadas por Fechas</h1>
<div class="container col-8 justify-content-md-center">
    <div class="card ">
        <div class="card-header text-center">
            <h2>Consulta</h2>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0 text-aling-center text-justify ">
                <form class="w-100 mx-auto" method="POST" action="<?php echo base_url('listadoFecha'); ?>" enctype="multipart/form-data">
                    <!--fecha-->
                    <div class="text-center"><br>
                        <label for="fecha1"> Desde: </label>
                        <input type="date" name="fecha1" value="<?php echo date('Y-m-d') ?>">
                        <label for="fecha1"> Hasta: </label>
                        <input type="date" name="fecha2" value="<?php echo date('Y-m-d') ?>">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type='submit' class='btn btn-success' name="listadoFecha">Consultar</button>
                        </div>
                    </div>
                    <br>
                    <hr class='linea'>
                    <br>
                    <div class="col-md-12 text-center">
                        <a href="<?php echo base_url('listadoVentas'); ?>" class='btn btn-success'><img src="assets/iconos/altaP.png" while=25 height=25><b> Imprimir Total de Ventas </b></a>
                    </div>
                </form>
            </blockquote>
        </div>
    </div>
</div>