<div class="sign-up">
    <div class="form">
        <h1>Panel</h1>

        <form action="<?php echo base_url() . "index.php/usuario/modificar"; ?>" method="post">
            <input name="id" id="id" type="hidden" value="<?php echo $this->session->userdata('id'); ?>">
            <label>
                <span>Nombre:</span>
                <input name="nombre" id="nombre" type="text" value="<?php echo $this->session->userdata('nombre'); ?>">
            </label>
            <label>
                <span>Nick:</span>
                <input name="nick" id="nick" type="text" value="<?php echo $this->session->userdata('nick'); ?>">
            </label>
            <label>
                <span>Contraseña:</span>
                <input name="contrasena" id="contrasena" type="password" value="<?php echo $this->session->userdata('contrasena'); ?>">
            </label>
            <label>
                <span>Primer Apellido:</span>
                <input name="apellido1" id="apellido1" type="text" value="<?php echo $this->session->userdata('apellido1'); ?>">
            </label>
            <label>
                <span>Segundo Apellido:</span>
                <input name="apellido2" id="apellido2" type="text" value="<?php echo $this->session->userdata('apellido2'); ?>">
            </label>
            <label>
                <span>Telefono:</span>
                <input name="telefono" id="telefono" type="text" value="<?php echo $this->session->userdata('telefono'); ?>">
            </label>
            <label>
                <span>Email:</span>
                <input name="email" id="email" type="text" value="<?php echo $this->session->userdata('email'); ?>">
            </label>


            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="cerrar" value="Cerrar Sesión">
            <input type="submit" name="cerrar" value="Pagina principal">
        </form>

    </div>
</div>
</form>