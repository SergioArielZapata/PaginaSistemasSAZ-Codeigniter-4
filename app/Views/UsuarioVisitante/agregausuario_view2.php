<main>
    <section class="contenedor_todo">
        <div class="caja_trasera">
            <div class="caja_trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la pagina</p>
                <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>

            <div class="caja_trasera-registro text-center">
                <h3><b><FONT COLOR="red">Cuenta Registrada</FONT></b></h3>
                <p><b>Ingrese los datos del registro</b></p>
                <p><b>Complete sus datos personales</b></p>
                <p><b>en la opción "Mis Datos"</b></p>

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
        </div>
    </section>
</main>