<?php 
foreach ($compra as $usuario);
$nombre = $usuario->nombre;
$apellido = $usuario->apellido;
$direccion = $usuario->direccion;
$cp = $usuario->codigo_postal;
$ivaCli = "Consumidor Final";
$localidadCli = $usuario->ciudad;
$cuitCli = "00-00000000-0";
$remito = $usuario->id_detalle;
$condi = "Online";
$mensajePie = "Gracias por su compra";
$numeroF = $usuario->venta_id;
$descuento = 0;
$porcentajeImpuestos = 21;
$subtotal = 0;
$timestamp = strtotime($usuario->fecha); 
$fecha = date("d/m/Y", $timestamp );
?>
<body>
<hr class="featurette-divider">
<div class="container col-md-7 justify-content-md-center card">
<div class="card-body">
    <div class="row">
        <div class="col-md-4 text-center" style="border-style:solid none">
            <img class="img img-responsive" src="assets/img/logo.png" alt="Logotipo" while=70 height=170><br>
            <hz>Sistemas SAZ InforPOWER</hz><br>
            <hz>Tte. Juan José Arraras 6623</hz><br>
            <hz>Corrientes Capital - CP 3400</hz><br>
            <hr class='linea'>
            <hz>IVA: Responsable Inscrípto</hz>
        </div>
        <div class="col-md-4 text-center" style="border-style:solid none">
            <hf style="border-style:solid">A</hf>
            <p>cod. 01</p>
        </div>
        <div class="col-md-4" style="border-style:solid none">
            <hf>Factura</hf>
            <h3>N° 0001 -  <?php printf('%08d', $numeroF);  ?></h3>
            <h3>Fecha: <?php echo $fecha ?></h3><br>
            <hr class='linea'>
            <hz>CUIT: 20-23943312-0</hz><br>
            <hz>Ing. Brutos: 20-23943312-0</hz><br> 
            <hz>Inicio de Act.: 29/05/2022</hz><br>     
        </div> 
    </div>
</div>

    <hr class='linea'>
    <div class="conteiner-fluid card-body">
        <div class="row">
        <div class="col-md-8">
            <hz>Señores: <strong><?php echo $nombre ?></strong></hz>
            <hz><strong><?php echo $apellido ?></strong></hz><br>

            <hz>Domicilio: <strong><?php echo $direccion ?></strong></hz><br>
            <hz>IVA: <strong><?php echo $ivaCli ?></strong></hz><br>
            <hz>Condiciones de venta: <strong><?php echo $condi ?></strong></hz>
        </div>
        <div class="col-md-4">
            <hz>Localidad: <strong><?php echo $localidadCli ?></strong></hz><br>
            <hz>Código Postal: <strong><?php echo $cp ?></strong></hz><br>
            <hz>Cuit Cliente: <strong><?php echo $cuitCli ?></strong></hz><br>
            <hz>Remito: <strong><?php printf('%08d', $remito) ?></strong></hz>
        </div>
    </div>
        
    </div>
    <hr class='linea'>

    <div class="card-body">
        <div class="col-md-12">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th class= "text-center">Cantidad</th>
                    <th class= "text-right">Precio unitario</th>
                    <th class= "text-right">Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($compra as $productos) {
                    $totalProducto = $productos->cantidad * $productos->precio_venta;
                    $subtotal += $totalProducto;
                    ?>
                    <tr>
                        <td><?php echo $productos->descripcion ?></td>
                        <td class= "text-right"><?php echo number_format($productos->cantidad) ?></td>
                        <td class= "text-right">$<?php echo number_format($productos->precio_venta, 2) ?></td>
                        <td class= "text-right">$<?php echo number_format($totalProducto, 2) ?></td>
                    </tr>
                <?php }
                $subtotalConDescuento = $subtotal - $descuento;
                $impuestos = $subtotalConDescuento * ($porcentajeImpuestos / 100);
                $total = $subtotalConDescuento;
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Subtotal</td>
                    <td class= "text-right">$<?php echo number_format($subtotal, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Descuento</td>
                    <td class= "text-right">$<?php echo number_format($descuento, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Subtotal con descuento</td>
                    <td class= "text-right">$<?php echo number_format($subtotalConDescuento, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Impuestos IVA % 21(incluido)</td>
                    <td class= "text-right">$<?php echo number_format($impuestos, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">
                        <h4>Total</h4></td>
                    <td>
                        <h4 class= "text-right">$<?php echo number_format($total, 2) ?></h4>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12 text-center">
            <p class="h5"><?php echo $mensajePie ?></p>
        </div>
    <div class="col-md-12 text-center">
        <a href="<?php echo base_url('controlVentas'); ?>" class="btn btn-outline-primary" type="button">
        <i class="far fa-file-alt">
            <img src="assets/iconos/volver.svg" alt="" while=25 height=25>            
        </i>
            Volver</a>
    </div>
    </div>
</div>
</body>
</html>