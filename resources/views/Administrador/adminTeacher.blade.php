

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/administrador/css/stiloAdminTeacher.css">
        <title>Profesor</title>
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
                <button onclick="HomeAdmi()"><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
<center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
</div>
<div class="sec5"></div>
<div class="sec6">            
<center><p>Agregar docente</p></center>
<div class="contenedor">
<p>Llene el formulario:</p>
<form action="mailto:chujesus@gmail.com" method="post" enctype="text/plain">
Nombre: <input type="text" name="nombre" size="30" maxlength="100" class="nombre">
<br>
Apellidos: <input type="text" name="apellido" size="30" maxlength="100" class="apellidos">
<br>
Email: <input type="text" name="email" size="30" maxlength="100" value="@" class="correo">
<br>
Carrera: <input type="text" name="carrera" size="30" maxlength="100" class="carrera">
<br>
Sede: <input type="text" name="sede" size="30" maxlength="100" class="sede">
<br>
Usuario: <input type="text" name="usuario" size="30" maxlength="100" class="usuario">
<br>
Contraseña: <input type="text" name="contraseña" size="30" maxlength="100" class="contraseña" placeholder="Contraseña">
<br>
<input type="text" name="contraseña" size="30" maxlength="100" placeholder="Confirmar Contraseña" class="contraseña2">
<br>
<input type="submit" value="Agregar" id="btn1">
<input type="Reset" value="Limpiar">
</form>
</div>
</div>
<div class="sec7">
<p>Lista de Profesores</p><br>
1 **********<br>
2 **********<br>
3 **********<br>
4 ..............
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

        <script src="../js/administrador/mainAdminTeacher.js"></script>
    </body>
</html>