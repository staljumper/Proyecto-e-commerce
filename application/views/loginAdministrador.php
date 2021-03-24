<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/appe/bootstrap-4.4.1.css">
    <title>Document</title>
</head>
<body>
    
<div class="principal">
        <div class="sign-up">
            <div class="form">
                <h2> Inicia sesión Administrador</h2>
                <form action="<?php echo base_url() . "index.php/administrador/login"; ?>" method="post">
                    <label>
                        <span> Nick </span>
                        <input type="text" name="nick" required>
                    </label>
                    <br>
                    <label>
                        
                        <span>Contraseña</span>
                        <input type="password" name="contrasena" required>
                    </label>
                    <button class="submit" type="submit"> Entrar </button>
                    
          
                </form>
                <a href="<?php echo base_url() . "index.php/Administrador/findex"; ?>"><input type="button" value="Pagina principal"></a>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>