<hr class="featurette-divider">
<h1 class="text-center btn-success">Usuarios Registrados</h1>
<div class="container-fuid">
<div class="row">
        <div class="col-sm-4">  
        </div> 
        <div class="col-sm-8"><br>
            <div class="text-right">
                <a href="<?php echo base_url('usuarios');?>" class="btn btn-success"><img src="assets/iconos/altaP.png" while=25 height=25><b> Usuarios Activos</b></a>
                <a href="<?php echo base_url('usuarios2');?>" class="btn btn-warning"><img src="assets/iconos/altaP.png" while=25 height=25><b> Usuarios Inactivos</b></a>
            </div><br>
        </div>
    </div>
    <table class="table table-light table-hover text-center table-responsive-lg">
        <thead class="thead-light">
            <tr>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Perfil</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Código Postal</th> 
                <th>Acciones</th>
              
            </tr>
        </thead>
        <?php foreach($usuarios as $row){?>
            <tbody>
                <tr>
                    <td><?php echo $row->usuario?></td>
                    <td><?php echo $row->correo?></td>
                    <td><?php echo $row->perfilTipo?></td>
                    <td><?php echo $row->telefono?></td>
                    <td><?php echo $row->direccion?></td>
                    <td><?php echo $row->ciudad?></td>  
                    <td><?php echo $row->codigo_postal?></td>
                    <td>
                    <!-- <a href="<?php echo base_url('editarUsu').$row->id_usuario;?>" class="btn btn-success" type="button"><img src="assets/iconos/detalle.svg" while=25 height=25> Activar</a> -->
                    <a href="<?php echo base_url('bajaUsu/').$row->id_usuario;?>" class="btn btn-danger" type="button"><img src="assets/iconos/eliminar.svg" while=25 height=25> desactivar</a>
                    </td>
                </tr>
        <?php }?>
            </tbody>
    </table>    
</div>