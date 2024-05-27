<?php
session_start();
?>

<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: repeating-conic-gradient(blue 10%, yellow 20%, red 30%);">
            <div class="modal-body">
                <div class="m-auto p-2 bg-secondary">
                    <div class="d-flex justify-content-end"> <!-- Contenedor para alinear el botón a la derecha -->
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card bg-dark text-white">
                            <div class="card-body p-4 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">REGISTRO</h2>
                                    <p class="text-white-50 mb-5">Introduce tus datos para completar el registro.</p>
                                    <form action="../class/classAcceso.php" method="POST">
                                        <input type="hidden" name="accion" value="registro">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" name="nombre" id="nombre" class="form-control form-control-lg bg-transparent text-light" placeholder="Nombre">
                                                    <label class="form-label" for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating">
                                                    <input type="text" name="apellidos" id="apellidos" class="form-control form-control-lg bg-transparent text-light" placeholder="Apellidos">
                                                    <label class="form-label" for="apellidos">Apellidos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="email" name="correo" id="correo" class="form-control form-control-lg bg-transparent text-light" placeholder="Correo">
                                            <label class="form-label" for="correo">Correo</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" name="clave" id="clave" class="form-control form-control-lg bg-transparent text-light" placeholder="Contraseña">
                                            <label class="form-label" for="clave">Contraseña</label>
                                        </div>

                                        <div class="mb-4">
                                            <select class="form-select bg-transparent text-light" name="genero" id="genero">
                                                <option class="bg-dark" selected>Género</option>
                                                <option class="bg-dark" value="m">Masculino</option>
                                                <option class="bg-dark" value="f">Femenino</option>
                                                <option class="bg-dark" value="o">Otro</option>
                                            </select>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="number" name="captcha" id="captcha" class="form-control form-control-lg bg-transparent text-light" placeholder="Captcha">
                                            <label class="form-label" for="captcha">
                                                <?php echo $_SESSION['ope_registro']; ?></label>
                                        </div>



                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>
                                        <hr class="border-top border-light">
                                    </form>
                                    <div class="d-flex justify-content-center text-center mt-4 gap-3 pt-1">
                                        <button type="button" class="btn btn-outline-info"><i class="bi bi-facebook"></i>
                                            Facebook</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="bi bi-google"></i> Google</button>
                                        <button type="button" class="btn btn-outline-light"><i class="bi bi-github"></i>
                                            GitHub</button>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">¿Ya tienes cuenta? <a href="#" onclick="closeModal('registroModal'); loadModal('loginModal', 'modalContainerLogin', 'html/loginModal.html');" class="text-white-50 fw-bold">Login</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>