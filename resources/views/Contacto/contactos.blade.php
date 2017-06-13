

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/contactos/css/stiloContact.css">
        <title>Contactos</title>
        <link rel="stylesheet"  href="../css/font-awesome.css">
        <link rel="stylesheet"  href="../css/font-awesome.min.css">
    </head>
    <body>

        <header class="header">
            <div class="logo">
                <img src="../img/LogoUnivCostaRica.png" width="230" height="80" alt="Achatada" border="0">
            </div>
            <div class="titulo">
                <h2>UNIVERSIDAD DE COSTA RICA</h2>
                <p class="p1">Maestría de la Carrera Informática Empresarial</p>
            </div>
            <div class="fotolog">
            @extends('homeLogout')
            @section('contenido')
            @endsection
            </div>
        </header>

        <section class="section-body">
            <div class="sec1">
                <button onclick="HomeWeb()"><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
<center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
</div>
<div class="sec5"></div>
<div class="sec6">            
<center><p>Contáctenos</p></center>
<div class="contenedor">
<p>Llene el formulario:</p>
<form action="mailto:chujesus@gmail.com" method="post" enctype="text/plain">
Nombre: <input type="text" name="nombre" size="30" maxlength="100" class="nombre">
<br>
Email: <input type="text" name="email" size="30" maxlength="100" value="@" class="correo">
<br>
Carné: <input type="text" name="poblacion" size="30" maxlength="100" class="carne">
<br>
Sexo
<br>
<input type="radio" name="sexo" value="Varon" checked> Hombre
<br>
<input type="radio" name="sexo" value="Hembra"> Mujer
<br>
Comentarios al profesor:
<br>
<textarea cols="60" rows="7" name="comentarios"></textarea>
<br>
<input type="submit" value="Enviar formulario">
<input type="Reset" value="Borrar todo">
</form>
</div>
</div>
<div class="sec7">
<div class="info">
<center><p>Información</p></center>
Oficina: 8888-8888<br><br>
Horarios de Consulta<br><br>
L-V: 00:00am 00:00pm
</div>
</div>
</section>

        <footer class="footer">
            <div class="social">
                <a href="a" class="item"> <span class="fa fa-facebook"></span></a>
                <a href="a" class="item"> <span class="fa fa-twitter"></span></a>
                <a href="a" class="item"> <span class="fa fa-instagram"></span></a>
            </div>
            <div class="content-links">
                <nav class="menu">
                    <ul>
                        <li><a href="#">UCR</a></li>
                        <li><a href="#">becas-ucr</a></li>
                        <li><a href="#">e-matrícula</a></li>
                    </ul>
                </nav>
            </div>
        </footer>

        <script src="../js/contactos/mainContacto.js"></script>
    </body>
</html>