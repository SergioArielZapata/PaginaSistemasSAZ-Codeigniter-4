<?php
include_once "Libreria/barcode/src/BarcodeGenerator.php";
include_once "Libreria/barcode/src/BarcodeGeneratorHTML.php";
include_once "Libreria/barcode/src/BarcodeGeneratorPNG.php";

use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;
$barHTML = new BarcodeGeneratorHTML();
//echo $barHTML->getBarcode("123",$barHTML::TYPE_CODE_128);
$barPNG=new BarcodeGeneratorPNG();

ob_start();
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
$mensajePie = "Gracias por su compra, los esperamos pronto.";
$primeros = 1;
$numeroF = $usuario->venta_id;
$descuento = 0;
$porcentajeImpuestos = 21;
$subtotal = 0;
$timestamp = strtotime($usuario->fecha); 
$fecha = date("d/m/Y", $timestamp );
?>
<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->
<head>
<link rel="shortcut icon" href="assets/img/ico.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>

<style type="text/css">
    body{
        margin: 0px;
    }
    h1{
        color: bisque;
        text-shadow: 5px 5px 5px #814545;
        font-family: 'Roboto';
    }
    h2{
        color: #000000;
        font-family: 'Righteous';
        font-size: 2.0em;
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
    border: 1px solid black;
    }
    th,
    td {
    padding: 5px;
    }
    
</style>
    
</head>

<body>
        <table  style="width: 100%; margin: 1mm;" >
            <thead>
                <tr>
                    <th>
                        <div class="text-center" >
                            <img class="img img-responsive" src="assets/img/logo.png" alt="" while=70 height=100><br>
                            <hzz>Sistemas SAZ InforPOWER</hzz><br>
                            <hzz>Tte. Juan José Arraras 6623</hzz><br>
                            <hzz>Corrientes Capital - CP 3400</hzz><br>
                            <hzz>IVA: Responsable Inscrípto</hzz>
                        </div>
                    </th>
                    <th>
                        <div class="text-center">
                            <hf >A</hf><br>
                            <p>cod. 01</p>
                        </div>
                    </th>
                    <th>
                        <div>
                            <div class="text-center"><hmm>Factura</hmm><br>
                                <hm><strong>N° 0001 -  <?php printf('%08d', $numeroF);?></strong></hm><br><br>
                            </div>
                            <div class ="text-right">
                                <hzz>Fecha: <?php echo $fecha ?></hzz><br>
                                <hzz>CUIT: 20-23943312-0</hzz><br>
                                <hzz>Ing. Brutos: 20-23943312-0</hzz><br>
                                <hzz>Inicio de Act.: 29/05/2022</hzz>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
        <table style="width: 100%; margin: 1mm;" >
            <thead>
                <tr>
                    <th>
                        <div class="text-left" style=" margin: 2mm">
                            <hzz>Señores: <strong><?php echo $nombre ?></strong></hzz>
                            <hzz><strong><?php echo $apellido ?></strong></hzz><br>
                            <hzz>Domicilio: <strong><?php echo $direccion ?></strong></hzz><br>
                            <hzz>IVA: <strong><?php echo $ivaCli ?></strong></hzz><br>
                            <hzz>Condiciones de venta: <strong><?php echo $condi ?></strong></hzz>
                        </div>
                    </th>
                    
                    <th>
                        <div class="text-left" style=" margin: 2mm">
                            <hzz>Localidad: <strong><?php echo $localidadCli ?></strong></hzz><br>
                            <hzz>Código Postal: <strong><?php echo $cp ?></strong></hzz><br>
                            <hzz>Cuit Cliente: <strong><?php echo $cuitCli ?></strong></hzz><br>
                            <hzz>Remito: <strong><?php printf('%08d', $remito) ?></strong></hzz>
                        </div>
                    </th>
                </tr>
            </thead><hr class='linea'>
        </table>
        <br>
        <table width="720px" cellpadding="5px" class="table table-striped" >
            <thead>
                <tr>
                    <th class="text-center">Descripción</th>
                    <th class="text-right">Cantidad</th>
                    <th class="text-right">Precio unitario</th>
                    <th class="text-right">Total</th>
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
                    <td class="text-right"><?php echo number_format($productos->cantidad) ?></td>
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
                    <td class= "text-right" style="width: 30%; border: solid 1px #000000;">$<?php echo number_format($subtotal, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Descuento</td>
                    <td class= "text-right" style="width: 30%; border: solid 1px #000000;">$<?php echo number_format($descuento, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Subtotal con descuento</td>
                    <td class= "text-right" style="width: 30%; border: solid 1px #000000;">$<?php echo number_format($subtotalConDescuento, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Impuestos IVA % 21(incluido)</td>
                    <td class= "text-right" style="width: 30%; border: solid 1px #000000;">$<?php echo number_format($impuestos, 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td class= "text-right" style="width: 30%; border: solid 1px #000000;">$<?php echo number_format($total, 2) ?></td>
                    </tr>
            </tfoot>
        </table>
        <br>    <table style="width: 100%; border: solid 0.5mm #000000; margin: 0mm; padding: 1mm; font-size: 4mm; line-height: normal; text-align: left">
                <tr> 
                    <td class="text-center"><img class="img img-responsive" src="assets/img/qr.png" alt="" height=80></td>
                    <td class="text-center"><p> <?php echo '<img src="data:image/png;base64,'.base64_encode($barPNG->getBarcode("00010000000$numeroF",$barPNG::TYPE_CODE_128)).'">' ?></p>
                    <p class="text-center"><?php printf('0001%08d', $numeroF);?></p>
                  </td>
                </tr>
                </table>

                <div style="width: 100%; border: solid 0.5mm #000000; margin: 1mm; padding: 1mm; font-size: 4mm; line-height: normal; text-align: left">
                    <p> Observaciones: ............................................................................................................................................................</p>
                </div>
                <br>
                <div style="width: 100%; border: solid 0.5mm #000000; margin: 1mm; padding: 0mm; font-size: 4mm; line-height: normal; text-align: center">
                    <p><?php echo $mensajePie ?></p>
                </div>      
                         
</body>
</html>

<?php
$html=ob_get_clean();
require_once 'Libreria/dompdf/autoload.inc.php';
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
$dompdf->stream("factura.pdf", array("Attachment" => false));
exit();
?>