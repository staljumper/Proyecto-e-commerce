<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/appe/bootstrap-4.4.1.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <div class="principal">
        <div class="sign-up">
            <div class="form">
                <h2> Inicia sesión </h2>
                <form action="<?php echo base_url() . "index.php/Usuario/login"; ?>" method="post">
                    <label>
                        <span> Nick </span>
                        <input type="text" name="nick" required>
                    </label>
                    <br>
                    <label>

                        <span>Contraseña</span>
                        <input type="password" name="contrasena" id="elpassword" required>
                        <svg id="clickme" width=28 height=25 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z" />
                        </svg>
                        <script>
                            jQuery('#clickme').on('click', function() {
                                jQuery('#elpassword').attr('type', function(index, attr) {
                                    return attr == 'text' ? 'password' : 'text';
                                })
                            })
                        </script>
                    </label>
                    <button class="submit" type="submit"> Entrar </button>


                </form>
                <a href="<?php echo base_url() . "index.php/Usuario/findex"; ?>"><input type="button" value="Pagina principal"></a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>