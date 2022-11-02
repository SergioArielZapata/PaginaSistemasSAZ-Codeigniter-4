<hr class="featurette-divider">
<h1 class="text-center btn-success">Modificar Cuenta</h1>
<section class="modificacion">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Datos del Usuario</h5>                
                <p class="card-text">
                    <form class="w-75 mx-auto" method="POST" action="<?php echo base_url('actualizar2')?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                            <?php foreach($adicional as $usuario){?>
                                <!--ID_Usuario-->
                                <input type="hidden" name="id" value="<?php echo $usuario->usuario_id;?>">
                                <p>-----Datos Registrados-------</p>
                                <!--Nombre-->                                
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Nombre: 
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $usuario->nombre;?>"> 
                                    </h6>                                   
                                </div>                                
                                <!--Apellido-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Apellido: 
                                        <input type="text" class="form-control" name="apellido" value="<?php echo $usuario->apellido;?>"> 
                                    </h6>                                   
                                </div>
                                <!--Correo-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Correo  _: 
                                        <input type="text" class="form-control" name="correo" value="<?php echo $usuario->correo;?>"> 
                                    </h6>                                   
                                </div>
                                <!--Usuario-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Usuario : 
                                        <input type="text" class="form-control" name="usuario" value="<?php echo $usuario->usuario;?>"> 
                                    </h6>                                   
                                </div>
                                <!--Password-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Password : 
                                        <input type="text" class="form-control" name="pass" value="<?php echo base64_decode($usuario->pass);?>"> 
                                    </h6>                                   
                                </div>                                   
                            </div>
                            <div class="col-6">
                                <p>-----Datos Adicionales-----</p>
                                <!--Direccion-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Dirección: 
                                        <input type="text" class="form-control" name="direccion" value="<?php echo $usuario->direccion;?>"> 
                                    </h6>                                   
                                </div>
                                <span class="text-danger"><?php echo form_error('direccion');?></span> 
                                <!--Telefono-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Teléfono: 
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $usuario->telefono;?>"> 
                                    </h6>                                   
                                </div> 
                                <span class="text-danger"><?php echo form_error('telefono');?></span>
                                <!--ciudad-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Ciudad: 
                                        <input type="text" class="form-control" name="ciudad" value="<?php echo $usuario->ciudad;?>"> 
                                    </h6>                                   
                                </div> 
                                <span class="text-danger"><?php echo form_error('ciudad');?></span>
                                <!--Codigo Postal-->
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Código Postal: 
                                        <input type="text" class="form-control" name="codPostal" value="<?php echo $usuario->codigo_postal;?>"> 
                                    </h6>                                   
                                </div>
                                <span class="text-danger"><?php echo form_error('codPostal');?></span>
                                <div class="form-group py-2">
                                    <button type='submit' class='btn btn-success'>
                                        <i class="fas fa-user-edit">
                                            <img src="assets/iconos/actualizar.svg" while=25 height=25>
                                        </i>Actualizar
                                    </button>
                                        <a href="<?php echo base_url('usuarios')?>" class='btn btn-primary'>
                                        <i class="fas fa-undo">
                                        <img src="assets/iconos/volver.svg" while=25 height=25>
                                        </i>Volver</a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </form>
                </p>
            </div>
        </div>        
    </div>    
</section>