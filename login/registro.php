<?php
include ('../includes/header.php');
?>
<div class="container center">
    <div class="row" style="margin:0,auto; width:50%;">
        <div class="col s12 m12 l12">
            <div class="card ">
                <div class="card-content ">
                    <span class="card-title">Registro de usuario</span>
                    <form id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
                        <input type="text" name="usuario" placeholder="nombre" required>
                        <input type="password" name="pass" placeholder="Password" required pattern="[A-Za-z0-9]{8,15}">
                        <input type="password" name="" placeholder="Confirmar Password" required pattern="[A-Za-z0-9]{8,15}">
                        <input type="email" name="email" placeholder="Email" required>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen Perfil</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one file">
                            </div>
                        </div>




                        <input type="submit" value="Registrarse" class="btn blue"></input>

                    </form>
                </div>
                <div class="card-action">
                    <a href="index.php">Inicio de sesión</a>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ('../includes/footerLogin.php');
?>
