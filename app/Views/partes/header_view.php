<!DOCTYPE html>
<html lang="es">
<!--Cabecera general-->

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-social.cs">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/ico.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($titulo); ?></title>
    <style>
        #fechahoy {
            font-size: 1em;
            color: #000000;
            margin: 0px;
            font-style: italic;
        }
    </style>
</head>
<section><br>
    <hr class="featurette-divider">
    <header class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-2 text-center">
                <div>
                    <strong>
                        <div id="fechahoy"></div>
                    </strong>
                    <script>
                        var d = new Date();
                        var month = new Array(12);
                        month[0] = 'Enero';
                        month[1] = 'Febrero';
                        month[2] = 'Marzo';
                        month[3] = 'Abril';
                        month[4] = 'Mayo';
                        month[5] = 'Junio';
                        month[6] = 'Julio';
                        month[7] = 'Agosto';
                        month[8] = 'Septiembre';
                        month[9] = 'Octubre';
                        month[10] = 'Noviembre';
                        month[11] = 'Diciembre';
                        var todaysDate = +d.getDate() + ' de ' + month[d.getUTCMonth()] + ' del ' + d.getUTCFullYear();
                        document.getElementById('fechahoy').innerHTML = '' + todaysDate;
                    </script>
                </div>
                <div>
                    <span id="contenedor">
                        <script>
                            function mostrarclock() {
                                if (!document.all && !document.getElementById)
                                    return
                                thelement = document.getElementById ? document.getElementById("contenedor") : document.all.contendor
                                var Digital = new Date()
                                var hours = Digital.getHours()
                                var minutes = Digital.getMinutes()
                                var seconds = Digital.getSeconds()
                                var dn = "PM"
                                if (hours < 12)
                                    dn = "AM"
                                if (hours > 12)
                                    hours = hours - 12
                                if (hours == 0)
                                    hours = 12
                                if (minutes <= 9)
                                    minutes = "0" + minutes
                                if (seconds <= 9)
                                    seconds = "0" + seconds
                                var ctime = hours + ":" + minutes + ":" + seconds + " " + dn
                                thelement.innerHTML = "<b style='font-size:15;color:#000000;'>" + ctime + "</b>"
                                setTimeout("mostrarclock()", 1000)
                            }
                            window.onload = mostrarclock
                        </script>
                    </span>
                </div>
                <div>
                    <span>
                        <marquee direction="left" style="border:black 0px SOLID" /*behavior="alternate"><img src="assets/img/logo.jpg" class="border border-primary rounded" width="100" height="80" alt="SAZ"></marquee>
                    </span>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <section class="conteiner-fluid">
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2> <b>
                                        <FONT COLOR="black">Sistemas SAZ InforPOWER </FONT>
                                    </b></h2>
                            </div>
                            <div class="carousel-item">
                                <h2> <b>
                                        <FONT COLOR="black">Sistemas SAZ InforPOWER </FONT>
                                    </b></h2>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="conteiner-nav">
                    <h5> <b>
                            <FONT COLOR="white">Software - Equipos - Reparación y mantenimiento de PCs </FONT>
                        </b></h5>
                    <h5> <b>
                            <FONT COLOR="white">Capacidad y Eficiencia Garantizada </FONT>
                        </b></h5>
                </section>
            </div>
            <div class="col-md-2 text-right"><br>
                <a href="https://www.facebook.com/ArielSAZ/" class="btn btn-outline-facebook">
                    <img src="assets/iconos/facebook.svg" alt="" while=15 height=27></a>
                <br><br>
                <a href="https://www.instagram.com/meganexxus/" class="btn btn-outline-instagram">
                    <img src="assets/iconos/instagram.svg" alt="" while=15 height=21></a>
            </div>
        </div>
    </header>
</section>