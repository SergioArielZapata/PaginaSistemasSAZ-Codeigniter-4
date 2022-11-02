<?php
ob_start();
$total = 0;
use App\Models\DetalleV_model;
use App\Models\Carrito_model;
$detVenta = new DetalleV_model;
$carVenta = new Carrito_model;
?>
<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->
<head>
<link rel="shortcut icon" href="assets/img/ico.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Total de ventas</title>

<style type="text/css">
    body{
        margin: 0px;
    }
    h2{
        color: #000000;
        font-family: 'Righteous';
        font-size: 1.2em;
    }
    hm{
        color: #000000;
        font-family: 'Righteous';
        font-size: 1.5em;
    }
    hmm{
        color: #000000;
        font-family: 'Righteous';
        font-size: 1.9em;
    }
    hf{
        color: rgb(11, 11, 11);
        text-shadow: 1px 1px 0px #000000;
        font-family: 'Roboto Mono';
        font-size: 4.0em;
    }
    hzz{
        color: rgb(11, 11, 11);
        text-shadow: 1px 1px 0px #000000;
        font-family: 'Roboto Mono';
        font-size: 0.95em;
    }
    .linea {
        border-top: 8px solid black;
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
    }
    .card{
        display: block;
        
        background-color: cornsilk;
    }
    .text-left {
    text-align: left !important;
    }
    .text-right {
    text-align: right !important;
    }
    .text-center {
    text-align: center !important;
    }
    .progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
    }
    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
    }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
    }
    strong {
    font-weight: bolder;
    }
    table {
    border-collapse: collapse;
    }
    table,
    th,
    td {
    border: 0px solid black;
    }
    th,
    td {
    padding: 5px;
    }
    
</style>
    
</head>

<body>

    <table width="720px" cellspacing="2px" class="table">
    <tr>
        <th class="text-left">
            <img class="img img-responsive" src="assets/img/logo.png" alt="" while=70 height=100>
        </th>            
        <th class="text-right" >
            <hzz>Sistemas SAZ InforPOWER<</hzz><br>
            <hzz>Tte. Juan José Arraras 6623</hzz><br>
            <hzz>Corrientes Capital - CP 3400</hzz><br>
        </th>
    </table>
        <div class="text-center"><h2><u>Total de ventas Realizadas al día: 
            <?=date('d-m-Y');?></u></h2>
        </div>
<div class="container-fuid">
    <table width="720px" cellpadding="5px" class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Factura N°</th>
                <th class= "text-right">Total de compra</th>                
                <th>Fecha</th>                
            </tr>
        </thead>        
            <tbody>
                <!--Busquda de ventas realizadas -->
                <?php foreach ($ventas as $venta){ $total += $venta->total_venta ;?>                       
                    <tr>
                        <td class="text-left" style="width: 25%; background-color: #BDBDBD"><b><?php echo $venta->apellido?>, <?php echo $venta->nombre?></b></td>
                        <td class="text-left" style="width: 25%; background-color: #BDBDBD"><b><?php echo $venta->correo?></b></td>
                        <td class="text-center" style="width: 12%; background-color: #BDBDBD"><b><?php printf('%08d', $venta->id_ventas);?></b></td>
                        <td class="text-right" style="width: 18%; background-color: #BDBDBD"><b> $ <?php echo $venta->total_venta;?></b></td>
                            <?php
                                $timestamp = strtotime($venta->fecha);
                                $fecha = date("d/m/Y", $timestamp );
                            ?>
                        <td class="text-center" style="width: 18%; background-color: #BDBDBD"><b><?php echo $fecha ;?></b></td>         
                        <!--Detalles de la venta realizada -->
                            <?php
                                $compra = $detVenta->ver_detalle($venta->id_ventas);
                                foreach ($compra as $productos) {
                            ?>
                        <tr>
                            <td class="text-left" style="width: 25%;"></td>
                            <td class="text-left" style="width: 25%;"><?php echo $productos->descripcion ?></td>
                            <td class="text-center" style="width: 15%;" >Cantidad: <?php echo number_format($productos->cantidad, 0) ?></td>
                            <td class="text-right" style="width: 15%;">$<?php echo number_format($productos->precio_venta, 2) ?></td>
                        </tr>    
                    </tr>
                        
                        <?php };?>
                <?php };?>                    
            </tbody>
    </table>
            <p><b> Cantad de ventas realizadas: <?php echo $carVenta->cantidad_compra2($venta->id_ventas)?></b></p>
            <p><b> Total de ventas realizadas: $ <?php echo number_format($total, 2)?></b></p>  
</body>
</html>
    
    <?php
$html=ob_get_clean();
//if ( get_magic_quotes_gpc() );
//echo $html;
require_once 'Libreria/dompdf/autoload.inc.php';
//require_once 'Libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$dompdf = new Dompdf(array('enable_remote' => true));
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->load_Html($html);
$dompdf->setPaper('letter');
//$dompdf->setPaper('A4', 'landscape')
$dompdf->render();
$dompdf->stream("Listado de Ventas.pdf", array("Attachment" => false));
exit();
?>