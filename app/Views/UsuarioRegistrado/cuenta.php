<?php  
use App\Models\Usuarios_model;
$usuario = (session('id_usuario'));
$userModel = new Usuarios_model();
$ad = $userModel->where('id_usuario', $usuario)->first();
?>
<hr class="featurette-divider">
<h1 class="text-center btn-success">Modificar Cuenta</h1>
<section class="modificacion">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Datos del Usuario</h5>                
                <p class="card-text">
                    <form class="w-75 mx-auto" method="POST" action="<?php echo base_url('actualizarUs')?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <!--ID_Usuario-->                                
                                <input type="hidden" name="id" value="<?php echo $ad['id_usuario'];?>">
                                <input type="hidden" name="estado" value="<?php echo $ad['estado'];?>">
                                <input type="hidden" name="idPerfil" value="<?php echo $ad['idPerfil'];?>">
                                <p>-----Datos Registrados-------</p>
                                <!--Nombre-->                                
                                <div class="form-group">
                                    <h6 for="nombre" class="text-black font-weight-bold">Nombre : 
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $ad['nombre'];?>"> 
                                        <p class="text-danger"><?= session('errors.nombre')?></p>
                                    </h6>                                   
                                </div>                                
                                <!--Apellido-->
                                <div class="form-group">
                                    <h6 for="apellido" class="text-black font-weight-bold">Apellido : 
                                        <input type="text" class="form-control" name="apellido" value="<?php echo $ad['apellido'];?>"> 
                                        <p class="text-danger"><?= session('errors.apellido')?></p>
                                    </h6>                                   
                                </div>
                                <!--Correo-->
                                <div class="form-group">
                                    <h6 for="correo" class="text-black font-weight-bold">Correo : 
                                        <input readonly type="email" class="form-control" name="correo" value="<?php echo $ad['correo'];?>"> 
                                        <p class="text-danger"><?= session('errors.correo')?></p>
                                    </h6>                                   
                                </div>
                                <!--Correo-->
                                <div class="form-group">
                                    <h6 for="usuario" class="text-black font-weight-bold">Usuario : 
                                        <input rreadonly type="text" class="form-control" name="usuario" value="<?php echo $ad['usuario'];?>"> 
                                        <p class="text-danger"><?= session('errors.usuario')?></p>
                                    </h6>                                   
                                </div>
                                <!--Password-->
                                <div class="form-group">
                                    <h6 for="pass" class="text-black font-weight-bold">Password : 
                                        <input type="text" class="form-control" name="pass" value="<?php echo base64_decode($ad['pass']);?>"> 
                                        <p class="text-danger"><?= session('errors.pass')?></p>
                                    </h6>                                   
                                </div>                              
                            </div>
                            <div class="col-6">
                                <p>-----Datos Adicionales-----</p>
                                <!--Direccion-->
                                <div class="form-group">
                                    <h6 for="direccion" class="text-black font-weight-bold">Dirección : 
                                        <input type="text" class="form-control" name="direccion" value="<?php echo $ad['direccion'];?>"> 
                                        <p class="text-danger"><?= session('errors.direccion')?></p>
                                    </h6>                                   
                                </div>
                                <span class="text-danger"></span> 
                                <!--Telefono-->
                                <div class="form-group">
                                    <h6 for="telefono" class="text-black font-weight-bold">Teléfono : 
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $ad['telefono'];?>"> 
                                        <p class="text-danger"><?= session('errors.telefono')?></p>
                                    </h6>                                   
                                </div> 
                                <span class="text-danger"></span>
                                <!--ciudad-->
                                <div class="form-group">
                                    <h6 for="ciudad" class="text-black font-weight-bold">Ciudad : 
                                        <input type="text" class="form-control" name="ciudad" value="<?php echo $ad['ciudad'];?>"> 
                                        <p class="text-danger"><?= session('errors.ciudad')?></p>
                                    </h6>                                   
                                </div> 
                                <span class="text-danger"></span>
                                <!--Codigo Postal-->
                                <div class="form-group">
                                    <h6 for="codPostal" class="text-black font-weight-bold">Código Postal : 
                                        <input type="text" class="form-control" name="codPostal" value="<?php echo $ad['codigo_postal'];?>"> 
                                        <p class="text-danger"><?= session('errors.codPostal')?></p>
                                    </h6>                                   
                                </div>
                                <span class="text-danger"></span>
                                <div class="form-group py-2">

                                    <button type='submit' class='btn btn-success'>
                                        <i class="fas fa-user-edit">
                                            <img src="assets/iconos/actualizar.svg" while=25 height=25>
                                        </i>
                                    Actualizar</button>
                                        <a href="<?php echo base_url('indexU')?>" class='btn btn-primary'>
                                        <i class="fas fa-undo">
                                        <img src="assets/iconos/volver.svg" while=25 height=25>
                                        </i>
                                    Volver</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>        
    </div>    
</section>