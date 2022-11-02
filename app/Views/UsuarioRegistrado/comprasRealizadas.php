<hr class="featurette-divider">
<h1 class="text-center btn-success">Historial de Compras</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Detalles de compras</h5>
                <table class="table table-borded table-striped table-hover table-responsive text-center">
                    <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Factura N°</th>
                        <th>Total de compra</th>                
                        <th>Fecha</th>                
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody> 
                        <?php foreach ($compra as $compras){;?>                       
                            <tr>
                                <td><?php echo $compras->apellido?>, <?php echo $compras->nombre?></td>
                                <td><?php printf('%08d', $compras->id_ventas); ?></td>
                                <?php /*echo $this->carrito_model->cantidad_compra($venta->id_ventas)*/?>
                                <td>$ <?php echo $compras->total_venta;?></td>
                                <?php
                                    $timestamp = strtotime($compras->fecha);
                                    $fecha = date("d/m/Y", $timestamp );
                                ?>
                                <td><?php echo $fecha;?></td>
                                <td>
                                <a href="<?php echo base_url('factura').$compras->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                                    <i class="far fa-file-alt">
                                        <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                                    </i>
                                Ver Factura</a>
                                <a href="<?php echo base_url('factu').$compras->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                                    <i class="far fa-file-alt">
                                        <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                                    </i>
                                Descargar/imprimir Factura</a>
                            </td>                                                    
                            </tr> 
                        <?php };?>
                     </tbody>
                </table>
            
            <div class="form text-center">
                
                <a href="<?php echo base_url('catalogoRegi'); ?>" class="btn btn-outline-info" type="button">
                    <i class="fas fa-cart-plus">
                        <img src="assets/iconos/carrito.svg" alt="" while=25 height=25>            
                    </i>
                    Seguir Comprando</a>
            </div>
            
        </div>
    </div>
</div>