<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguridad Informatica</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="conexion.js"></script>
</head>
<body>
    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 center-texto">Encriptar & Desencriptar</h2>
        <form action="">
            <fieldset>
                <legend></legend>
                <label for="nombre">Texto a encriptar:</label>
                <textarea name="texto1" id="texto1"></textarea>

                <label for="email">Texto encriptado</label>
                <textarea name="texto2" id="texto2"></textarea>

                <label for="telefono">Texto desencriptado</label>
                <textarea name="texto3" id="texto3"></textarea>                
            </fieldset>            
            <input type="buton" value="ENCRIPTAR" class="boton boton-verde" onclick="encrypt()">
            <input type="buton" value="DESENCRIPTAR" class="boton boton-amarillo" onclick="decrypt()">
        </form>
    </main>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">                 
            </nav>
            <p class="copyright">Todos los derechos reservados Hubert Pérez &copy;</p>
        </div>
    </footer>
</body>
</html>
