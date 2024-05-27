<?php
session_start();
?>
<div class="modal fade" id="recuperarModal" tabindex="-1" aria-labelledby="recuperarModalLabel" aria-hidden="true">
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

                                    <h2 class="fw-bold mb-2 text-uppercase">RECUPERAR CONTRASEÑA</h2>
                                    <p class="text-white-50 mb-5">Introduce tu correo electrónico.</p>
                                    <form action="../class/classAcceso.php" method="POST">
                                        <input type="hidden" name="accion" value="recuperar">
                                        <div class="form-floating mb-4">
                                            <input type="email" name="correo" id="correo" class="form-control form-control-lg bg-transparent text-light" placeholder="Correo">
                                            <label class="form-label" for="correo">Correo</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="number" name="captcha" id="captcha" class="form-control form-control-lg bg-transparent text-light" placeholder="Captcha">
                                            <label class="form-label" for="captcha">
                                                <?php echo $_SESSION['ope_recuperar']; ?>
                                            </label>
                                        </div>

                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Recuperar</button>
                                    </form>
                                </div>

                                <hr class="border-top border-light">

                                <div>
                                    <p class="mb-0">¿Ya tienes cuenta? <a href="#" onclick="closeModal('recuperarModal'); loadModal('loginModal', 'modalContainerLogin', 'html/loginModal.html');" class="text-white-50 fw-bold">Login</a>
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