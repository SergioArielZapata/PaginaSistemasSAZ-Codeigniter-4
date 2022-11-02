<hr class="featurette-divider">
<h1 class="text-center btn-success">Consultas No Atendidas</h1>
<br>
<div class="text-right">
<td>
    <a href="<?php echo base_url('consultas')?>" class="btn btn-success" type="button"><img src="assets/iconos/verificar.png" while=25 height=25><b> No Atendidos</b></a>
</td>
<td>
    <a href="<?php echo base_url('consultas2')?>" class="btn btn-warning" type="button"><img src="assets/iconos/verificado.png" while=25 height=25><b> Atendidos</b></a>               
</td>
<br><br></div>
<div class="container-fuid">
    <table class="table table-light table-hover text-center table-responsive-lg">
        <thead class="thead-light">
            <tr>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Perfil</th>
                <th>Consulta</th>
                <th>Fecha</th>                
                <th>Acción</th>
            </tr>
        </thead>
        <?php foreach($consultas as $row){?>
            <tbody>
                <tr>
                    <td><?php echo $row->usuario?></td>
                    <td><?php echo $row->correo?></td>
                    <td><?php echo $row->perfilTipo?></td>
                    <td><?php echo $row->mensaje?></td>
                    <td><?php echo $row->fecha?></td>
                    <td>
                    <a href="<?php echo base_url('bajaCon/').$row->id_consulta;?>" class="btn btn-success" type="button"><img src="assets/iconos/verificado.png" while=25 height=25> Atendido</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
    </table>    
</div>