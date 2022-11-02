<?php $usuario = (session('usuario')); ?>
<section class="conteiner-nav">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('indexAdmin'); ?>"> Inicio </a> </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" data-toggle="dropdown"> Productos </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="<?php echo base_url('listaProductos'); ?>"> Lista General de Productos </a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('altaProductos'); ?>"> Alta de Productos </a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('bajaProductos'); ?>"> Baja de Productos </a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('modiProductos'); ?>"> Modificación de Productos </a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('productosBaja'); ?>"> Productos Eliminados </a></li>
          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" data-toggle="dropdown"> Categorías </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="<?php echo base_url('altaCategoria'); ?>"> Alta de Categorías</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('bajaCategoria'); ?>"> Baja de Categorías</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('modiCategoria'); ?>"> Moificación de Categorías </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown"> Ventas </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('controlVentas'); ?>"> Ventas Realizadas y Facturas </a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('ventasFechas'); ?>"> Imprimir Listado de Ventas </a></li>
          </ul>
        </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('consultas'); ?>"> Consultas y Contactos </a></li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('usuarios'); ?>"> Control de Usuarios </a> </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown active">
          <a href="" data-toggle="dropdown"><b><i> Bienvenido: </i></b> <?php echo $usuario ?></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url('cerrarSesion'); ?>">Cerrar Sesión</a>
          </div>
        </li>
      </ul>
      <div class="busqueda">
        <form action="listaProductos" method="GET" class="form-search">
          <div class="input-group">
            <input class="form-control form-text" id="buscar" name="buscar" maxlength="128" placeholder="Buscar" size="15" type="text" />
            <span class="input-group-btn"><button type="submit" class="btn btn-primary"><img src=" assets/iconos/buscar.png " while=22 height=22></button></span>
          </div>
        </form>
      </div>
    </div> <!-- navbar-collapse.// -->
  </nav>
</section>