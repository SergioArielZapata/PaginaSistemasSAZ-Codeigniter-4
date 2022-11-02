<hr class="featurette-divider">
<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->
<head>
<link rel="shortcut icon" href="assets/img/ico.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado por Fechas</title>
<h1 class="text-center btn-success">Ventas Realizadas</h1>
<div class="container-fuid">
    <table class="table table-light table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>Usuario</th>
                <th>Factura N°</th>
                <th>Total de compra</th>                
                <th>Fecha</th>                
                <th>Acciones</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach ($ventas as $venta){;?>                       
                    <tr>
                        <td><?php echo $venta->apellido?>, <?php echo $venta->nombre?></td>
                        <td><?php printf('%08d', $venta->id_ventas); ?></td>
                        <?php /*echo $this->carrito_model->cantidad_compra($venta->id_ventas)*/?>
                        <td>$ <?php echo $venta->total_venta;?></td>
                        <?php
                            $timestamp = strtotime($venta->fecha);
                            $fecha = date("d/m/Y", $timestamp );
                        ?>
                        <td><?php echo $fecha;?></td>
                        <td>
                        <a href="<?php echo base_url('facturaAd').$venta->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                            <i class="far fa-file-alt">
                                <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                            </i>
                            Ver Factura
                        </a>
                         <a href="<?php echo base_url('factu').$venta->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                             <i class="far fa-file-alt">
                                <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                                    </i>
                             Descargar/imprimir Factura
                        </a>
                        </td>                                                    
                    </tr>
                <?php };?>
       
            </tbody>
    </table> 
</div>   