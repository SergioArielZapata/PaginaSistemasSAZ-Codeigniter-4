<?php //session()->destroy();?>
<header class="header">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('/'); ?>"> Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('quienesSomos'); ?>"> Quienes somos </a></li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('contacto'); ?>"> Contactos </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>"> Comercialización </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('terminos'); ?>"> Condiciones </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('catalogoVisi'); ?>"> Catálogo </a> </li>
      </ul>
          
      <ul class="navbar-nav">
        <div>
          <a href="<?php echo base_url('agregausuario_view')?>"class="btn btn-primary">
          <img src="assets/iconos/crear.png" alt="" while=20 height=27> Ingresar </a>   
        </div>             
      </ul>
          <div class="busqueda">
            <form action="catalogoVisi" method="GET" class="form-search">
              <div class="input-group">
                <input class="form-control form-text" id="buscar" name="buscar" maxlength="128" placeholder="Buscar" size="15" type="text" />
                <span class="input-group-btn"><button type="submit" class="btn btn-primary"><img src="assets/iconos/buscar.png " while=22 height=22></button></span>
              </div>
            </form>
          </div>
    </div> <!-- navbar-collapse.// -->
  </nav>
</header>