<?php
$uri = service('uri');
$cart = \Config\Services::cart();
$cart->contents();
$nombre = (session('nombre'));
$apellido = (session('apellido')); ?>
<section class="conteiner-nav">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('indexU'); ?>"> Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('quienesSomosU'); ?>"> Quienes Somos </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('contactoU'); ?>"> Contacto </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('consultaU'); ?>"> Consultas </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('comercializacionU'); ?>"> Comercialización </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('terminosU'); ?>"> Condiciones </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('catalogoRegi'); ?>"> Catálogo </a></li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown active">
          <a class="nav-link" href="" data-toggle="dropdown">
            <b><i> Bienvenido: </i></b> <?php echo $nombre ?><?php echo " " ?><?php echo $apellido ?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item text-left" href="<?php echo base_url('miCuenta'); ?>">Mis Datos Personales</a>
            <a class="dropdown-item text-left" href="<?php echo base_url('misCompras'); ?>">Mis Compras Realizadas</a>
            <a class="dropdown-item text-left" href="<?php echo base_url('cerrarSesion'); ?>">Cerrar Sesión</a>
          </div>
        </li>
      </ul>
      <a href="<?php echo base_url('carrito') ?>" class='btn btn-success'> <img src="assets/iconos/carrito.svg" alt="" while=25 height=25>
        <span class="badge badge-light"><?php echo $cart->totalItems() ?></span> </a>
      <div class="busqueda">
        <form action="catalogoRegi" method="GET" class="form-search">
          <div class="input-group">
            <input class="form-control form-text" id="buscar" name="buscar" maxlength="128" placeholder="Buscar" size="15" type="text" />
            <span class="input-group-btn"><button type="submit" class="btn btn-primary"><img src=" assets/iconos/buscar.png " while=22 height=22></button></span>
          </div>
        </form>
      </div>
    </div> <!-- navbar-collapse.// -->

  </nav>
</section>