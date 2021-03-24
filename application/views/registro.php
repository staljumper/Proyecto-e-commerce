<div class="principal">
    <div class="sign-up">
        <div class="form">
            <h1>Registro</h1>

            <form action="<?php echo base_url() . "index.php/Usuario/registro"; ?>" method="post">

                <label>
                    <span>Nombre:</span>
                    <input name="nombre" id="nombre" type="text">
                </label>
                <label>
                    <span>Nick:</span>
                    <input name="nick" id="nick" type="text">
                </label>
                <label>
                    <span>Contraseña:</span>
                    <input name="contrasena" id="contrasena" type="password">
                </label>
                <label>
                    <span>Primer Apellido:</span>
                    <input name="apellido1" id="apellido1" type="text">
                </label>
                <label>
                    <span>Segundo Apellido:</span>
                    <input name="apellido2" id="apellido2" type="text">
                </label>
                <label>
                    <span>Telefono:</span>
                    <input name="telefono" id="telefono" type="text">
                </label>
                <label>
                    <span>Email:</span>
                    <input name="email" id="email" type="text">
                </label>
                <input type="submit" value="Registrate">


                <a href="<?php echo base_url() . "index.php/Usuario/findex"; ?>"><input type="button" value="Pagina principal"></a>
            </form>

        </div>
    </div>

</div>