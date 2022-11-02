<!DOCTYPE html>
<html lang="en">
<hr class="featurette-divider">
    <section class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Contacto</h2>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 text-aling-center text-justify">
                            <p class="md-4">Lunes a Viernes de 8:00 a 12:00 hs. <br> y de 16:00 a 20:00 hs.</p>
                            <ul class="infoContacto">
                                <li class="">
                                <a><i class="fas fa-user-check"><img src="assets/iconos/user-check-solid.svg" alt="" while=20 height=16> Sergio Ariel Zapata</i></a></li>                                
                                    <br>
                                <li class="">
                                <a><img src="assets/iconos/qrcode.svg" alt="" while=20 height=24> <i> SAZ InforPOWER </i></a></li>
                                 <br>
                                 <li class="">                                      
                                    <a href="https://wa.me/3794395140" >
                                    <img src="assets/iconos/whatsapp-brands.svg" alt="" while=20 height=20> <i> Tel: 3794395140</i> </a>
                                </li>
                                <br>
                                <li class="">
                                    <a href="mailto:sazinforpower@gmail.com.com"><i class="fas fa-at">
                                    <img src="assets/iconos/arroba.svg" alt="" while=20 height=20> sazinforpower@gmail.com</i></a>
                                </li>
                                <br>
                                <li class="">
                                    <a href="https://goo.gl/maps/AsSMU9nfQhefCW6X8" ><i class="fas fa-map-marked-alt"><img src="assets/iconos/map.svg" alt="" while=20 height=20> Tte. J. J. Arraras 6623</i></a>
                                </li>
                                <br>
                                <li class="">
                                    <a href="https://www.instagram.com/meganexxus/" >
                                        <img src="assets/iconos/instagram.svg" alt="" while=20 height=20> <i> Nuestro instagram </i></a>
                                </li>
                                <br>
                                <li class="">
                                    <a href="https://www.facebook.com/ArielSAZ/">
                                        <img src="assets/iconos/facebook.svg" alt="" while=20 height=20> Visita nuestro Facebook</a>
                                </li>

                            </ul>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-header text-center">
                        <h2>Consulta</h2>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 text-aling-center text-justify">
                        <form class="w-100 mx-auto" method="POST" action="<?php echo base_url('consulta2');?>" enctype="multipart/form-data">
                                 <!--perfil_usuario-->
                                 <input type="hidden" name="perfil_id" value="3">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text"  name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?= old('nombre') ?>">
                                    <p class="text-danger"><?= session('errors.nombre')?></p>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Email</label>
                                    <input type="email"  name="correo" class="form-control" id="correo" placeholder="correo@correo.com" value="<?= old('correo') ?>">
                                    <p class="text-danger"><?= session('errors.correo')?></p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="mensaje">Mensaje</label>
                                    <textarea class="form-control"  name="mensaje" id="mensaje" rows="5" value="<?= old('mensaje') ?>"></textarea>
                                    <p class="text-danger"><?= session('errors.mensaje')?></p>
                                </div>
                                <!--fecha-->
                                <input readonly type="hidden" name="fecha" value="<?php echo date('Y-m-d')?>">
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                    <button type='submit' class='btn btn-success' name="consulta ">Enviar Consulta</button>
                                    </div>
                                </div>
                            </form>
                        </blockquote>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <hr class="featurette-divider">
        <div class="conteriner-fluid">
            <div class="row justify-content-around">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.3543291914493!2d-58.770798486349484!3d-27.45822622278584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ae9b3b72833%3A0xafc1a5fc5fdde9c5!2sTte.%20Juan%20Jose%20Arraras%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1649804973105!5m2!1ses-419!2sar" width="1190" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
</html>