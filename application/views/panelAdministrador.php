<div class="sign-up">
    <div class="form">
        <h1>Panel Administrador</h1>

        <form action="<?php echo base_url() . "index.php/administrador/modificar"; ?>" method="post">
            <input name="id" id="id" type="hidden" value="<?php echo $this->session->userdata('id'); ?>">

            <label>
                <span>Nick:</span>
                <input name="nick" id="nick" type="text" value="<?php echo $this->session->userdata('nick'); ?>">
            </label>
            <label>
                <span>Contraseña:</span>
                <input name="contrasena" id="contrasena" type="password" value="<?php echo $this->session->userdata('contrasena'); ?>">
            </label>



            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="cerrar" value="Cerrar Sesión">
            <input type="submit" name="cerrar" value="Pagina principal">
        </form>

    </div>
</div>
</form>