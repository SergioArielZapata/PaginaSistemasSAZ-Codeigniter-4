<main>
    <section class="contenedor_todo">
        <div class="caja_trasera">
            <div class="caja_trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>

            <div class="caja_trasera-registro">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn_registrarse">Registrarse</button>
            </div>
        </div>
        <!--formulario de login y regiostro-->
        <div class="contenedor_login-registro"> 
            <!--Login-->
            <form action="<?php echo base_url('login');?>" method="POST" class="formularioLogin">
                <h2>Iniciar Sesión</h2>
                <input type="email" id="correo" placeholder="Correo Electrónico" name="correoLogin" autofocus="autofocus"  value="<?= old('correoLogin') ?>">
                <p class="text-danger"><?= session('errors.correoLogin')?></p>
                <input type="password" id="pass" placeholder="Contraseña" name="passLogin" autofocus="autofocus" value="">
                <p class="text-danger"><?= session('errors.passLogin')?></p>
                <!-- recibe mensaje del controlador -->
                <?php if(session('msg')): ?>
                    <div class="text-danger">
                        <?= session('msg.body')?>
                    </div>
                <?php endif ?>
                <!--  -->
                <button type='submit' class='btn btn-success'>
                    <i class="fas fa-user-edit" >
                        <img src="assets/iconos/entrar.png" while=25 height=25>
                    </i> Entrar
                </button>
            </form>
            <!--Registro-->
            <form action="<?php echo base_url('registro');?>" method="POST" class="formularioRegistro">
                <h2>Registrarse</h2>
                <input type="text" id="nombre" class="form-control"  placeholder="Nombre completo" name="nombre" autofocus="autofocus" value="<?= old('nombre') ?>">                
                <p class="text-danger"><?= session('errors.nombre')?></p>
                <input type="text" id="apellido" class="form-control" placeholder="Apellido Completo" name="apellido" autofocus="autofocus"  value="<?= old('apellido') ?>">
                <p class="text-danger"><?= session('errors.apellido')?></p>
                <input type="email" id="correo" class="form-control" placeholder="Correo Electrónico" name="correo" autofocus="autofocus"  value="<?= old('correo') ?>">
                <p class="text-danger"><?= session('errors.correo')?></p>
                <input type="text" id="usuario" class="form-control" placeholder="Nombre de Usuario" name="usuario" autofocus="autofocus" value="<?= old('usuario') ?>">
                <p class="text-danger"><?= session('errors.usuario')?></p>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña 8 dígitos o más" name="pass" autofocus="autofocus" value="">
                <p class="text-danger"><?= session('errors.pass')?></p>
                <button type='submit' class='btn btn-success'>
                    <i class="fas fa-user-edit" >
                        <img src="assets/iconos/actualizar.svg" while=25 height=25>
                    </i>Registrarse
                </button>
            </form>
        </div>
    </section>
</main>